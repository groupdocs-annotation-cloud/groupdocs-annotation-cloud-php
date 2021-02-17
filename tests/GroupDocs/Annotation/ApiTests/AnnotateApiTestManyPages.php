<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" >
*   Copyright (c) 2003-2021 Aspose Pty Ltd
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

require_once "BaseApiTest.php";

class AnnotateApiTestManyPages extends BaseApiTest
{
    public function testAddAnnotationsManyPages()
    {
        $files = Internal\TestFiles::getTestFilesManyPages();
        foreach ($files as $file) {
            $path = $file->folder . $file->fileName;
            echo "AddAnnotationsManyPages:". $path . "\n";

            $fileInfo = new Model\FileInfo();
            $fileInfo->setFilePath($path);
            $fileInfo->setPassword($file->password);

            $options = new Model\AnnotateOptions();
            $options->setFileInfo($fileInfo);
            $options->setAnnotations($this->GetAnnotations());
            $options->setOutputPath(self::$outputDir . "/" . $file->fileName);

            // Add annotations
            $request = new Requests\annotateRequest($options);
            $result = self::$annotateApi->annotate($request);
            $this->assertNotNull($result);
            $this->assertNotNull($result->getHref());
        }        
    }
    
    public function GetAnnotations()
    {
        $a = new Model\AnnotationInfo();
        $pt = new Model\Point();
        $pt->setX(852);
        $pt->setY(59.388262910798119);
        $a->setAnnotationPosition($pt);
        $box = new Model\Rectangle();
        $box->setX(375.89276123046875);
        $box->setY(59.388263702392578);
        $box->setWidth(88.7330551147461);
        $box->setHeight(37.7290153503418);
        $a->setBox($box);
        $a->setPageNumber(0);
        $a->setPenColor(1201033);
        $a->setPenStyle(Model\AnnotationInfo::PEN_STYLE_SOLID);
        $a->setPenWidth(1);
        $a->setType(Model\AnnotationInfo::TYPE_DISTANCE);
        $a->setCreatorName("Anonym A.");

        $a1 = new Model\AnnotationInfo();
        $pt = new Model\Point();
        $pt->setX(852);
        $pt->setY(59.388262910798119);
        $a1->setAnnotationPosition($pt);
        $box = new Model\Rectangle();
        $box->setX(375.89276123046875);
        $box->setY(59.388263702392578);
        $box->setWidth(88.7330551147461);
        $box->setHeight(37.7290153503418);
        $a1->setBox($box);
        $a1->setPageNumber(2);
        $a1->setPenColor(1201033);
        $a1->setPenStyle(Model\AnnotationInfo::PEN_STYLE_SOLID);
        $a1->setPenWidth(1);
        $a1->setType(Model\AnnotationInfo::TYPE_AREA);
        $a1->setCreatorName("Anonym A.");   

        $a2 = new Model\AnnotationInfo();
        $pt = new Model\Point();
        $pt->setX(852);
        $pt->setY(59.388262910798119);
        $a2->setAnnotationPosition($pt);
        $box = new Model\Rectangle();
        $box->setX(375.89276123046875);
        $box->setY(59.388263702392578);
        $box->setWidth(88.7330551147461);
        $box->setHeight(37.7290153503418);
        $a2->setBox($box);
        $a2->setPageNumber(4);
        $a2->setType(Model\AnnotationInfo::TYPE_POINT);
        $a2->setCreatorName("Anonym A.");

        $a3 = new Model\AnnotationInfo();
        $pt = new Model\Point();
        $pt->setX(852);
        $pt->setY(59.388262910798119);
        $a3->setAnnotationPosition($pt);
        $box = new Model\Rectangle();
        $box->setX(375.89276123046875);
        $box->setY(59.388263702392578);
        $box->setWidth(88.7330551147461);
        $box->setHeight(37.7290153503418);
        $a3->setBox($box);
        $a1->setPageNumber(5);
        $a1->setPenColor(1201033);
        $a1->setPenStyle(Model\AnnotationInfo::PEN_STYLE_SOLID);
        $a1->setPenWidth(1);
        $a3->setType(Model\AnnotationInfo::TYPE_ARROW);
        $a3->setCreatorName("Anonym A."); 

        return [$a, $a1, $a2, $a3];
    }    
}
