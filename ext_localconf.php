<?php
/**
 * PostProcess-Hook of render method in t3lib/class.t3lib_pagerenderer.php 
 * to manipulate markers for html5boilerplate changes in TYPO3
 * 
 * This is used e.g. to add a custom <html>-tag, to modify the <meta charset>-tag 
 * or to add the X-UA-Compatible parameter directly after the <meta charset>-tag
 */
$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-postProcess'][] = 'EXT:html5boilerplate/class.html5boilerplate.php:user_html5boilerplate->main';
?>