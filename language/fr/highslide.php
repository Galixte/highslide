<?php
/**
 *
 * Highslide. An extension for the phpBB Forum Software package.
 * French translation by Michel (http://www.ezcom-fr.com) & Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2018 Sheer <https://www.phpbbguru.net/community>
 * @license GNU General Public License, version 2 (GPL-2.0-only)
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
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'LOADINGTEXT'		=> 'Chargement…',
	'LOADINGTITLE'		=> 'Cliquer pour annuler',
	'FOCUSTITLE' 		=> 'Cliquer pour afficher cette image au premier plan',
	'FULLEXPANDTITLE'	=> 'Afficher l’image dans ses dimensions originales (f)',
	'PREVIOUSTEXT'		=> 'Précédente',
	'CLOSETEXT'			=> 'Fermer',
	'CLOSETITLE'		=> 'Fermer (esc)',
	'RESIZETITLE'		=> 'Redimensionner',
	'PLAYTEXT' 			=> 'Lancer',
	'PLAYTITLE'			=> 'Lancer le diaporama (barre d’espace)',
	'PAUSETEXT'			=> 'Pause',
	'PAUSETITLE'		=> 'Suspendre le diaporama (barre d’espace)',
	'PREVIOUSTITLE'		=> 'Précédente (flèche gauche)',
	'NEXTTITLE'			=> 'Suivante (flèche droite)',
	'NUMBER'			=> 'Image %1 sur %2',
	'RESTORETITLE' 		=> 'Cliquer pour fermer l’image, cliquer et faire glisser pour déplacer, utiliser les touches des flèches gauche & droite pour afficher l’image précédente & suivante.'
));
