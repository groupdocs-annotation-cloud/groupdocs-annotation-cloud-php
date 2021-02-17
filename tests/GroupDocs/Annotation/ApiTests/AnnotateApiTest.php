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

class AnnotateApiTest extends BaseApiTest
{
    public function testAddAnnotations()
    {
        $files = Internal\TestFiles::getTestFilesList();
        foreach ($files as $file) {
            $path = $file->folder . $file->fileName;
            //echo "AddAnnotations:". $path . "\n";

            $fileInfo = new Model\FileInfo();
            $fileInfo->setFilePath($path);
            $fileInfo->setPassword($file->password);

            $options = new Model\AnnotateOptions();
            $options->setFileInfo($fileInfo);
            $options->setAnnotations($this->GetAnnotations());
            $options->setOutputPath(self::$outputDir . "/" . $file->fileName);

            // Add annotation
            $request = new Requests\annotateRequest($options);
            $result = self::$annotateApi->annotate($request);
            $this->assertNotNull($result);
            $this->assertNotNull($result->getHref());
        }        
    }

    public function testAddAnnotationsDirect()
    {
        $file = Internal\TestFiles::OnePagePasswordWords();

        $path = $file->folder . $file->fileName;
        //echo "AddAnnotationsDirect:". $path . "\n";

        $fileInfo = new Model\FileInfo();
        $fileInfo->setFilePath($path);
        $fileInfo->setPassword($file->password);

        $options = new Model\AnnotateOptions();
        $options->setFileInfo($fileInfo);
        $options->setAnnotations($this->GetAnnotations());
        $options->setOutputPath(self::$outputDir . "/" . $file->fileName);

        // Add annotation
        $request = new Requests\annotateDirectRequest($options);
        $result = self::$annotateApi->annotateDirect($request);
        $this->assertNotNull($result);
        $this->assertGreaterThan(0, $result->getSize());
    }    

    public function testExtractAnnotations()
    {
        $files = Internal\TestFiles::getTestFilesWithAnnotations();
        foreach ($files as $file) {
            $path = $file->folder . $file->fileName;
            //echo "ExtractAnnotations:". $path . "\n";

            $fileInfo = new Model\FileInfo();
            $fileInfo->setFilePath($path);
            $fileInfo->setPassword($file->password);

            $request = new Requests\extractRequest($fileInfo);
            $result = self::$annotateApi->extract($request);
            $this->assertNotNull($result);
            $this->assertGreaterThan(0, count($result));
        }    
    }      

    public function testRemoveAnnotations()
    {
        $files = Internal\TestFiles::getTestFilesWithAnnotations();
        foreach ($files as $file) {
            $path = $file->folder . $file->fileName;
            //echo "RemoveAnnotations:". $path . "\n";

            $fileInfo = new Model\FileInfo();
            $fileInfo->setFilePath($path);

            $options = new Model\RemoveOptions();
            $options->setFileInfo($fileInfo);
            $options->setAnnotationIds([1, 2, 3]);
            $options->setOutputPath(self::$outputDir . "/" . $file->fileName);

            // Remove annotation
            $request = new Requests\removeAnnotationsRequest($options);
            $result = self::$annotateApi->removeAnnotations($request);
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
        $a->setType(Model\AnnotationInfo::TYPE_AREA);
        $a->setCreatorName("Anonym A.");
        return [$a];
    }    
}
