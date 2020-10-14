<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" >
*   Copyright (c) 2003-2020 Aspose Pty Ltd
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

require_once "BaseApiTest.php";

class PreviewApiTest extends BaseApiTest
{
    public function testGetPagesAndDelete()
    {
        $files = Internal\TestFiles::getTestFilesListPreview();
        foreach ($files as $file) {
            $path = $file->folder . $file->fileName;
            $request = new Requests\getPagesRequest($path, null, null, null, null, null, null, $file->password);
            $response = self::$previewApi->getPages($request);
            $this->assertGreaterThan(0, $response->getTotalCount());
            $this->assertGreaterThan(0, count($response->getEntries()));

            $request = new Requests\deletePagesRequest($path);
            self::$previewApi->deletePages($request);            
        }
    }    
}
