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

use GroupDocs\Annotation\Model;
use GroupDocs\Annotation\Model\Requests;

require_once "BaseApiTestCase.php";

class InfoApiTest extends BaseApiTestCase
{
    public function testGetSupportedFileFormats()
    {
        $response = self::$infoApi->getSupportedFileFormats();
       
        $formats = $response->getFormats();
        
        $this->assertFalse(empty($formats));
        foreach ($formats as $key => $format) {
            $this->assertNotEmpty($format->getExtension());
            $this->assertNotEmpty($format->getFileFormat());
        }
    }

    public function testGetInfo()
    {
        $files = Internal\TestFiles::getTestFilesListPreview();
        foreach ($files as $file) {
            $path = $file->folder . $file->fileName;

            $fileInfo = new Model\FileInfo();
            $fileInfo->setFilePath($path);
            $fileInfo->setPassword($file->password);

            $request = new Requests\getInfoRequest($fileInfo);
            $response = self::$infoApi->getInfo($request);
            $this->assertEquals($path, $response->getPath());
        }
    }   
    
    public function testGetInfoReturnsFileNotFound()
    {
        $this->expectException(\GroupDocs\Annotation\ApiException::class);
        $this->expectExceptionMessage("Specified file not found");

        $fileInfo = new Model\FileInfo();
        $fileInfo->setFilePath("some-folder\\NotExist.docx");

        $request = new Requests\getInfoRequest($fileInfo);       
        $response = self::$infoApi->getInfo($request);
    }    
}
