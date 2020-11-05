![](https://img.shields.io/badge/api-v2.0-lightgrey) ![Packagist Version](https://img.shields.io/packagist/v/groupdocscloud/groupdocs-annotation-cloud) ![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/groupdocscloud/groupdocs-annotation-cloud) [![GitHub license](https://img.shields.io/github/license/groupdocs-annotation-cloud/groupdocs-annotation-cloud-php)](https://github.com/groupdocs-annotation-cloud/groupdocs-annotation-cloud-php/blob/master/LICENSE) 

# Annotate Documents via Python

[GroupDocs.Annotation Cloud SDK for PHP](https://products.groupdocs.cloud/annotation/php) wraps GroupDocs.Annotation RESTful APIs so you may integrate Document Annotation features in your own apps with zero initial cost.

The solution helps in applying annotations, sticky notes, watermark overlays, redactions, text replacements and markups to documents, presentations, emails, spreadsheets, PDF, images, and other file formats.

## Annotate Documents & Images in the Cloud

- Import document annotations.
- Add or remove annotations.
- Export annotated document back to its original format.
- Preview document pages as images.
- Fetch document information, such as, page count & file size.

Check out the [Developer's Guide](https://docs.groupdocs.cloud/annotation/developer-guide/) to know more about GroupDocs.Annotation REST API.

## Microsoft Office Formats

**Microsoft Word:** DOC, DOCM, DOCX, DOT, DOTM, DOTX, RTF\
**Microsoft Excel:** XLS, XLSX\
**Microsoft PowerPoint:** PPT, PPTX, PPSX\
**Microsoft Visio:** VSSX, VSS, VSSM, VDX, VSD, VSDX, VSDM, VSTM, VSX, VTX\
**Microsoft Outlook:** EML, EMLX, MSG

## Other Document Formats

**Portable:** PDF\
**OpenDocument:** ODT, OTT, ODP, OTP\
**Images:** BMP, PNG, JPG, JPEG, TIFF, TIF, GIF\
**Web:** MHTML\
**Others:** TXT

## Get Started with GroupDocs.Annotation Cloud SDK for Ruby

First create an account at [GroupDocs for Cloud](https://dashboard.groupdocs.cloud/) and get your application information. Next, follow the installation steps to get started.

## Installation

### Composer

The package is available at [Packagist](https://packagist.org/) and it can be installed via [Composer](http://getcomposer.org/) by executing the following command.

```shell
composer require groupdocscloud/groupdocs-annotation-cloud
```

Alternatively, add the following to `composer.json` to install SDK via Composer directly from this repository. Then run `composer install`.

```javascript
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/groupdocs-annotation-cloud/groupdocs-annotation-cloud-php.git"
    }
  ],
  "require": {
    "groupdocscloud/groupdocs-annotation-cloud": "*"
  }
}
```

### Manual

Clone or download this repository, then run `composer install` in the root directory to install dependencies and include `autoload.php` into your code file.

```php
require_once('/path/to/groupdocs-annotation-cloud-php/vendor/autoload.php');
```

### Tests

To run the unit tests set your AppSID and AppKey in [json.config](tests/GroupDocs/Annotation/config.json) and execute following commands.

```shell
php composer.phar install
./vendor/bin/phpunit
```

## Get Supported File Formats for Annotation

```php
<?php

require_once(__DIR__ . '/vendor/autoload.php');

//TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required).
$configuration = new GroupDocs\Annotation\Configuration();
$configuration->setAppSid("XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX");
$configuration->setAppKey("XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX");

$infoApi = new GroupDocs\Annotation\InfoApi($configuration); 

try {
    $response = $infoApi->getSupportedFileFormats();

    foreach ($response->getFormats() as $key => $format) {
        echo $format->getFileFormat() . " - " .  $format->getExtension(), "\n";
    }
} catch (Exception $e) {
    echo  "Something went wrong: ",  $e->getMessage(), "\n";
    PHP_EOL;
}

?>

```
## GroupDocs.Annotation Cloud SDKs in Popular Languages

| .NET | Java | PHP | Python | Ruby | Node.js |
|---|---|---|---|---|---|
| [GitHub](https://github.com/groupdocs-annotation-cloud/groupdocs-annotation-cloud-dotnet) | [GitHub](https://github.com/groupdocs-annotation-cloud/groupdocs-annotation-cloud-java) | [GitHub](https://github.com/groupdocs-annotation-cloud/groupdocs-annotation-cloud-php) | [GitHub](https://github.com/groupdocs-annotation-cloud/groupdocs-annotation-cloud-python) | [GitHub](https://github.com/groupdocs-annotation-cloud/groupdocs-annotation-cloud-ruby)  | [GitHub](https://github.com/groupdocs-annotation-cloud/groupdocs-annotation-cloud-node) |
| [NuGet](https://www.nuget.org/packages/GroupDocs.Annotation-Cloud/) | [Maven](https://repository.groupdocs.cloud/webapp/#/artifacts/browse/tree/General/repo/com/groupdocs/groupdocs-annotation-cloud) | [Composer](https://packagist.org/packages/groupdocscloud/groupdocs-annotation-cloud) | [PIP](https://pypi.org/project/groupdocs-annotation-cloud/) | [GEM](https://rubygems.org/gems/groupdocs_annotation_cloud)  | [NPM](https://www.npmjs.com/package/groupdocs-annotation-cloud) | 

[Home](https://www.groupdocs.cloud/) | [Product Page](https://products.groupdocs.cloud/annotation/php) | [Documentation](https://docs.groupdocs.cloud/annotation/) | [Live Demo](https://products.groupdocs.app/annotation/total) | [API Reference](https://apireference.groupdocs.cloud/annotation/) | [Code Samples](https://github.com/groupdocs-annotation-cloud/groupdocs-annotation-cloud-php-samples) | [Blog](https://blog.groupdocs.cloud/category/annotation/) | [Free Support](https://forum.groupdocs.cloud/c/annotation) | [Free Trial](https://dashboard.groupdocs.cloud)

