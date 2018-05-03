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

class AnnotationApiTest extends BaseApiTest
{
    /**
     * Test case for deleteCleanDocument
     *
     * Removes annotations from document.
     *
     */
    public function testDeleteCleanDocument()
    {
        $request = new Requests\DeleteCleanDocumentRequest("one-page.pdf", "gfc-testdata/testsdata/groupdocs.annotation");
		
        $result = self::$AnnotationApi->deleteCleanDocument($request);
		
        $this->assertNotNull($result);
    }

    /**
     * Test case for getImport
     *
     * Extracts annotations from document.
     *
     */
    public function testGetImport()
    {
        $request = new Requests\GetImportRequest("one-page-annotated.pdf", "gfc-testdata/testsdata/groupdocs.annotation");
		
        $result = self::$AnnotationApi->getImport($request);
		
        $this->assertNotNull($result);
    }

    /**
     * Test case for putExport
     *
     * Adds annotations to the document.
     *
     */
    public function testPutExport()
    {
        $annotationPosition = new Model\Point(["x" => 852, "y" => 154.31]);
        $reply1 = new Model\AnnotationReplyInfo(["message" => "reply text", "repliedOn" => time(), "userName" => "Admin"]);
        $reply2 = new Model\AnnotationReplyInfo(["message" => "reply2 text", "repliedOn" => time(), "userName" => "Commentator"]);
        $box = new Model\Rectangle(["x" => 173.29, "y" => 154.31, "width" => 142.5, "height" => 9]);
        $annotation = new Model\AnnotationInfo(["annotationPosition" => $annotationPosition,
        "replies" => [$reply1, $reply2],
        "box" => $box,
        "pageNumber" => 0,
        "svgPath" => "[{\"x\":173.2986,\"y\":687.5769},{\"x\":315.7985,\"y\":687.5769},{\"x\":173.2986,\"y\":678.5769},{\"x\":315.7985,\"y\":678.5769}]",
        "type" => 'Text',
        "creatorName" => "Anonym A."]);
        $request = new Requests\PutExportRequest("one-page.pdf", json_encode([$annotation]), "gfc-testdata/testsdata/groupdocs.annotation");
		
        $result = self::$AnnotationApi->putExport($request);
		
        $this->assertNotNull($result);
    }
}
