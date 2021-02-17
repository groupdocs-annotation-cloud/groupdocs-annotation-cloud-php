<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="AnnotateOptions.php">
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
 * AnnotateOptions
 *
 * @description Defines options for annotating documents
 */
class AnnotateOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "AnnotateOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'fileInfo' => '\GroupDocs\Annotation\Model\FileInfo',
        'annotations' => '\GroupDocs\Annotation\Model\AnnotationInfo[]',
        'firstPage' => 'int',
        'lastPage' => 'int',
        'onlyAnnotatedPages' => 'bool',
        'outputPath' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'fileInfo' => null,
        'annotations' => null,
        'firstPage' => 'int32',
        'lastPage' => 'int32',
        'onlyAnnotatedPages' => null,
        'outputPath' => null
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
        'annotations' => 'Annotations',
        'firstPage' => 'FirstPage',
        'lastPage' => 'LastPage',
        'onlyAnnotatedPages' => 'OnlyAnnotatedPages',
        'outputPath' => 'OutputPath'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fileInfo' => 'setFileInfo',
        'annotations' => 'setAnnotations',
        'firstPage' => 'setFirstPage',
        'lastPage' => 'setLastPage',
        'onlyAnnotatedPages' => 'setOnlyAnnotatedPages',
        'outputPath' => 'setOutputPath'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fileInfo' => 'getFileInfo',
        'annotations' => 'getAnnotations',
        'firstPage' => 'getFirstPage',
        'lastPage' => 'getLastPage',
        'onlyAnnotatedPages' => 'getOnlyAnnotatedPages',
        'outputPath' => 'getOutputPath'
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
        $this->container['fileInfo'] = isset($data['fileInfo']) ? $data['fileInfo'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['firstPage'] = isset($data['firstPage']) ? $data['firstPage'] : null;
        $this->container['lastPage'] = isset($data['lastPage']) ? $data['lastPage'] : null;
        $this->container['onlyAnnotatedPages'] = isset($data['onlyAnnotatedPages']) ? $data['onlyAnnotatedPages'] : null;
        $this->container['outputPath'] = isset($data['outputPath']) ? $data['outputPath'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['firstPage'] === null) {
            $invalidProperties[] = "'firstPage' can't be null";
        }
        if ($this->container['lastPage'] === null) {
            $invalidProperties[] = "'lastPage' can't be null";
        }
        if ($this->container['onlyAnnotatedPages'] === null) {
            $invalidProperties[] = "'onlyAnnotatedPages' can't be null";
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

        if ($this->container['firstPage'] === null) {
            return false;
        }
        if ($this->container['lastPage'] === null) {
            return false;
        }
        if ($this->container['onlyAnnotatedPages'] === null) {
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
     * Gets annotations
     *
     * @return \GroupDocs\Annotation\Model\AnnotationInfo[]
     */
    public function getAnnotations()
    {
        return $this->container['annotations'];
    }

    /*
     * Sets annotations
     *
     * @param \GroupDocs\Annotation\Model\AnnotationInfo[] $annotations List of annotations to add to the document
     *
     * @return $this
     */
    public function setAnnotations($annotations)
    {
        $this->container['annotations'] = $annotations;

        return $this;
    }

    /*
     * Gets firstPage
     *
     * @return int
     */
    public function getFirstPage()
    {
        return $this->container['firstPage'];
    }

    /*
     * Sets firstPage
     *
     * @param int $firstPage First page number when saving page range
     *
     * @return $this
     */
    public function setFirstPage($firstPage)
    {
        $this->container['firstPage'] = $firstPage;

        return $this;
    }

    /*
     * Gets lastPage
     *
     * @return int
     */
    public function getLastPage()
    {
        return $this->container['lastPage'];
    }

    /*
     * Sets lastPage
     *
     * @param int $lastPage Last page number when saving page range
     *
     * @return $this
     */
    public function setLastPage($lastPage)
    {
        $this->container['lastPage'] = $lastPage;

        return $this;
    }

    /*
     * Gets onlyAnnotatedPages
     *
     * @return bool
     */
    public function getOnlyAnnotatedPages()
    {
        return $this->container['onlyAnnotatedPages'];
    }

    /*
     * Sets onlyAnnotatedPages
     *
     * @param bool $onlyAnnotatedPages Indicates whether to save only annotated pages
     *
     * @return $this
     */
    public function setOnlyAnnotatedPages($onlyAnnotatedPages)
    {
        $this->container['onlyAnnotatedPages'] = $onlyAnnotatedPages;

        return $this;
    }

    /*
     * Gets outputPath
     *
     * @return string
     */
    public function getOutputPath()
    {
        return $this->container['outputPath'];
    }

    /*
     * Sets outputPath
     *
     * @param string $outputPath Path to output document in the cloud storage. Required for Add method. Not required if Annotate (with file result) method used.
     *
     * @return $this
     */
    public function setOutputPath($outputPath)
    {
        $this->container['outputPath'] = $outputPath;

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


