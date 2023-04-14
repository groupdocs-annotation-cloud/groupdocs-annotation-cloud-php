<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" >
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

use GroupDocs\Annotation\Model\Requests;

require_once "BaseApiTestCase.php";

class StorageApiTest extends BaseApiTestCase
{
    public function testGetDiscUsage()
    {
        $request = new Requests\getDiscUsageRequest();
       
        $response = self::$storageApi->getDiscUsage($request);

        $this->assertGreaterThan(0, $response->getTotalSize());
        $this->assertGreaterThan(0, $response->getUsedSize());     
    }    

    public function testStorageExist()
    {
        $request = new Requests\storageExistsRequest("First Storage");
       
        $response = self::$storageApi->storageExists($request);

        $this->assertTrue($response->getExists());    
    } 

    public function testGetFileVersions()
    {
        $testFile = Internal\TestFiles::TenPagesCells();

        $request = new Requests\getFileVersionsRequest($testFile->folder . $testFile->fileName);
       
        $response = self::$storageApi->getFileVersions($request);

        $this->assertGreaterThan(0, count($response->getValue()));     
    }     

    public function testObjectExists()
    {
        $testFile = Internal\TestFiles::TenPagesCells();

        $request = new Requests\objectExistsRequest($testFile->folder . $testFile->fileName);
       
        $response = self::$storageApi->objectExists($request);

        $this->assertTrue($response->getExists());   
        $this->assertFalse($response->getIsFolder());   
    }  
}
