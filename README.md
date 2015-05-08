DISQUS Widget for Yii2
==========
- This widget embeds the Disqus comments plugin into your website.

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
