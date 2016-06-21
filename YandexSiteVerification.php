<?php
/**
 * YandexSiteVerification Extension for MediaWiki
 *
 * @author Dolfinus
 * @license GPL v2 or later
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'This file is a MediaWiki extension, it is not a valid entry point' );
}

$wgExtensionCredits['other'][] = array(
	'path'           => __FILE__,
	'name'           => 'Yandex Site Verification Integration',
	'version'        => '0.1.1',
	'author'         => array('Dolfinus', 'Adam Shorland'),
	'descriptionmsg' => 'yav-desc',
	'url'            => 'https://www.mediawiki.org/wiki/Extension:YandexSiteVerification',
	'license-name' => 'GPL-2.0+'
);

$wgHooks['BeforePageDisplay'][]  = 'YandexSiteVerificationHook';

$wgYandexVerificationCode = $GLOBALS['wgYandexVerificationCode'] ? $GLOBALS['wgYandexVerificationCode'] : '';

$wgExtensionMessagesFiles['YandexSiteVerification'] = __DIR__ . '/YandexSiteVerification.i18n.php';

function YandexSiteVerificationHook( OutputPage &$out, Skin &$skin ) {
	global $wgYandexVerificationCode;
	if( $wgYandexVerificationCode !== '' ) {
		$out->addMeta( 'yandex-verification', $wgYandexVerificationCode );
	}
	return true;
}
