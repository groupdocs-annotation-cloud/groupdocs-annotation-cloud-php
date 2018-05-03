<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="AnnotationInfo.php">
 *   Copyright (c) 2003-2018 Aspose Pty Ltd
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
/*
 * AnnotationInfo
 */

namespace GroupDocs\Annotation\Model;

use \ArrayAccess;
use \GroupDocs\Annotation\ObjectSerializer;

/*
 * AnnotationInfo
 *
 */
class AnnotationInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "AnnotationInfo";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'guid' => 'string',
        'documentGuid' => 'int',
        'text' => 'string',
        'creatorGuid' => 'string',
        'creatorName' => 'string',
        'creatorEmail' => 'string',
        'box' => '\GroupDocs\Annotation\Model\Rectangle',
        'pageNumber' => 'int',
        'annotationPosition' => '\GroupDocs\Annotation\Model\Point',
        'svgPath' => 'string',
        'type' => 'string',
        'access' => 'string',
        'replies' => '\GroupDocs\Annotation\Model\AnnotationReplyInfo[]',
        'createdOn' => '\DateTime',
        'fontColor' => 'int',
        'penColor' => 'int',
        'penWidth' => 'int',
        'penStyle' => 'int',
        'backgroundColor' => 'int',
        'fieldText' => 'string',
        'fontFamily' => 'string',
        'fontSize' => 'double'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'guid' => null,
        'documentGuid' => 'int64',
        'text' => null,
        'creatorGuid' => null,
        'creatorName' => null,
        'creatorEmail' => null,
        'box' => null,
        'pageNumber' => 'int32',
        'annotationPosition' => null,
        'svgPath' => null,
        'type' => null,
        'access' => null,
        'replies' => null,
        'createdOn' => 'date-time',
        'fontColor' => 'int32',
        'penColor' => 'int32',
        'penWidth' => 'byte',
        'penStyle' => 'byte',
        'backgroundColor' => 'int32',
        'fieldText' => null,
        'fontFamily' => null,
        'fontSize' => 'double'
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
        'guid' => 'Guid',
        'documentGuid' => 'DocumentGuid',
        'text' => 'Text',
        'creatorGuid' => 'CreatorGuid',
        'creatorName' => 'CreatorName',
        'creatorEmail' => 'CreatorEmail',
        'box' => 'Box',
        'pageNumber' => 'PageNumber',
        'annotationPosition' => 'AnnotationPosition',
        'svgPath' => 'SvgPath',
        'type' => 'Type',
        'access' => 'Access',
        'replies' => 'Replies',
        'createdOn' => 'CreatedOn',
        'fontColor' => 'FontColor',
        'penColor' => 'PenColor',
        'penWidth' => 'PenWidth',
        'penStyle' => 'PenStyle',
        'backgroundColor' => 'BackgroundColor',
        'fieldText' => 'FieldText',
        'fontFamily' => 'FontFamily',
        'fontSize' => 'FontSize'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'guid' => 'setGuid',
        'documentGuid' => 'setDocumentGuid',
        'text' => 'setText',
        'creatorGuid' => 'setCreatorGuid',
        'creatorName' => 'setCreatorName',
        'creatorEmail' => 'setCreatorEmail',
        'box' => 'setBox',
        'pageNumber' => 'setPageNumber',
        'annotationPosition' => 'setAnnotationPosition',
        'svgPath' => 'setSvgPath',
        'type' => 'setType',
        'access' => 'setAccess',
        'replies' => 'setReplies',
        'createdOn' => 'setCreatedOn',
        'fontColor' => 'setFontColor',
        'penColor' => 'setPenColor',
        'penWidth' => 'setPenWidth',
        'penStyle' => 'setPenStyle',
        'backgroundColor' => 'setBackgroundColor',
        'fieldText' => 'setFieldText',
        'fontFamily' => 'setFontFamily',
        'fontSize' => 'setFontSize'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'guid' => 'getGuid',
        'documentGuid' => 'getDocumentGuid',
        'text' => 'getText',
        'creatorGuid' => 'getCreatorGuid',
        'creatorName' => 'getCreatorName',
        'creatorEmail' => 'getCreatorEmail',
        'box' => 'getBox',
        'pageNumber' => 'getPageNumber',
        'annotationPosition' => 'getAnnotationPosition',
        'svgPath' => 'getSvgPath',
        'type' => 'getType',
        'access' => 'getAccess',
        'replies' => 'getReplies',
        'createdOn' => 'getCreatedOn',
        'fontColor' => 'getFontColor',
        'penColor' => 'getPenColor',
        'penWidth' => 'getPenWidth',
        'penStyle' => 'getPenStyle',
        'backgroundColor' => 'getBackgroundColor',
        'fieldText' => 'getFieldText',
        'fontFamily' => 'getFontFamily',
        'fontSize' => 'getFontSize'
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

    const TYPE_TEXT = 'Text';
    const TYPE_AREA = 'Area';
    const TYPE_POINT = 'Point';
    const TYPE_TEXT_STRIKEOUT = 'TextStrikeout';
    const TYPE_POLYLINE = 'Polyline';
    const TYPE_TEXT_FIELD = 'TextField';
    const TYPE_WATERMARK = 'Watermark';
    const TYPE_TEXT_REPLACEMENT = 'TextReplacement';
    const TYPE_ARROW = 'Arrow';
    const TYPE_TEXT_REDACTION = 'TextRedaction';
    const TYPE_RESOURCES_REDACTION = 'ResourcesRedaction';
    const TYPE_TEXT_UNDERLINE = 'TextUnderline';
    const TYPE_DISTANCE = 'Distance';
    const ACCESS__PUBLIC = 'Public';
    const ACCESS__PRIVATE = 'Private';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TEXT,
            self::TYPE_AREA,
            self::TYPE_POINT,
            self::TYPE_TEXT_STRIKEOUT,
            self::TYPE_POLYLINE,
            self::TYPE_TEXT_FIELD,
            self::TYPE_WATERMARK,
            self::TYPE_TEXT_REPLACEMENT,
            self::TYPE_ARROW,
            self::TYPE_TEXT_REDACTION,
            self::TYPE_RESOURCES_REDACTION,
            self::TYPE_TEXT_UNDERLINE,
            self::TYPE_DISTANCE,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccessAllowableValues()
    {
        return [
            self::ACCESS__PUBLIC,
            self::ACCESS__PRIVATE,
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
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['documentGuid'] = isset($data['documentGuid']) ? $data['documentGuid'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['creatorGuid'] = isset($data['creatorGuid']) ? $data['creatorGuid'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['creatorEmail'] = isset($data['creatorEmail']) ? $data['creatorEmail'] : null;
        $this->container['box'] = isset($data['box']) ? $data['box'] : null;
        $this->container['pageNumber'] = isset($data['pageNumber']) ? $data['pageNumber'] : null;
        $this->container['annotationPosition'] = isset($data['annotationPosition']) ? $data['annotationPosition'] : null;
        $this->container['svgPath'] = isset($data['svgPath']) ? $data['svgPath'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['access'] = isset($data['access']) ? $data['access'] : null;
        $this->container['replies'] = isset($data['replies']) ? $data['replies'] : null;
        $this->container['createdOn'] = isset($data['createdOn']) ? $data['createdOn'] : null;
        $this->container['fontColor'] = isset($data['fontColor']) ? $data['fontColor'] : null;
        $this->container['penColor'] = isset($data['penColor']) ? $data['penColor'] : null;
        $this->container['penWidth'] = isset($data['penWidth']) ? $data['penWidth'] : null;
        $this->container['penStyle'] = isset($data['penStyle']) ? $data['penStyle'] : null;
        $this->container['backgroundColor'] = isset($data['backgroundColor']) ? $data['backgroundColor'] : null;
        $this->container['fieldText'] = isset($data['fieldText']) ? $data['fieldText'] : null;
        $this->container['fontFamily'] = isset($data['fontFamily']) ? $data['fontFamily'] : null;
        $this->container['fontSize'] = isset($data['fontSize']) ? $data['fontSize'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['documentGuid'] === null) {
            $invalidProperties[] = "'documentGuid' can't be null";
        }
        if ($this->container['box'] === null) {
            $invalidProperties[] = "'box' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAccessAllowableValues();
        if (!in_array($this->container['access'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'access', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['createdOn'] === null) {
            $invalidProperties[] = "'createdOn' can't be null";
        }
        if ($this->container['fontColor'] === null) {
            $invalidProperties[] = "'fontColor' can't be null";
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

        if ($this->container['documentGuid'] === null) {
            return false;
        }
        if ($this->container['box'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getAccessAllowableValues();
        if (!in_array($this->container['access'], $allowedValues)) {
            return false;
        }
        if ($this->container['createdOn'] === null) {
            return false;
        }
        if ($this->container['fontColor'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets guid
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /*
     * Sets guid
     *
     * @param string $guid Gets or sets the unique identifier.
     *
     * @return $this
     */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;

        return $this;
    }

    /*
     * Gets documentGuid
     *
     * @return int
     */
    public function getDocumentGuid()
    {
        return $this->container['documentGuid'];
    }

    /*
     * Sets documentGuid
     *
     * @param int $documentGuid Gets or sets the document unique identifier.
     *
     * @return $this
     */
    public function setDocumentGuid($documentGuid)
    {
        $this->container['documentGuid'] = $documentGuid;

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
     * @param string $text Gets or sets the text.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /*
     * Gets creatorGuid
     *
     * @return string
     */
    public function getCreatorGuid()
    {
        return $this->container['creatorGuid'];
    }

    /*
     * Sets creatorGuid
     *
     * @param string $creatorGuid Gets or sets the creator unique identifier.
     *
     * @return $this
     */
    public function setCreatorGuid($creatorGuid)
    {
        $this->container['creatorGuid'] = $creatorGuid;

        return $this;
    }

    /*
     * Gets creatorName
     *
     * @return string
     */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /*
     * Sets creatorName
     *
     * @param string $creatorName Gets or sets the name of the creator.
     *
     * @return $this
     */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;

        return $this;
    }

    /*
     * Gets creatorEmail
     *
     * @return string
     */
    public function getCreatorEmail()
    {
        return $this->container['creatorEmail'];
    }

    /*
     * Sets creatorEmail
     *
     * @param string $creatorEmail Gets or sets the creator email.
     *
     * @return $this
     */
    public function setCreatorEmail($creatorEmail)
    {
        $this->container['creatorEmail'] = $creatorEmail;

        return $this;
    }

    /*
     * Gets box
     *
     * @return \GroupDocs\Annotation\Model\Rectangle
     */
    public function getBox()
    {
        return $this->container['box'];
    }

    /*
     * Sets box
     *
     * @param \GroupDocs\Annotation\Model\Rectangle $box Gets or sets the box.
     *
     * @return $this
     */
    public function setBox($box)
    {
        $this->container['box'] = $box;

        return $this;
    }

    /*
     * Gets pageNumber
     *
     * @return int
     */
    public function getPageNumber()
    {
        return $this->container['pageNumber'];
    }

    /*
     * Sets pageNumber
     *
     * @param int $pageNumber Gets or sets the page number.
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->container['pageNumber'] = $pageNumber;

        return $this;
    }

    /*
     * Gets annotationPosition
     *
     * @return \GroupDocs\Annotation\Model\Point
     */
    public function getAnnotationPosition()
    {
        return $this->container['annotationPosition'];
    }

    /*
     * Sets annotationPosition
     *
     * @param \GroupDocs\Annotation\Model\Point $annotationPosition Gets or sets the annotation position.
     *
     * @return $this
     */
    public function setAnnotationPosition($annotationPosition)
    {
        $this->container['annotationPosition'] = $annotationPosition;

        return $this;
    }

    /*
     * Gets svgPath
     *
     * @return string
     */
    public function getSvgPath()
    {
        return $this->container['svgPath'];
    }

    /*
     * Sets svgPath
     *
     * @param string $svgPath Gets or sets the SVG path.
     *
     * @return $this
     */
    public function setSvgPath($svgPath)
    {
        $this->container['svgPath'] = $svgPath;

        return $this;
    }

    /*
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /*
     * Sets type
     *
     * @param string $type Gets or sets the type.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if ((!is_numeric($type) && !in_array($type, $allowedValues)) || (is_numeric($type) && !in_array($allowedValues[$type], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'type', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['type'] = $type;

        return $this;
    }

    /*
     * Gets access
     *
     * @return string
     */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /*
     * Sets access
     *
     * @param string $access Gets or sets the access.
     *
     * @return $this
     */
    public function setAccess($access)
    {
        $allowedValues = $this->getAccessAllowableValues();
        if ((!is_numeric($access) && !in_array($access, $allowedValues)) || (is_numeric($access) && !in_array($allowedValues[$access], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'access', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['access'] = $access;

        return $this;
    }

    /*
     * Gets replies
     *
     * @return \GroupDocs\Annotation\Model\AnnotationReplyInfo[]
     */
    public function getReplies()
    {
        return $this->container['replies'];
    }

    /*
     * Sets replies
     *
     * @param \GroupDocs\Annotation\Model\AnnotationReplyInfo[] $replies Gets or sets the replies.
     *
     * @return $this
     */
    public function setReplies($replies)
    {
        $this->container['replies'] = $replies;

        return $this;
    }

    /*
     * Gets createdOn
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->container['createdOn'];
    }

    /*
     * Sets createdOn
     *
     * @param \DateTime $createdOn Gets or sets the created on.
     *
     * @return $this
     */
    public function setCreatedOn($createdOn)
    {
        $this->container['createdOn'] = $createdOn;

        return $this;
    }

    /*
     * Gets fontColor
     *
     * @return int
     */
    public function getFontColor()
    {
        return $this->container['fontColor'];
    }

    /*
     * Sets fontColor
     *
     * @param int $fontColor Gets or sets the color of the font.
     *
     * @return $this
     */
    public function setFontColor($fontColor)
    {
        $this->container['fontColor'] = $fontColor;

        return $this;
    }

    /*
     * Gets penColor
     *
     * @return int
     */
    public function getPenColor()
    {
        return $this->container['penColor'];
    }

    /*
     * Sets penColor
     *
     * @param int $penColor Gets or sets the color of the pen.
     *
     * @return $this
     */
    public function setPenColor($penColor)
    {
        $this->container['penColor'] = $penColor;

        return $this;
    }

    /*
     * Gets penWidth
     *
     * @return int
     */
    public function getPenWidth()
    {
        return $this->container['penWidth'];
    }

    /*
     * Sets penWidth
     *
     * @param int $penWidth Gets or sets the width of the pen.
     *
     * @return $this
     */
    public function setPenWidth($penWidth)
    {
        $this->container['penWidth'] = $penWidth;

        return $this;
    }

    /*
     * Gets penStyle
     *
     * @return int
     */
    public function getPenStyle()
    {
        return $this->container['penStyle'];
    }

    /*
     * Sets penStyle
     *
     * @param int $penStyle Gets or sets the pen style.
     *
     * @return $this
     */
    public function setPenStyle($penStyle)
    {
        $this->container['penStyle'] = $penStyle;

        return $this;
    }

    /*
     * Gets backgroundColor
     *
     * @return int
     */
    public function getBackgroundColor()
    {
        return $this->container['backgroundColor'];
    }

    /*
     * Sets backgroundColor
     *
     * @param int $backgroundColor Gets or sets the color of the background.
     *
     * @return $this
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->container['backgroundColor'] = $backgroundColor;

        return $this;
    }

    /*
     * Gets fieldText
     *
     * @return string
     */
    public function getFieldText()
    {
        return $this->container['fieldText'];
    }

    /*
     * Sets fieldText
     *
     * @param string $fieldText Gets or sets the field text.
     *
     * @return $this
     */
    public function setFieldText($fieldText)
    {
        $this->container['fieldText'] = $fieldText;

        return $this;
    }

    /*
     * Gets fontFamily
     *
     * @return string
     */
    public function getFontFamily()
    {
        return $this->container['fontFamily'];
    }

    /*
     * Sets fontFamily
     *
     * @param string $fontFamily Gets or sets the font family.
     *
     * @return $this
     */
    public function setFontFamily($fontFamily)
    {
        $this->container['fontFamily'] = $fontFamily;

        return $this;
    }

    /*
     * Gets fontSize
     *
     * @return double
     */
    public function getFontSize()
    {
        return $this->container['fontSize'];
    }

    /*
     * Sets fontSize
     *
     * @param double $fontSize Gets or sets the size of the font.
     *
     * @return $this
     */
    public function setFontSize($fontSize)
    {
        $this->container['fontSize'] = $fontSize;

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


