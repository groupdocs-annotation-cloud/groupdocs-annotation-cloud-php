<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="AnnotationInfo.php">
 *   Copyright (c) 2003-2021 Aspose Pty Ltd
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
 * AnnotationInfo
 *
 * @description Describes annotation properties
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
        'id' => 'int',
        'text' => 'string',
        'textToReplace' => 'string',
        'horizontalAlignment' => 'string',
        'verticalAlignment' => 'string',
        'creatorId' => 'int',
        'creatorName' => 'string',
        'creatorEmail' => 'string',
        'box' => '\GroupDocs\Annotation\Model\Rectangle',
        'points' => '\GroupDocs\Annotation\Model\Point[]',
        'pageNumber' => 'int',
        'annotationPosition' => '\GroupDocs\Annotation\Model\Point',
        'svgPath' => 'string',
        'type' => 'string',
        'replies' => '\GroupDocs\Annotation\Model\AnnotationReplyInfo[]',
        'createdOn' => '\DateTime',
        'fontColor' => 'int',
        'penColor' => 'int',
        'penWidth' => 'int',
        'penStyle' => 'string',
        'backgroundColor' => 'int',
        'fontFamily' => 'string',
        'fontSize' => 'double',
        'opacity' => 'double',
        'angle' => 'double',
        'url' => 'string',
        'imagePath' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'text' => null,
        'textToReplace' => null,
        'horizontalAlignment' => null,
        'verticalAlignment' => null,
        'creatorId' => 'int32',
        'creatorName' => null,
        'creatorEmail' => null,
        'box' => null,
        'points' => null,
        'pageNumber' => 'int32',
        'annotationPosition' => null,
        'svgPath' => null,
        'type' => null,
        'replies' => null,
        'createdOn' => 'date-time',
        'fontColor' => 'int32',
        'penColor' => 'int32',
        'penWidth' => 'byte',
        'penStyle' => null,
        'backgroundColor' => 'int32',
        'fontFamily' => null,
        'fontSize' => 'double',
        'opacity' => 'double',
        'angle' => 'double',
        'url' => null,
        'imagePath' => null
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
        'id' => 'Id',
        'text' => 'Text',
        'textToReplace' => 'TextToReplace',
        'horizontalAlignment' => 'HorizontalAlignment',
        'verticalAlignment' => 'VerticalAlignment',
        'creatorId' => 'CreatorId',
        'creatorName' => 'CreatorName',
        'creatorEmail' => 'CreatorEmail',
        'box' => 'Box',
        'points' => 'Points',
        'pageNumber' => 'PageNumber',
        'annotationPosition' => 'AnnotationPosition',
        'svgPath' => 'SvgPath',
        'type' => 'Type',
        'replies' => 'Replies',
        'createdOn' => 'CreatedOn',
        'fontColor' => 'FontColor',
        'penColor' => 'PenColor',
        'penWidth' => 'PenWidth',
        'penStyle' => 'PenStyle',
        'backgroundColor' => 'BackgroundColor',
        'fontFamily' => 'FontFamily',
        'fontSize' => 'FontSize',
        'opacity' => 'Opacity',
        'angle' => 'Angle',
        'url' => 'Url',
        'imagePath' => 'ImagePath'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'text' => 'setText',
        'textToReplace' => 'setTextToReplace',
        'horizontalAlignment' => 'setHorizontalAlignment',
        'verticalAlignment' => 'setVerticalAlignment',
        'creatorId' => 'setCreatorId',
        'creatorName' => 'setCreatorName',
        'creatorEmail' => 'setCreatorEmail',
        'box' => 'setBox',
        'points' => 'setPoints',
        'pageNumber' => 'setPageNumber',
        'annotationPosition' => 'setAnnotationPosition',
        'svgPath' => 'setSvgPath',
        'type' => 'setType',
        'replies' => 'setReplies',
        'createdOn' => 'setCreatedOn',
        'fontColor' => 'setFontColor',
        'penColor' => 'setPenColor',
        'penWidth' => 'setPenWidth',
        'penStyle' => 'setPenStyle',
        'backgroundColor' => 'setBackgroundColor',
        'fontFamily' => 'setFontFamily',
        'fontSize' => 'setFontSize',
        'opacity' => 'setOpacity',
        'angle' => 'setAngle',
        'url' => 'setUrl',
        'imagePath' => 'setImagePath'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'text' => 'getText',
        'textToReplace' => 'getTextToReplace',
        'horizontalAlignment' => 'getHorizontalAlignment',
        'verticalAlignment' => 'getVerticalAlignment',
        'creatorId' => 'getCreatorId',
        'creatorName' => 'getCreatorName',
        'creatorEmail' => 'getCreatorEmail',
        'box' => 'getBox',
        'points' => 'getPoints',
        'pageNumber' => 'getPageNumber',
        'annotationPosition' => 'getAnnotationPosition',
        'svgPath' => 'getSvgPath',
        'type' => 'getType',
        'replies' => 'getReplies',
        'createdOn' => 'getCreatedOn',
        'fontColor' => 'getFontColor',
        'penColor' => 'getPenColor',
        'penWidth' => 'getPenWidth',
        'penStyle' => 'getPenStyle',
        'backgroundColor' => 'getBackgroundColor',
        'fontFamily' => 'getFontFamily',
        'fontSize' => 'getFontSize',
        'opacity' => 'getOpacity',
        'angle' => 'getAngle',
        'url' => 'getUrl',
        'imagePath' => 'getImagePath'
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

    const HORIZONTAL_ALIGNMENT_NONE = 'None';
    const HORIZONTAL_ALIGNMENT_LEFT = 'Left';
    const HORIZONTAL_ALIGNMENT_CENTER = 'Center';
    const HORIZONTAL_ALIGNMENT_RIGHT = 'Right';
    const VERTICAL_ALIGNMENT_NONE = 'None';
    const VERTICAL_ALIGNMENT_TOP = 'Top';
    const VERTICAL_ALIGNMENT_CENTER = 'Center';
    const VERTICAL_ALIGNMENT_BOTTOM = 'Bottom';
    const TYPE_NONE = 'None';
    const TYPE_AREA = 'Area';
    const TYPE_ARROW = 'Arrow';
    const TYPE_DISTANCE = 'Distance';
    const TYPE_ELLIPSE = 'Ellipse';
    const TYPE_LINK = 'Link';
    const TYPE_POINT = 'Point';
    const TYPE_POLYLINE = 'Polyline';
    const TYPE_RESOURCES_REDACTION = 'ResourcesRedaction';
    const TYPE_TEXT_FIELD = 'TextField';
    const TYPE_TEXT_HIGHLIGHT = 'TextHighlight';
    const TYPE_TEXT_REDACTION = 'TextRedaction';
    const TYPE_TEXT_REPLACEMENT = 'TextReplacement';
    const TYPE_TEXT_STRIKEOUT = 'TextStrikeout';
    const TYPE_TEXT_UNDERLINE = 'TextUnderline';
    const TYPE_WATERMARK = 'Watermark';
    const TYPE_IMAGE = 'Image';
    const PEN_STYLE_SOLID = 'Solid';
    const PEN_STYLE_DASH = 'Dash';
    const PEN_STYLE_DASH_DOT = 'DashDot';
    const PEN_STYLE_DOT = 'Dot';
    const PEN_STYLE_LONG_DASH = 'LongDash';
    const PEN_STYLE_DASH_DOT_DOT = 'DashDotDot';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHorizontalAlignmentAllowableValues()
    {
        return [
            self::HORIZONTAL_ALIGNMENT_NONE,
            self::HORIZONTAL_ALIGNMENT_LEFT,
            self::HORIZONTAL_ALIGNMENT_CENTER,
            self::HORIZONTAL_ALIGNMENT_RIGHT,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVerticalAlignmentAllowableValues()
    {
        return [
            self::VERTICAL_ALIGNMENT_NONE,
            self::VERTICAL_ALIGNMENT_TOP,
            self::VERTICAL_ALIGNMENT_CENTER,
            self::VERTICAL_ALIGNMENT_BOTTOM,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NONE,
            self::TYPE_AREA,
            self::TYPE_ARROW,
            self::TYPE_DISTANCE,
            self::TYPE_ELLIPSE,
            self::TYPE_LINK,
            self::TYPE_POINT,
            self::TYPE_POLYLINE,
            self::TYPE_RESOURCES_REDACTION,
            self::TYPE_TEXT_FIELD,
            self::TYPE_TEXT_HIGHLIGHT,
            self::TYPE_TEXT_REDACTION,
            self::TYPE_TEXT_REPLACEMENT,
            self::TYPE_TEXT_STRIKEOUT,
            self::TYPE_TEXT_UNDERLINE,
            self::TYPE_WATERMARK,
            self::TYPE_IMAGE,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPenStyleAllowableValues()
    {
        return [
            self::PEN_STYLE_SOLID,
            self::PEN_STYLE_DASH,
            self::PEN_STYLE_DASH_DOT,
            self::PEN_STYLE_DOT,
            self::PEN_STYLE_LONG_DASH,
            self::PEN_STYLE_DASH_DOT_DOT,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['textToReplace'] = isset($data['textToReplace']) ? $data['textToReplace'] : null;
        $this->container['horizontalAlignment'] = isset($data['horizontalAlignment']) ? $data['horizontalAlignment'] : null;
        $this->container['verticalAlignment'] = isset($data['verticalAlignment']) ? $data['verticalAlignment'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['creatorEmail'] = isset($data['creatorEmail']) ? $data['creatorEmail'] : null;
        $this->container['box'] = isset($data['box']) ? $data['box'] : null;
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
        $this->container['pageNumber'] = isset($data['pageNumber']) ? $data['pageNumber'] : null;
        $this->container['annotationPosition'] = isset($data['annotationPosition']) ? $data['annotationPosition'] : null;
        $this->container['svgPath'] = isset($data['svgPath']) ? $data['svgPath'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['replies'] = isset($data['replies']) ? $data['replies'] : null;
        $this->container['createdOn'] = isset($data['createdOn']) ? $data['createdOn'] : null;
        $this->container['fontColor'] = isset($data['fontColor']) ? $data['fontColor'] : null;
        $this->container['penColor'] = isset($data['penColor']) ? $data['penColor'] : null;
        $this->container['penWidth'] = isset($data['penWidth']) ? $data['penWidth'] : null;
        $this->container['penStyle'] = isset($data['penStyle']) ? $data['penStyle'] : null;
        $this->container['backgroundColor'] = isset($data['backgroundColor']) ? $data['backgroundColor'] : null;
        $this->container['fontFamily'] = isset($data['fontFamily']) ? $data['fontFamily'] : null;
        $this->container['fontSize'] = isset($data['fontSize']) ? $data['fontSize'] : null;
        $this->container['opacity'] = isset($data['opacity']) ? $data['opacity'] : null;
        $this->container['angle'] = isset($data['angle']) ? $data['angle'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['imagePath'] = isset($data['imagePath']) ? $data['imagePath'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['horizontalAlignment'] === null) {
            $invalidProperties[] = "'horizontalAlignment' can't be null";
        }
        $allowedValues = $this->getHorizontalAlignmentAllowableValues();
        if (!in_array($this->container['horizontalAlignment'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'horizontalAlignment', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['verticalAlignment'] === null) {
            $invalidProperties[] = "'verticalAlignment' can't be null";
        }
        $allowedValues = $this->getVerticalAlignmentAllowableValues();
        if (!in_array($this->container['verticalAlignment'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'verticalAlignment', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['creatorId'] === null) {
            $invalidProperties[] = "'creatorId' can't be null";
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

        if ($this->container['createdOn'] === null) {
            $invalidProperties[] = "'createdOn' can't be null";
        }
        $allowedValues = $this->getPenStyleAllowableValues();
        if (!in_array($this->container['penStyle'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'penStyle', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['horizontalAlignment'] === null) {
            return false;
        }
        $allowedValues = $this->getHorizontalAlignmentAllowableValues();
        if (!in_array($this->container['horizontalAlignment'], $allowedValues)) {
            return false;
        }
        if ($this->container['verticalAlignment'] === null) {
            return false;
        }
        $allowedValues = $this->getVerticalAlignmentAllowableValues();
        if (!in_array($this->container['verticalAlignment'], $allowedValues)) {
            return false;
        }
        if ($this->container['creatorId'] === null) {
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
        if ($this->container['createdOn'] === null) {
            return false;
        }
        $allowedValues = $this->getPenStyleAllowableValues();
        if (!in_array($this->container['penStyle'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /*
     * Sets id
     *
     * @param int $id Gets or sets the unique identifier
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $text Gets or sets the annotation text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /*
     * Gets textToReplace
     *
     * @return string
     */
    public function getTextToReplace()
    {
        return $this->container['textToReplace'];
    }

    /*
     * Sets textToReplace
     *
     * @param string $textToReplace GGets or sets text to be replaced
     *
     * @return $this
     */
    public function setTextToReplace($textToReplace)
    {
        $this->container['textToReplace'] = $textToReplace;

        return $this;
    }

    /*
     * Gets horizontalAlignment
     *
     * @return string
     */
    public function getHorizontalAlignment()
    {
        return $this->container['horizontalAlignment'];
    }

    /*
     * Sets horizontalAlignment
     *
     * @param string $horizontalAlignment Gets or sets text horizontal alignment
     *
     * @return $this
     */
    public function setHorizontalAlignment($horizontalAlignment)
    {
        $allowedValues = $this->getHorizontalAlignmentAllowableValues();
        if ((!is_numeric($horizontalAlignment) && !in_array($horizontalAlignment, $allowedValues)) || (is_numeric($horizontalAlignment) && !in_array($allowedValues[$horizontalAlignment], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'horizontalAlignment', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['horizontalAlignment'] = $horizontalAlignment;

        return $this;
    }

    /*
     * Gets verticalAlignment
     *
     * @return string
     */
    public function getVerticalAlignment()
    {
        return $this->container['verticalAlignment'];
    }

    /*
     * Sets verticalAlignment
     *
     * @param string $verticalAlignment Gets or sets text vertical alignment
     *
     * @return $this
     */
    public function setVerticalAlignment($verticalAlignment)
    {
        $allowedValues = $this->getVerticalAlignmentAllowableValues();
        if ((!is_numeric($verticalAlignment) && !in_array($verticalAlignment, $allowedValues)) || (is_numeric($verticalAlignment) && !in_array($allowedValues[$verticalAlignment], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'verticalAlignment', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['verticalAlignment'] = $verticalAlignment;

        return $this;
    }

    /*
     * Gets creatorId
     *
     * @return int
     */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /*
     * Sets creatorId
     *
     * @param int $creatorId Gets or sets the creator unique identifier
     *
     * @return $this
     */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;

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
     * @param string $creatorName Gets or sets the name of the creator
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
     * @param string $creatorEmail Gets or sets the creator's email
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
     * @param \GroupDocs\Annotation\Model\Rectangle $box Gets or sets the box where annotation will be placed
     *
     * @return $this
     */
    public function setBox($box)
    {
        $this->container['box'] = $box;

        return $this;
    }

    /*
     * Gets points
     *
     * @return \GroupDocs\Annotation\Model\Point[]
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /*
     * Sets points
     *
     * @param \GroupDocs\Annotation\Model\Point[] $points Gets or sets collection of points that describe rectangles with text
     *
     * @return $this
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

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
     * @param int $pageNumber Gets or sets the number of page where annotation will be placed
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
     * @param \GroupDocs\Annotation\Model\Point $annotationPosition Gets or sets the annotation position
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
     * @param string $svgPath Gets or sets the annotation SVG path
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
     * @param string $type Gets or sets the annotation type
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
     * @param \GroupDocs\Annotation\Model\AnnotationReplyInfo[] $replies Gets or sets the array of annotation replies
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
     * @param \DateTime $createdOn Gets or sets the annotation created on date
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
     * @param int $fontColor Gets or sets the annotation's font color
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
     * @param int $penColor Gets or sets the annotation's pen color
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
     * @param int $penWidth Gets or sets the annotation's pen width
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
     * @return string
     */
    public function getPenStyle()
    {
        return $this->container['penStyle'];
    }

    /*
     * Sets penStyle
     *
     * @param string $penStyle Gets or sets the annotation's pen style
     *
     * @return $this
     */
    public function setPenStyle($penStyle)
    {
        $allowedValues = $this->getPenStyleAllowableValues();
        if ((!is_numeric($penStyle) && !in_array($penStyle, $allowedValues)) || (is_numeric($penStyle) && !in_array($allowedValues[$penStyle], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'penStyle', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
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
     * @param int $backgroundColor Gets or sets the annotation's background color
     *
     * @return $this
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->container['backgroundColor'] = $backgroundColor;

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
     * @param string $fontFamily Gets or sets the annotation's font family
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
     * @param double $fontSize Gets or sets the annotation's font size
     *
     * @return $this
     */
    public function setFontSize($fontSize)
    {
        $this->container['fontSize'] = $fontSize;

        return $this;
    }

    /*
     * Gets opacity
     *
     * @return double
     */
    public function getOpacity()
    {
        return $this->container['opacity'];
    }

    /*
     * Sets opacity
     *
     * @param double $opacity Gets or sets the annotation's opacity
     *
     * @return $this
     */
    public function setOpacity($opacity)
    {
        $this->container['opacity'] = $opacity;

        return $this;
    }

    /*
     * Gets angle
     *
     * @return double
     */
    public function getAngle()
    {
        return $this->container['angle'];
    }

    /*
     * Sets angle
     *
     * @param double $angle Gets or sets the watermark annotation's rotation angle
     *
     * @return $this
     */
    public function setAngle($angle)
    {
        $this->container['angle'] = $angle;

        return $this;
    }

    /*
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /*
     * Sets url
     *
     * @param string $url Gets or sets annotation link url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /*
     * Gets imagePath
     *
     * @return string
     */
    public function getImagePath()
    {
        return $this->container['imagePath'];
    }

    /*
     * Sets imagePath
     *
     * @param string $imagePath Gets or sets image file path in cloud storage, for Image annotations
     *
     * @return $this
     */
    public function setImagePath($imagePath)
    {
        $this->container['imagePath'] = $imagePath;

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


