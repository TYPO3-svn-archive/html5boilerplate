<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
t3lib_extMgm::addStaticFile($_EXTKEY,'static/html5boilerplate_config/', 'HTML5 Boilerplate (config)');
t3lib_extMgm::addStaticFile($_EXTKEY,'static/html5boilerplate_includes/', 'HTML5 Boilerplate (includes)');
?>