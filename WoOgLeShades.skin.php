<?php
/**
 * SkinTemplate class for the WoOgLeShades skin
 *
 * @ingroup Skins
 */
class SkinWoOgLeShades extends SkinTemplate {
	public $skinname = 'woogleshades', $stylename = 'WoOgLeShades',
		$template = 'WoOgLeShadesTemplate', $useHeadElement = true;

	/**
	 * Add CSS via ResourceLoader
	 *
	 * @param $out OutputPage
	 */
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );

		$out->addMeta( 'viewport', 'width=device-width, initial-scale=1.0' );

		$out->addModuleStyles( array(
			'mediawiki.skinning.content.externallinks',
			'skins.woogleshades'
		) );
		$out->addModules( array( 'skins.woogleshades.js' ) );
	}
}
