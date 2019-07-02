<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="RowInfo.php">
 *   Copyright (c) 2003-2019 Aspose Pty Ltd
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
 * RowInfo
 *
 * @description Describes text row information
 */
class RowInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "RowInfo";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'characterCoordinates' => 'double[]',
        'lineHeight' => 'double',
        'lineLeft' => 'double',
        'lineTop' => 'double',
        'lineWidth' => 'double',
        'text' => 'string',
        'textCoordinates' => 'double[]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'characterCoordinates' => 'double',
        'lineHeight' => 'double',
        'lineLeft' => 'double',
        'lineTop' => 'double',
        'lineWidth' => 'double',
        'text' => null,
        'textCoordinates' => 'double'
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
        'characterCoordinates' => 'CharacterCoordinates',
        'lineHeight' => 'LineHeight',
        'lineLeft' => 'LineLeft',
        'lineTop' => 'LineTop',
        'lineWidth' => 'LineWidth',
        'text' => 'Text',
        'textCoordinates' => 'TextCoordinates'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'characterCoordinates' => 'setCharacterCoordinates',
        'lineHeight' => 'setLineHeight',
        'lineLeft' => 'setLineLeft',
        'lineTop' => 'setLineTop',
        'lineWidth' => 'setLineWidth',
        'text' => 'setText',
        'textCoordinates' => 'setTextCoordinates'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'characterCoordinates' => 'getCharacterCoordinates',
        'lineHeight' => 'getLineHeight',
        'lineLeft' => 'getLineLeft',
        'lineTop' => 'getLineTop',
        'lineWidth' => 'getLineWidth',
        'text' => 'getText',
        'textCoordinates' => 'getTextCoordinates'
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
        $this->container['characterCoordinates'] = isset($data['characterCoordinates']) ? $data['characterCoordinates'] : null;
        $this->container['lineHeight'] = isset($data['lineHeight']) ? $data['lineHeight'] : null;
        $this->container['lineLeft'] = isset($data['lineLeft']) ? $data['lineLeft'] : null;
        $this->container['lineTop'] = isset($data['lineTop']) ? $data['lineTop'] : null;
        $this->container['lineWidth'] = isset($data['lineWidth']) ? $data['lineWidth'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['textCoordinates'] = isset($data['textCoordinates']) ? $data['textCoordinates'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['lineHeight'] === null) {
            $invalidProperties[] = "'lineHeight' can't be null";
        }
        if ($this->container['lineLeft'] === null) {
            $invalidProperties[] = "'lineLeft' can't be null";
        }
        if ($this->container['lineTop'] === null) {
            $invalidProperties[] = "'lineTop' can't be null";
        }
        if ($this->container['lineWidth'] === null) {
            $invalidProperties[] = "'lineWidth' can't be null";
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

        if ($this->container['lineHeight'] === null) {
            return false;
        }
        if ($this->container['lineLeft'] === null) {
            return false;
        }
        if ($this->container['lineTop'] === null) {
            return false;
        }
        if ($this->container['lineWidth'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets characterCoordinates
     *
     * @return double[]
     */
    public function getCharacterCoordinates()
    {
        return $this->container['characterCoordinates'];
    }

    /*
     * Sets characterCoordinates
     *
     * @param double[] $characterCoordinates Gets or sets the list of character coordinates
     *
     * @return $this
     */
    public function setCharacterCoordinates($characterCoordinates)
    {
        $this->container['characterCoordinates'] = $characterCoordinates;

        return $this;
    }

    /*
     * Gets lineHeight
     *
     * @return double
     */
    public function getLineHeight()
    {
        return $this->container['lineHeight'];
    }

    /*
     * Sets lineHeight
     *
     * @param double $lineHeight Gets or sets the text line height
     *
     * @return $this
     */
    public function setLineHeight($lineHeight)
    {
        $this->container['lineHeight'] = $lineHeight;

        return $this;
    }

    /*
     * Gets lineLeft
     *
     * @return double
     */
    public function getLineLeft()
    {
        return $this->container['lineLeft'];
    }

    /*
     * Sets lineLeft
     *
     * @param double $lineLeft Gets or sets the x coordinate of the text line upper left corner
     *
     * @return $this
     */
    public function setLineLeft($lineLeft)
    {
        $this->container['lineLeft'] = $lineLeft;

        return $this;
    }

    /*
     * Gets lineTop
     *
     * @return double
     */
    public function getLineTop()
    {
        return $this->container['lineTop'];
    }

    /*
     * Sets lineTop
     *
     * @param double $lineTop Gets or sets the y coordinate of the text line upper left corner
     *
     * @return $this
     */
    public function setLineTop($lineTop)
    {
        $this->container['lineTop'] = $lineTop;

        return $this;
    }

    /*
     * Gets lineWidth
     *
     * @return double
     */
    public function getLineWidth()
    {
        return $this->container['lineWidth'];
    }

    /*
     * Sets lineWidth
     *
     * @param double $lineWidth Gets or sets the text line width
     *
     * @return $this
     */
    public function setLineWidth($lineWidth)
    {
        $this->container['lineWidth'] = $lineWidth;

        return $this;
    }

    /*
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /*
     * Sets text
     *
     * @param string $text Gets or sets the text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /*
     * Gets textCoordinates
     *
     * @return double[]
     */
    public function getTextCoordinates()
    {
        return $this->container['textCoordinates'];
    }

    /*
     * Sets textCoordinates
     *
     * @param double[] $textCoordinates Gets or sets the list of text coordinates
     *
     * @return $this
     */
    public function setTextCoordinates($textCoordinates)
    {
        $this->container['textCoordinates'] = $textCoordinates;

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


