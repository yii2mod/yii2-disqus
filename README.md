DISQUS Widget for Yii2
==========
This widget embeds the Disqus comments plugin into your website.

[![Latest Stable Version](https://poser.pugx.org/yii2mod/yii2-disqus/v/stable)](https://packagist.org/packages/yii2mod/yii2-disqus) [![Total Downloads](https://poser.pugx.org/yii2mod/yii2-disqus/downloads)](https://packagist.org/packages/yii2mod/yii2-disqus) [![License](https://poser.pugx.org/yii2mod/yii2-disqus/license)](https://packagist.org/packages/yii2mod/yii2-disqus)

Installation    
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist yii2mod/yii2-disqus "*"
```

or add

```json
"yii2mod/yii2-disqus": "*"
```

to the require section of your composer.json.

Usage
------------
* Once the extension is installed, simply add widget to your page as follows:
```php
 echo Disqus::widget([
      'options' => ['shortname' => 'DISQUS_SHORTNAME']
  ]);
```

* Advanced widget usage
```php
echo Disqus::widget([
    'options' => ['shortname' => 'DISQUS_SHORTNAME', 'identifier'=>'DISQUS_IDENTIFIER', 'url'=>'URL'],
]);
```
