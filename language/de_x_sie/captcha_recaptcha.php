<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
* Deutsche Übersetzung durch die Übersetzer-Gruppe von phpBB.de:
* siehe language/de_x_sie/AUTHORS.md und https://www.phpbb.de/go/ubersetzerteam
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'RECAPTCHA_LANG'				=> 'de',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Um reCaptcha nutzen zu können, müssen Sie sich ein Konto auf <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> anlegen.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Der von Ihnen eingegebene Bestätigungscode ist falsch',

	'RECAPTCHA_PUBLIC'				=> 'Öffentlicher reCaptcha-Schlüssel',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Ihr öffentlicher reCaptcha-Schlüssel. Schlüssel können über <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> bezogen werden.',
	'RECAPTCHA_PRIVATE'				=> 'Privater reCaptcha-Schlüssel',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Ihr privater reCaptcha-Schlüssel. Schlüssel können über <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> bezogen werden.',

	'RECAPTCHA_EXPLAIN'				=> 'Um automatische Eingaben zu unterbinden, müssen Sie den angezeigten Text in das untenstehende Feld eingeben.',
	'RECAPTCHA_SOCKET_ERROR'		=> 'Bei der Verbindung mit dem reCaptcha-Service ist ein Problem aufgetreten: Socket konnte nicht geöffnet werden. Bitte versuchen Sie es später erneut.',
));
