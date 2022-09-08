const buildPalette = (colorsList) => {
    const paletteContainer = document.getElementById("colorPalette");
    // const complementaryContainer = document.getElementById("complementary");
    // reset the HTML in case you load various images
    paletteContainer.innerHTML = "";
    // complementaryContainer.innerHTML = "";
  
    const orderedByColor = orderByLuminance(colorsList);
    // const hslColors = convertRGBtoHSL(orderedByColor);
  
    for (let i = 0; i < orderedByColor.length; i++) {
      const hexColor = rgbToHex2(orderedByColor[i]);
  
      // const hexColorComplementary = hslToHex(hslColors[i]);
  
      if (i > 0) {
        const difference = calculateColorDifference(
          orderedByColor[i],
          orderedByColor[i - 1]
        );
  
        // if the distance is less than 120 we ommit that color
        if (difference < 120) {
          continue;
        }
      }
  
      // create the div and text elements for both colors & append it to the document
      // const colorElement = document.createElement("div");
      // colorElement.style.backgroundColor = hexColor;
      // colorElement.appendChild(document.createTextNode(hexColor));
      // paletteContainer.appendChild(colorElement);

      $('#colorPalette').append(`
          <input type="color" onclick="getColor(this.value)" onchange="setColor(this.value)" value="${hexColor}" style="width: 3rem; height: 3rem;">
      `)

      // true when hsl color is not black/white/grey
      // if (hslColors[i].h) {
      //   const complementaryElement = document.createElement("div");
      //   complementaryElement.style.backgroundColor = `hsl(${hslColors[i].h},${hslColors[i].s}%,${hslColors[i].l}%)`;
  
      //   complementaryElement.appendChild(
      //     document.createTextNode(hexColorComplementary)
      //   );
      //   complementaryContainer.appendChild(complementaryElement);
      // }
    }
  };
  
  //  Convert each pixel value ( number ) to hexadecimal ( string ) with base 16
  const rgbToHex2 = (pixel) => {
    const componentToHex = (c) => {
      const hex = c.toString(16);
      return hex.length == 1 ? "0" + hex : hex;
    };
  
    return (
      "#" +
      componentToHex(pixel.r) +
      componentToHex(pixel.g) +
      componentToHex(pixel.b)
    ).toUpperCase();
  };
  
 
  /**
   * Using relative luminance we order the brightness of the colors
   * the fixed values and further explanation about this topic
   * can be found here -> https://en.wikipedia.org/wiki/Luma_(video)
   */
  const orderByLuminance = (rgbValues) => {
    const calculateLuminance = (p) => {
      return 0.2126 * p.r + 0.7152 * p.g + 0.0722 * p.b;
    };
  
    return rgbValues.sort((p1, p2) => {
      return calculateLuminance(p2) - calculateLuminance(p1);
    });
  };
  
  const buildRgb = (imageData) => {
    const rgbValues = [];
    // note that we are loopin every 4!
    // for every Red, Green, Blue and Alpha
    for (let i = 0; i < imageData.length; i += 4) {
      const rgb = {
        r: imageData[i],
        g: imageData[i + 1],
        b: imageData[i + 2],
      };
  
      rgbValues.push(rgb);
    }
  
    return rgbValues;
  };
  
  /**
   * Calculate the color distance or difference between 2 colors
   *
   * further explanation of this topic
   * can be found here -> https://en.wikipedia.org/wiki/Euclidean_distance
   * note: this method is not accuarate for better results use Delta-E distance metric.
   */
  const calculateColorDifference = (color1, color2) => {
    const rDifference = Math.pow(color2.r - color1.r, 2);
    const gDifference = Math.pow(color2.g - color1.g, 2);
    const bDifference = Math.pow(color2.b - color1.b, 2);
  
    return rDifference + gDifference + bDifference;
  };
  
  // returns what color channel has the biggest difference
  const findBiggestColorRange = (rgbValues) => {
    /**
     * Min is initialized to the maximum value posible
     * from there we procced to find the minimum value for that color channel
     *
     * Max is initialized to the minimum value posible
     * from there we procced to fin the maximum value for that color channel
     */
    let rMin = Number.MAX_VALUE;
    let gMin = Number.MAX_VALUE;
    let bMin = Number.MAX_VALUE;
  
    let rMax = Number.MIN_VALUE;
    let gMax = Number.MIN_VALUE;
    let bMax = Number.MIN_VALUE;
  
    rgbValues.forEach((pixel) => {
      rMin = Math.min(rMin, pixel.r);
      gMin = Math.min(gMin, pixel.g);
      bMin = Math.min(bMin, pixel.b);
  
      rMax = Math.max(rMax, pixel.r);
      gMax = Math.max(gMax, pixel.g);
      bMax = Math.max(bMax, pixel.b);
    });
  
    const rRange = rMax - rMin;
    const gRange = gMax - gMin;
    const bRange = bMax - bMin;
  
    // determine which color has the biggest difference
    const biggestRange = Math.max(rRange, gRange, bRange);
    if (biggestRange === rRange) {
      return "r";
    } else if (biggestRange === gRange) {
      return "g";
    } else {
      return "b";
    }
  };
  
  /**
   * Median cut implementation
   * can be found here -> https://en.wikipedia.org/wiki/Median_cut
   */
  const quantization = (rgbValues, depth) => {
    const MAX_DEPTH = 4;
  
    // Base case
    if (depth === MAX_DEPTH || rgbValues.length === 0) {
      const color = rgbValues.reduce(
        (prev, curr) => {
          prev.r += curr.r;
          prev.g += curr.g;
          prev.b += curr.b;
  
          return prev;
        },
        {
          r: 0,
          g: 0,
          b: 0,
        }
      );
  
      color.r = Math.round(color.r / rgbValues.length);
      color.g = Math.round(color.g / rgbValues.length);
      color.b = Math.round(color.b / rgbValues.length);
  
      return [color];
    }
  
    /**
     *  Recursively do the following:
     *  1. Find the pixel channel (red,green or blue) with biggest difference/range
     *  2. Order by this channel
     *  3. Divide in half the rgb colors list
     *  4. Repeat process again, until desired depth or base case
     */
    const componentToSortBy = findBiggestColorRange(rgbValues);
    rgbValues.sort((p1, p2) => {
      return p1[componentToSortBy] - p2[componentToSortBy];
    });
  
    const mid = rgbValues.length / 2;
    return [
      ...quantization(rgbValues.slice(0, mid), depth + 1),
      ...quantization(rgbValues.slice(mid + 1), depth + 1),
    ];
  };
  
  const main = () => {
    const img = document.getElementById("logoImage");
    const image = new Image();
    // const file = imgFile.files[0];
    // const fileReader = new FileReader();
  
    // Whenever file & image is loaded procced to extract the information from the image
    // fileReader.onload = () => {
      image.onload = () => {
        // Set the canvas size to be the same as of the uploaded image
        const canvas = document.createElement("canvas");
        canvas.width = image.width;
        canvas.height = image.height;
        const ctx = canvas.getContext("2d");
        ctx.drawImage(image, 0, 0);
  
        /**
         * getImageData returns an array full of RGBA values
         * each pixel consists of four values: the red value of the colour, the green, the blue and the alpha
         * (transparency). For array value consistency reasons,
         * the alpha is not from 0 to 1 like it is in the RGBA of CSS, but from 0 to 255.
         */
        const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
  
        // Convert the image data to RGB values so its much simpler
        const rgbArray = buildRgb(imageData.data);
  
        /**
         * Color quantization
         * A process that reduces the number of colors used in an image
         * while trying to visually maintin the original image as much as possible
         */
        const quantColors = quantization(rgbArray, 0);
  
        // Create the HTML structure to show the color palette
        buildPalette(quantColors);
      };
      image.src = img.src;
    // };
    // if (file) {
    //   fileReader.readAsDataURL(file);
    // }
  };
  