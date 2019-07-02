<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="AnnotationReplyInfo.php">
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
        'guid' => 'string',
        'userGuid' => 'string',
        'userName' => 'string',
        'userEmail' => 'string',
        'message' => 'string',
        'repliedOn' => '\DateTime',
        'parentReplyGuid' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'guid' => null,
        'userGuid' => null,
        'userName' => null,
        'userEmail' => null,
        'message' => null,
        'repliedOn' => 'date-time',
        'parentReplyGuid' => null
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
        'userGuid' => 'UserGuid',
        'userName' => 'UserName',
        'userEmail' => 'UserEmail',
        'message' => 'Message',
        'repliedOn' => 'RepliedOn',
        'parentReplyGuid' => 'ParentReplyGuid'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'guid' => 'setGuid',
        'userGuid' => 'setUserGuid',
        'userName' => 'setUserName',
        'userEmail' => 'setUserEmail',
        'message' => 'setMessage',
        'repliedOn' => 'setRepliedOn',
        'parentReplyGuid' => 'setParentReplyGuid'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'guid' => 'getGuid',
        'userGuid' => 'getUserGuid',
        'userName' => 'getUserName',
        'userEmail' => 'getUserEmail',
        'message' => 'getMessage',
        'repliedOn' => 'getRepliedOn',
        'parentReplyGuid' => 'getParentReplyGuid'
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
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['userGuid'] = isset($data['userGuid']) ? $data['userGuid'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['userEmail'] = isset($data['userEmail']) ? $data['userEmail'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['repliedOn'] = isset($data['repliedOn']) ? $data['repliedOn'] : null;
        $this->container['parentReplyGuid'] = isset($data['parentReplyGuid']) ? $data['parentReplyGuid'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['repliedOn'] === null) {
            $invalidProperties[] = "'repliedOn' can't be null";
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

        if ($this->container['repliedOn'] === null) {
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
     * @param string $guid Gets or sets the unique identifier
     *
     * @return $this
     */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;

        return $this;
    }

    /*
     * Gets userGuid
     *
     * @return string
     */
    public function getUserGuid()
    {
        return $this->container['userGuid'];
    }

    /*
     * Sets userGuid
     *
     * @param string $userGuid Gets or sets the user's unique identifier
     *
     * @return $this
     */
    public function setUserGuid($userGuid)
    {
        $this->container['userGuid'] = $userGuid;

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
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /*
     * Sets message
     *
     * @param string $message Gets or sets the message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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
     * Gets parentReplyGuid
     *
     * @return string
     */
    public function getParentReplyGuid()
    {
        return $this->container['parentReplyGuid'];
    }

    /*
     * Sets parentReplyGuid
     *
     * @param string $parentReplyGuid Gets or sets the parent reply unique identifier
     *
     * @return $this
     */
    public function setParentReplyGuid($parentReplyGuid)
    {
        $this->container['parentReplyGuid'] = $parentReplyGuid;

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


