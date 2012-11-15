<?php
$extensionPath = t3lib_extMgm::extPath('html5boilerplate');

$autoloading = array(
	'tx_html5boilerplate' => $extensionPath . 'Classes/class.tx_html5boilerplate.php',
);

return $autoloading;
?>
