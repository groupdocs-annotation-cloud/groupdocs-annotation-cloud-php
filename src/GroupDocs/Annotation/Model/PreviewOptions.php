<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="PreviewOptions.php">
 *   Copyright (c) 2003-2023 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Annotation\Model;

use \ArrayAccess;
use \GroupDocs\Annotation\ObjectSerializer;

/*
 * PreviewOptions
 *
 * @description Represents options for GetPages API method
 */
class PreviewOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PreviewOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'fileInfo' => '\GroupDocs\Annotation\Model\FileInfo',
        'format' => 'string',
        'pageNumbers' => 'int[]',
        'width' => 'int',
        'height' => 'int',
        'resolution' => 'int',
        'renderComments' => 'bool',
        'renderAnnotations' => 'bool',
        'fontsPath' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'fileInfo' => null,
        'format' => null,
        'pageNumbers' => 'int32',
        'width' => 'int32',
        'height' => 'int32',
        'resolution' => 'int32',
        'renderComments' => null,
        'renderAnnotations' => null,
        'fontsPath' => null
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'fileInfo' => 'FileInfo',
        'format' => 'Format',
        'pageNumbers' => 'PageNumbers',
        'width' => 'Width',
        'height' => 'Height',
        'resolution' => 'Resolution',
        'renderComments' => 'RenderComments',
        'renderAnnotations' => 'RenderAnnotations',
        'fontsPath' => 'FontsPath'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fileInfo' => 'setFileInfo',
        'format' => 'setFormat',
        'pageNumbers' => 'setPageNumbers',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'resolution' => 'setResolution',
        'renderComments' => 'setRenderComments',
        'renderAnnotations' => 'setRenderAnnotations',
        'fontsPath' => 'setFontsPath'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fileInfo' => 'getFileInfo',
        'format' => 'getFormat',
        'pageNumbers' => 'getPageNumbers',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'resolution' => 'getResolution',
        'renderComments' => 'getRenderComments',
        'renderAnnotations' => 'getRenderAnnotations',
        'fontsPath' => 'getFontsPath'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /*
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const FORMAT_PNG = 'PNG';
    const FORMAT_JPEG = 'JPEG';
    const FORMAT_BMP = 'BMP';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_PNG,
            self::FORMAT_JPEG,
            self::FORMAT_BMP,
        ];
    }
    

    /*
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['fileInfo'] = isset($data['fileInfo']) ? $data['fileInfo'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['pageNumbers'] = isset($data['pageNumbers']) ? $data['pageNumbers'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['renderComments'] = isset($data['renderComments']) ? $data['renderComments'] : null;
        $this->container['renderAnnotations'] = isset($data['renderAnnotations']) ? $data['renderAnnotations'] : null;
        $this->container['fontsPath'] = isset($data['fontsPath']) ? $data['fontsPath'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
        $allowedValues = $this->getFormatAllowableValues();
        if (!in_array($this->container['format'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'format', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['resolution'] === null) {
            $invalidProperties[] = "'resolution' can't be null";
        }
        if ($this->container['renderComments'] === null) {
            $invalidProperties[] = "'renderComments' can't be null";
        }
        if ($this->container['renderAnnotations'] === null) {
            $invalidProperties[] = "'renderAnnotations' can't be null";
        }
        return $invalidProperties;
    }

    /*
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['format'] === null) {
            return false;
        }
        $allowedValues = $this->getFormatAllowableValues();
        if (!in_array($this->container['format'], $allowedValues)) {
            return false;
        }
        if ($this->container['width'] === null) {
            return false;
        }
        if ($this->container['height'] === null) {
            return false;
        }
        if ($this->container['resolution'] === null) {
            return false;
        }
        if ($this->container['renderComments'] === null) {
            return false;
        }
        if ($this->container['renderAnnotations'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets fileInfo
     *
     * @return \GroupDocs\Annotation\Model\FileInfo
     */
    public function getFileInfo()
    {
        return $this->container['fileInfo'];
    }

    /*
     * Sets fileInfo
     *
     * @param \GroupDocs\Annotation\Model\FileInfo $fileInfo Input document description
     *
     * @return $this
     */
    public function setFileInfo($fileInfo)
    {
        $this->container['fileInfo'] = $fileInfo;

        return $this;
    }

    /*
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /*
     * Sets format
     *
     * @param string $format Preview format. Supported values are: PNG, JPEG or BMP. Default value is PNG.
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $allowedValues = $this->getFormatAllowableValues();
        if ((!is_numeric($format) && !in_array($format, $allowedValues)) || (is_numeric($format) && !in_array($allowedValues[$format], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'format', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['format'] = $format;

        return $this;
    }

    /*
     * Gets pageNumbers
     *
     * @return int[]
     */
    public function getPageNumbers()
    {
        return $this->container['pageNumbers'];
    }

    /*
     * Sets pageNumbers
     *
     * @param int[] $pageNumbers Page numbers to preview. All pages proceeded if not specified.
     *
     * @return $this
     */
    public function setPageNumbers($pageNumbers)
    {
        $this->container['pageNumbers'] = $pageNumbers;

        return $this;
    }

    /*
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /*
     * Sets width
     *
     * @param int $width Preview image width. Not required. Default width used if not specified or 0.
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /*
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /*
     * Sets height
     *
     * @param int $height Preview image height. Not required. Default width used if not specified or 0.
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /*
     * Gets resolution
     *
     * @return int
     */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /*
     * Sets resolution
     *
     * @param int $resolution Gets or sets the resolution for generated images, in dots per inch. The default value is 96.
     *
     * @return $this
     */
    public function setResolution($resolution)
    {
        $this->container['resolution'] = $resolution;

        return $this;
    }

    /*
     * Gets renderComments
     *
     * @return bool
     */
    public function getRenderComments()
    {
        return $this->container['renderComments'];
    }

    /*
     * Sets renderComments
     *
     * @param bool $renderComments Render document comments. Default value is 'false'.
     *
     * @return $this
     */
    public function setRenderComments($renderComments)
    {
        $this->container['renderComments'] = $renderComments;

        return $this;
    }

    /*
     * Gets renderAnnotations
     *
     * @return bool
     */
    public function getRenderAnnotations()
    {
        return $this->container['renderAnnotations'];
    }

    /*
     * Sets renderAnnotations
     *
     * @param bool $renderAnnotations The property that controls whether annotations will be generated on the preview. Default State - true.
     *
     * @return $this
     */
    public function setRenderAnnotations($renderAnnotations)
    {
        $this->container['renderAnnotations'] = $renderAnnotations;

        return $this;
    }

    /*
     * Gets fontsPath
     *
     * @return string
     */
    public function getFontsPath()
    {
        return $this->container['fontsPath'];
    }

    /*
     * Sets fontsPath
     *
     * @param string $fontsPath The path to directory containing custom fonts in storage
     *
     * @return $this
     */
    public function setFontsPath($fontsPath)
    {
        $this->container['fontsPath'] = $fontsPath;

        return $this;
    }
    /*
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /*
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /*
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /*
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /*
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


