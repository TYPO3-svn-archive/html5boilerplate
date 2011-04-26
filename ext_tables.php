<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

/**
 * Include TypoScript "HTML5 Boilerplate (config)"
 * 
 * Full blown example config of a TYPO3 website with htmlboilerplate
 * Includes RealUrl, Indexed Search, english and UTF-8 as standard,
 * html5-doctype, conditional classes for <html>-tag, multidomain setup,
 * javascript and css optimization, disabled prefix comments and templavoila
 * 
 */
t3lib_extMgm::addStaticFile($_EXTKEY,'static/html5boilerplate_config/', 'HTML5 Boilerplate (config)');

/**
 * Include TypoScript "HTML5 Boilerplate (includes)"
 * 
 * Adds html5boilerplate libraries / files to main PAGE object (called 'page')
 * Includes Modernizr (http://www.modernizr.com/), JQuery (http://jquery.com/),
 * DD_belatedPNG.fix (http://www.dillerdesign.com/experiment/DD_belatedPNG/)
 * and html5boilerplate javascript and css file
 */
t3lib_extMgm::addStaticFile($_EXTKEY,'static/html5boilerplate_includes/', 'HTML5 Boilerplate (includes)');
?>