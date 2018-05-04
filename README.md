# GroupDocs.Annotation Cloud SDK for PHP
This repository contains GroupDocs.Annotation Cloud SDK for PHP source code. This SDK allows you to work with GroupDocs.Annotaion Cloud REST APIs in your PHP applications.

## Dependencies
- PHP 5.5 or later

## Authorization
To use SDK you need AppSID and AppKey authorization keys. You can your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required).  

## Installation & Usage
### Composer

The package is available at [Packagist](https://packagist.org/) and it can be installed via [Composer](http://getcomposer.org/) by executing following command:
```
composer require groupdocscloud/annotation-sdk-php
``` 

Or you can install SDK via [Composer](http://getcomposer.org/) directly from this repository, add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/groupdocs-annotation-cloud/groupdocs-annotation-cloud-php"
    }
  ],
  "require": {
    "groupdocscloud/annotation-sdk-php": "*"
  }
}
```

Then run `composer install`

### Manual Installation

Clone or download this repository, then run `composer install` in the root directory to install dependencies and include `autoload.php` into your code file:

```php
require_once('/path/to/groupdocs-annotation-cloud-php/vendor/autoload.php');
```

## Tests

To run the unit tests set your AppSID and AppKey in [json.config](tests/GroupDocs/Annotaion/config.json) and execute following commands:

```
composer install
./vendor/bin/phpunit
```

## Getting Started
Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php

require_once(__DIR__ . '/vendor/autoload.php');

//TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required).
$configuration = new Configuration();
$configuration->setAppSid("XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX");
$configuration->setAppKey("XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX");

$annotationApi = new AnnotationApi($configuration);

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
try {
  $request = new Requests\PutExportRequest("one-page.pdf", json_encode([$annotation]), "gfc-testdata/testsdata/groupdocs.annotation");
  $response = $annotationApi->putExport($request);
  echo $response->getFileInfo();
} catch (Exception $e) {
  echo  "Something went wrong: ",  $e->getMessage(), "\n";
  PHP_EOL;
}

?>

## Licensing
GroupDocs.Annotation for Cloud SDK for PHP is licensed under [MIT License](LICENSE).

## Resources
+ [**Website**](https://www.groupdocs.cloud)
+ [**Product Home**](https://products.groupdocs.cloud/annotation/cloud)
+ [**Documentation**](https://docs.groupdocs.cloud/display/annotationcloud/Home)
+ [**Free Support Forum**](https://forum.groupdocs.cloud/c/annotation)
+ [**Blog**](https://blog.groupdocs.cloud/category/groupdocs-annotation-cloud-product-family)

## Contact Us
Your feedback is very important to us. Please feel free to contact us using our [Support Forums](https://forum.groupdocs.cloud/c/annotation).



