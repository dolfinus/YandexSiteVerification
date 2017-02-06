<?php
/**
 * YandexSiteVerification Extension for MediaWiki
 *
 * @author Dolfinus
 * @license MIT
 */


class YandexSiteVerification {

    static public function onBeforePageDisplay( OutputPage &$out, &$skin ) {
	    global $wgYandexVerificationCode;

	    $wgYandexVerificationCode = isset($wgYandexVerificationCode) ? $wgYandexVerificationCode : '';

	    if( $wgYandexVerificationCode !== '' ) {
		    $out->addMeta( 'yandex-verification', $wgYandexVerificationCode );
	    }

	    return true;
    }
}
