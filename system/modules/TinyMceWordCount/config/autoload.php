<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package TinyMceWordCount
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'TinyMceWordCount',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'TinyMceWordCount\TinyMceWordCount' => 'system/modules/TinyMceWordCount/classes/TinyMceWordCount.php',
));
