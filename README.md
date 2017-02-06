# [YandexSiteVerification](https://www.mediawiki.org/wiki/Extension:YandexSiteVerification)
MediaWiki extension that adds meta tag for Yandex site owner verification functionality.

## Install
Download the latest snapshot and extract it to your extensions directory. Then include it in your [LocalSettings.php](https://www.mediawiki.org/wiki/Manual:LocalSettings.php) file as in the following example:
```php
wfLoadExtension( 'YandexSiteVerification' );
$wgYandexVerificationCode = '0123456789abcdef'; // Replace this example code with your website's code!
```

## See also
* [Yandex verification description](https://yandex.ru/support/webmaster-troubleshooting/verification/meta-instr.xml)
* [Old original extension](https://www.mediawiki.org/wiki/Extension:GoogleSiteVerification)

