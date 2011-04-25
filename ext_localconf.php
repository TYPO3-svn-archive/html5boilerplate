<?php
// Call a hook in the t3lib_pagerenderer.php
$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-postProcess'][] = 'EXT:html5boilerplate/class.html5boilerplate.php:user_html5boilerplate->main';
?>