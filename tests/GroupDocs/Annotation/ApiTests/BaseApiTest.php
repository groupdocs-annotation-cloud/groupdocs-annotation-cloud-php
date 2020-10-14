<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="BaseApiTest.php">
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
namespace GroupDocs\Annotation\ApiTests;

use PHPUnit\Framework\TestCase;
use GroupDocs\Annotation\Configuration;
use GroupDocs\Annotation\InfoApi;
use GroupDocs\Annotation\PreviewApi;
use GroupDocs\Annotation\AnnotateApi;
use GroupDocs\Annotation\StorageApi;
use GroupDocs\Annotation\FileApi;
use GroupDocs\Annotation\FolderApi;

abstract class BaseApiTest extends \PHPUnit_Framework_TestCase
{
    protected static $apiConfig;

    protected static $infoApi;
    protected static $previewApi;
    protected static $annotateApi;
    protected static $storageApi;
    protected static $fileApi;
    protected static $folderApi;
    
    protected static $testFilesUploaded = false;

    /**
     * Cleanup after each test case
     */
    public function tearDown()
    {
        #self::_deleteFolder("annotation");        
    }

    private static function _deleteFolder($folder)
    {
        $request = new \GroupDocs\Annotation\Model\Requests\deleteFolderRequest($folder, null, true);

        self::$folderApi->DeleteFolder($request);
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
        $config = self::getConfig();

        //TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud 
        //      (free registration is required).

        $appSid = $config["AppSID"];
        $appKey = $config["AppKey"];
        $apiBaseUrl = $config["ApiBaseUrl"];

        self::$apiConfig = new Configuration();
        self::$apiConfig->setAppSid($appSid);
        self::$apiConfig->setAppKey($appKey);
        self::$apiConfig->setApiBaseUrl($apiBaseUrl);
        #self::$apiConfig->setDebug(true);

        self::$infoApi = new InfoApi(self::$apiConfig);
        self::$previewApi = new PreviewApi(self::$apiConfig);
        self::$annotateApi = new AnnotateApi(self::$apiConfig);
        self::$storageApi = new StorageApi(self::$apiConfig);
        self::$fileApi = new FileApi(self::$apiConfig);
        self::$folderApi = new FolderApi(self::$apiConfig);

        self::_uploadTestFiles();
    }

    protected static function getConfig()
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
        $files = Internal\TestFiles::getTestFilesListUpload();
        foreach ($files as $file) {
            $path = $file->folder . $file->fileName;
            $isExistRequest = new \GroupDocs\Annotation\Model\Requests\objectExistsRequest($path);
            $isExistResponse = self::$storageApi->objectExists($isExistRequest);
            if (!$isExistResponse->getExists()) {
                $uploadRequest = new \GroupDocs\Annotation\Model\Requests\uploadFileRequest($path, $folder . DIRECTORY_SEPARATOR . $path);
                $response = self::$fileApi->uploadFile($uploadRequest);
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
        return realpath(self::_getTestDataPath() . DIRECTORY_SEPARATOR . $file->folder . $file->fileName);
    }
}
