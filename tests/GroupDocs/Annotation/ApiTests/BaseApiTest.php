<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="BaseApiTest.php">
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
namespace GroupDocs\Annotation\ApiTests;

use PHPUnit\Framework\TestCase;
use Aspose\Storage\StorageApi;
use GroupDocs\Annotation\Configuration;
use GroupDocs\Annotation\AnnotationApi;
use GroupDocs\Annotation\ImageInfoApi;
use GroupDocs\Annotation\ImagePagesApi;
use GroupDocs\Annotation\PdfFileApi;

abstract class BaseApiTest extends \PHPUnit_Framework_TestCase
{
    protected static $config;
    protected static $AnnotationApi;
    protected static $ImageInfoApi;
    protected static $PdfFileApi;
    protected static $ImagePagesApi;
    protected static $storageApi;

    protected static $testFilesUploaded;

    /**
     * Cleanup after each test case
     */
    public function tearDown()
    {
        self::_removeTempFiles();
    }

    private static function _removeTempFiles()
    {
        self::$storageApi->DeleteFolder("cache", null, "true");
        self::$storageApi->DeleteFolder("tests", null, "true");
    }

    /**
     * Setup before each test suite
     */
    public static function setUpBeforeClass()
    {
        self::_initTests();
    }

    private static function _initTests()
    {
        $config = self::_getConfig();

        //TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud 
        //      (free registration is required).
        $appSid = $config["AppSID"];
        $appKey = $config["AppKey"];
        $apiBaseUrl = $config["ApiBaseUrl"];

        self::$storageApi = new StorageApi();
        self::$storageApi->apiClient->appSid = $appSid;
        self::$storageApi->apiClient->apiKey = $appKey;
        self::$storageApi->apiClient->apiServer = $apiBaseUrl . "/v1";

        self::$config = new Configuration();
        self::$config->setAppSid($appSid);
        self::$config->setAppKey($appKey);
        self::$config->setHost($apiBaseUrl);
        self::$AnnotationApi = new AnnotationApi(self::$config);
        self::$ImageInfoApi = new ImageInfoApi(self::$config);
        self::$PdfFileApi = new PdfFileApi(self::$config);
        self::$ImagePagesApi = new ImagePagesApi(self::$config);

        // self::_uploadTestFiles();
    }

    private static function _getConfig()
    {
        $contents = file_get_contents(realpath(__DIR__ . "/../config.json"));
        $config = \GuzzleHttp\json_decode($contents, true);

        return $config;
    }

    private static function _uploadTestFiles()
    {
        if (self::$testFilesUploaded) {
            return;
        }

        $folder = self::_getTestDataPath();
        $dir_iterator = new \RecursiveDirectoryIterator($folder);
        $iterator = new \RecursiveIteratorIterator($dir_iterator, \RecursiveIteratorIterator::SELF_FIRST);

        foreach ($iterator as $file) {
            if (!$file->isDir()) {
                $filePath = $file->getPathName();

                $filePathInStorage = str_replace($folder . '\\', "", $filePath);
                $filePathInStorage = str_replace("\\", "/", $filePathInStorage);

                $response = self::$storageApi->GetIsExist($filePathInStorage);
                if (!$response->fileExist->isExist) {
                    self::$storageApi->PutCreate($filePathInStorage, null, null, $filePath);
                }
            }
        }

        self::$testFilesUploaded = true;
    }

    private static function _getTestDataPath()
    {
        return realpath(__DIR__ . '/../Resources/TestData/');
    }

    /**
     * Serializes object as JSON
     */
    protected static function serializeObject($obj)
    {
        $optionsFile = tmpfile();
        $optionsFilePath = stream_get_meta_data($optionsFile)['uri'];
        fwrite($optionsFile, $obj->__toString());

        return [$optionsFile, $optionsFilePath];
    }

    /**
     * Returns path to test file
     */
    protected static function getTestFilePath($file)
    {
        return realpath(self::_getTestDataPath() . DIRECTORY_SEPARATOR .  $file->folder . DIRECTORY_SEPARATOR . $file->fileName);
    }
}
