<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="GroupDocs\Annotation\ApiTest.php">
*   Copyright (c) 2003-2018 Aspose Pty Ltd
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
use GroupDocs\Annotation\Model;

require_once "BaseApiTest.php";

class PdfFileApiTest extends BaseApiTest
{
    /**
     * Test case for getPdf
     *
     * Retrieves document as PDF.
     *
     */
    public function testGetPdf()
    {
        $request = new Requests\GetPdfRequest("one-page.pdf", "gfc-testdata/testsdata/groupdocs.annotation");
		
        $result = self::$PdfFileApi->getPdf($request);
		
        $this->assertNotNull($result);
    }

    /**
     * Test case for getPdfStream
     *
     * Downloads document as PDF.
     *
     */
    public function testGetPdfStream()
    {
        $request = new Requests\GetPdfStreamRequest("one-page.pdf", "gfc-testdata/testsdata/groupdocs.annotation");
		
        $result = self::$PdfFileApi->getPdfStream($request);
		
        $this->assertNotNull($result);
    }
}
