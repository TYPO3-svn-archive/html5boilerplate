<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 html5boilerplate for TYPO3-Team <http://forge.typo3.org/projects/extension-html5boilerplate>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Html5boilerplate main class
 * Includes a render postProcess hook of t3lib_PageRenderer to manipulate
 * marker for html5boilerplate usage. E.g. a custom <html>-Tag or a 
 * X-UA-Compatible parameter directly after the <meta charset>-tag
 *
 * @package TYPO3
 * @subpackage EXT:html5boilerplate
 */
class tx_html5boilerplate {

	/**
	 * postProcess-hook of t3lib_PageRenderer to manipulate some marker for correct html5boilerplate usage
	 * 
	 * @param array 				$params		Array of parameters which will be used as markers directly after the hook is called. For example baseUrl,
	 * 											htmlTag, cssFiles, favIcon, .... For a full list please have a look at t3lib_PageRenderer->render()
	 * @param t3lib_PageRenderer	$pObj		Instance of t3lib_PageRenderer
	 */
	function pageRendererPostProcessHook($params, $pObj){
			// Get the main configuration
		$this->conf = $GLOBALS['TSFE']->tmpl->setup['config.']['html5boilerplate.'];
		
			// Add the new custom <html>-tag
		$params['htmlTag'] = $this->conf['htmlTag'];
		
			// Add the shorten metaCharset-tag and add additionally
			// the X-UA-Compatible parameter
		$params['metaCharsetTag'] = $this->conf['metaCharsetTag'] . "\n" . $this->conf['metaCharsetTag.']['insertAfter'];
		
		return $params;
	}
}
?>