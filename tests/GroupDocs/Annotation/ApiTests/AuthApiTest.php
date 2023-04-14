<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="AuthApiTest.php">
*   Copyright (c) 2003-2023 Aspose Pty Ltd
* </copyright>
* <summary>
*  Permission is hereby granted, free of charge, to any person obtaining a copy
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
namespace GroupDocs\Annotation\ApiTests;

use GroupDocs\Annotation\Configuration;
use GroupDocs\Annotation\InfoApi;

class AuthApiTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Throws error when AppSid not found
     */
    public function testErrorWhenAppSidNotFound()
    {
        $this->expectException(\GroupDocs\Annotation\ApiException::class);
        $this->expectExceptionMessageMatches("/invalid_client/");

        $config = self::getConfig();
        $apiBaseUrl = $config["ApiBaseUrl"];

        $apiConfig = new Configuration();
        $apiConfig->setAppSid("test");
        $apiConfig->setAppKey("test");
        $apiConfig->setApiBaseUrl($apiBaseUrl);

        $infoApi = new InfoApi($apiConfig);

        $response = $infoApi->getSupportedFileFormats();
    }

    /**
     * Throws error when AppKey not found
     */
    public function testErrorWhenAppKeyNotFound()
    {
        $this->expectException(\GroupDocs\Annotation\ApiException::class);
        $this->expectExceptionMessageMatches("/invalid_client/");

        $config = self::getConfig();
        $apiBaseUrl = $config["ApiBaseUrl"];

        $apiConfig = new Configuration();
        $apiConfig->setAppSid($config["AppSID"]);
        $apiConfig->setAppKey("test");
        $apiConfig->setApiBaseUrl($apiBaseUrl);

        $infoApi = new InfoApi($apiConfig);

        $response = $infoApi->getSupportedFileFormats();
    }

    protected static function getConfig()
    {
        $contents = file_get_contents(realpath(__DIR__ . "/../config.json"));
        $config = \GuzzleHttp\json_decode($contents, true);

        return $config;
    }    
}
