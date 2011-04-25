<?php

require_once(PATH_tslib.'class.tslib_pibase.php');

class user_html5boilerplate extends tslib_pibase {
	
	var $extKey = 'html5boilerplate';	// The extension key.

	function main($params, &$obj){

		$this->conf = $GLOBALS['TSFE']->tmpl->setup['config.']['html5boilerplate.'];
		
		$params['htmlTag'] = $this->conf['htmlTag'];
		$params['metaCharsetTag'] = $this->conf['metaCharsetTag'] . "\n" . $this->conf['metaCharsetTag.']['insertAfter'];
		
//		$params = array (
//			'jsLibs'               => &$jsLibs,
//			'jsFiles'              => &$jsFiles,
//			'jsFooterFiles'        => &$jsFooterFiles,
//			'cssFiles'             => &$cssFiles,
//			'headerData'           => &$this->headerData,
//			'footerData'           => &$this->footerData,
//			'jsInline'             => &$jsInline,
//			'cssInline'            => &$cssInline,
//			'xmlPrologAndDocType'  => &$this->xmlPrologAndDocType,
//			'htmlTag'              => $htmlTag,
//			'headTag'              => &$this->headTag,
//			'charSet'              => &$this->charSet,
//			'metaCharsetTag'       => '<meta charset="|">',
//			'shortcutTag'          => &$this->shortcutTag,
//			'inlineComments'       => &$this->inlineComments,
//			'baseUrl'              => &$this->baseUrl,
//			'baseUrlTag'           => &$this->baseUrlTag,
//			'favIcon'              => &$this->favIcon,
//			'iconMimeType'         => &$this->iconMimeType,
//			'titleTag'             => &$this->titleTag,
//			'title'                => &$this->title,
//			'metaTags'             => &$metaTags,
//			'jsFooterInline'       => &$jsFooterInline,
//			'jsFooterLibs'         => &$jsFooterLibs,
//			'bodyContent'          => &$this->bodyContent,
//		);
		
		return $params;
	}
}

?>