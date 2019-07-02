<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="TestFiles.php">
 *   Copyright (c) 2003-2019 Aspose Pty Ltd
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

namespace GroupDocs\Annotation\ApiTests\Internal;

require_once "TestFile.php";

 /*
 * Describes file for tests.
 */
class TestFiles
{
    public static function OnePageCells() {
        $file = new TestFile();
        $file->fileName = "one-page.xlsx";
        $file->folder = "cells\\";
        $file->password = null;
        return $file;
    }

    public static function OnePagePasswordCells() {
        $file = new TestFile();
        $file->fileName = "one-page-password.xlsx";
        $file->folder = "cells\\";
        $file->password = "password";
        return $file;
    }

    public static function TenPagesCells() {
        $file = new TestFile();
        $file->fileName = "ten-pages.xlsx";
        $file->folder = "cells\\";
        $file->password = null;
        return $file;
    }    

    public static function OnePageDiagram() {
        $file = new TestFile();
        $file->fileName = "one-page.vsd";
        $file->folder = "diagram\\";
        $file->password = null;
        return $file;
    }

    public static function TenPagesDiagram() {
        $file = new TestFile();
        $file->fileName = "ten-pages.vsd";
        $file->folder = "diagram\\";
        $file->password = null;
        return $file;
    }

    public static function OnePageEmail() {
        $file = new TestFile();
        $file->fileName = "one-page.emlx";
        $file->folder = "email\\";
        $file->password = null;
        return $file;
    }    

    public static function OnePageHtml() {
        $file = new TestFile();
        $file->fileName = "one-page.html";
        $file->folder = "html\\";
        $file->password = null;
        return $file;
    } 

    public static function OnePageBmp() {
        $file = new TestFile();
        $file->fileName = "one-page.bmp";
        $file->folder = "images\\";
        $file->password = null;
        return $file;
    } 

    public static function OnePagePng() {
        $file = new TestFile();
        $file->fileName = "one-page.png";
        $file->folder = "images\\";
        $file->password = null;
        return $file;
    } 

    public static function OnePagePdf() {
        $file = new TestFile();
        $file->fileName = "one-page.pdf";
        $file->folder = "pdf\\";
        $file->password = null;
        return $file;
    }

    public static function OnePagePasswordPdf() {
        $file = new TestFile();
        $file->fileName = "one-page-password.pdf";
        $file->folder = "pdf\\";
        $file->password = "password";
        return $file;
    }

    public static function TenPagesPdf() {
        $file = new TestFile();
        $file->fileName = "ten-pages.pdf";
        $file->folder = "pdf\\";
        $file->password = null;
        return $file;
    }

    public static function OnePageSlides() {
        $file = new TestFile();
        $file->fileName = "one-page.pptx";
        $file->folder = "slides\\";
        $file->password = null;
        return $file;
    }

    public static function OnePagePasswordSlides() {
        $file = new TestFile();
        $file->fileName = "one-page-password.pptx";
        $file->folder = "slides\\";
        $file->password = "password";
        return $file;
    }

    public static function TenPagesSlides() {
        $file = new TestFile();
        $file->fileName = "ten-pages.pptx";
        $file->folder = "slides\\";
        $file->password = null;
        return $file;
    }

    public static function OnePageWords() {
        $file = new TestFile();
        $file->fileName = "one-page.docx";
        $file->folder = "words\\";
        $file->password = null;
        return $file;
    }

    public static function OnePagePasswordWords() {
        $file = new TestFile();
        $file->fileName = "one-page-password.docx";
        $file->folder = "words\\";
        $file->password = "password";
        return $file;
    }

    public static function TenPagesWords() {
        $file = new TestFile();
        $file->fileName = "ten-pages.docx";
        $file->folder = "words\\";
        $file->password = null;
        return $file;
    }

    public static function getTestFilesListUpload() {        
        return array(
            self::OnePageCells(),
            self::OnePagePasswordCells(),
            self::TenPagesCells(),
            self::OnePageDiagram(),
            self::TenPagesDiagram(),
            self::OnePageEmail(),
            self::OnePageHtml(),
            self::OnePageBmp(),
            self::OnePagePng(),
            self::OnePagePdf(),
            self::OnePagePasswordPdf(),
            self::TenPagesPdf(),
            self::OnePageSlides(),
            self::OnePagePasswordSlides(),
            self::TenPagesSlides(),
            self::OnePageWords(),
            self::OnePagePasswordWords(),
            self::TenPagesWords()
        );
    }

    public static function getTestFilesList() {        
        return array(
            #self::OnePageCells(),
            #self::OnePagePasswordCells(),
            #self::TenPagesCells(),
            self::OnePageDiagram(),
            self::TenPagesDiagram(),
            self::OnePageEmail(),
            #self::OnePageHtml(),
            self::OnePageBmp(),
            self::OnePagePng(),
            self::OnePagePdf(),
            self::OnePagePasswordPdf(),
            self::TenPagesPdf(),
            self::OnePageSlides(),
            self::OnePagePasswordSlides(),
            self::TenPagesSlides(),
            self::OnePageWords(),
            self::OnePagePasswordWords(),
            self::TenPagesWords()
        );
    }

    public static function getTestFilesListPreview() {        
        return array(
            self::OnePageCells(),
            self::TenPagesCells(),
            self::OnePageDiagram(),
            self::TenPagesDiagram(),
            self::OnePageEmail(),
            self::OnePageHtml(),
            self::OnePageBmp(),
            self::OnePagePng(),
            self::OnePagePdf(),
            self::OnePagePasswordPdf(),
            self::TenPagesPdf(),
            self::OnePageSlides(),
            self::TenPagesSlides(),
            self::OnePageWords()
        );
    }

    public static function getTestFilesNoPassword() {        
        return array(
            self::OnePageCells(),
            self::TenPagesCells(),
            self::OnePageDiagram(),
            self::TenPagesDiagram(),
            self::OnePageEmail(),
            self::OnePageHtml(),
            self::OnePageBmp(),
            self::OnePagePng(),
            self::OnePagePdf(),
            self::TenPagesPdf(),
            self::OnePageSlides(),
            self::TenPagesSlides(),
            self::OnePageWords(),
            self::TenPagesWords()
        );
    }

    public static function getTestFilesManyPages() {        
        return array(
            self::TenPagesDiagram(),
            #self::TenPagesPdf(),
            self::TenPagesSlides()
            #self::TenPagesWords()
        );
    }

}
