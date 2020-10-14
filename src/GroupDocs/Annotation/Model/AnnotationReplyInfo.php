<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="AnnotationReplyInfo.php">
 *   Copyright (c) 2003-2020 Aspose Pty Ltd
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
 * AnnotationReplyInfo
 *
 * @description Describes annotation reply properties
 */
class AnnotationReplyInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "AnnotationReplyInfo";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'id' => 'int',
        'userId' => 'int',
        'userName' => 'string',
        'userEmail' => 'string',
        'comment' => 'string',
        'repliedOn' => '\DateTime',
        'parentReplyId' => 'int'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'userId' => 'int32',
        'userName' => null,
        'userEmail' => null,
        'comment' => null,
        'repliedOn' => 'date-time',
        'parentReplyId' => 'int32'
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
        'userId' => 'UserId',
        'userName' => 'UserName',
        'userEmail' => 'UserEmail',
        'comment' => 'Comment',
        'repliedOn' => 'RepliedOn',
        'parentReplyId' => 'ParentReplyId'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'userId' => 'setUserId',
        'userName' => 'setUserName',
        'userEmail' => 'setUserEmail',
        'comment' => 'setComment',
        'repliedOn' => 'setRepliedOn',
        'parentReplyId' => 'setParentReplyId'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'userId' => 'getUserId',
        'userName' => 'getUserName',
        'userEmail' => 'getUserEmail',
        'comment' => 'getComment',
        'repliedOn' => 'getRepliedOn',
        'parentReplyId' => 'getParentReplyId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['userEmail'] = isset($data['userEmail']) ? $data['userEmail'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['repliedOn'] = isset($data['repliedOn']) ? $data['repliedOn'] : null;
        $this->container['parentReplyId'] = isset($data['parentReplyId']) ? $data['parentReplyId'] : null;
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
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
        if ($this->container['repliedOn'] === null) {
            $invalidProperties[] = "'repliedOn' can't be null";
        }
        if ($this->container['parentReplyId'] === null) {
            $invalidProperties[] = "'parentReplyId' can't be null";
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
        if ($this->container['userId'] === null) {
            return false;
        }
        if ($this->container['repliedOn'] === null) {
            return false;
        }
        if ($this->container['parentReplyId'] === null) {
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
     * Gets userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /*
     * Sets userId
     *
     * @param int $userId Gets or sets the user's unique identifier
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /*
     * Gets userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /*
     * Sets userName
     *
     * @param string $userName Gets or sets the user's name
     *
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;

        return $this;
    }

    /*
     * Gets userEmail
     *
     * @return string
     */
    public function getUserEmail()
    {
        return $this->container['userEmail'];
    }

    /*
     * Sets userEmail
     *
     * @param string $userEmail Gets or sets the user email
     *
     * @return $this
     */
    public function setUserEmail($userEmail)
    {
        $this->container['userEmail'] = $userEmail;

        return $this;
    }

    /*
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /*
     * Sets comment
     *
     * @param string $comment Gets or sets the message
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /*
     * Gets repliedOn
     *
     * @return \DateTime
     */
    public function getRepliedOn()
    {
        return $this->container['repliedOn'];
    }

    /*
     * Sets repliedOn
     *
     * @param \DateTime $repliedOn Gets or sets the reply time
     *
     * @return $this
     */
    public function setRepliedOn($repliedOn)
    {
        $this->container['repliedOn'] = $repliedOn;

        return $this;
    }

    /*
     * Gets parentReplyId
     *
     * @return int
     */
    public function getParentReplyId()
    {
        return $this->container['parentReplyId'];
    }

    /*
     * Sets parentReplyId
     *
     * @param int $parentReplyId Gets or sets the parent reply unique identifier
     *
     * @return $this
     */
    public function setParentReplyId($parentReplyId)
    {
        $this->container['parentReplyId'] = $parentReplyId;

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


