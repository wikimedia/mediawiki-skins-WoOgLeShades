<?php
/**
 * SkinTemplate class for the WoOgLeShades skin
 *
 * @ingroup Skins
 */
class SkinWoOgLeShades extends SkinTemplate {
	public $skinname = 'woogleshades',
		$stylename = 'WoOgLeShades',
		$template = 'WoOgLeShadesTemplate';

	/**
	 * Add CSS via ResourceLoader
	 *
	 * @param $out OutputPage
	 */
	public function initPage( OutputPage $out ) {
		$out->addMeta( 'viewport',
			'width=device-width, initial-scale=1.0, ' .
			'user-scalable=yes, minimum-scale=0.25, maximum-scale=5.0'
		);
		$out->addModuleStyles( [
			'mediawiki.skinning.interface',
			'mediawiki.skinning.content.externallinks',
			'skins.woogleshades'
		] );
		$out->addModules( [
			'skins.woogleshades.js'
		] );
	}

	/**
	 * @param $out OutputPage
	 */
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
	}
}
