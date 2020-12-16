<?php
/**
 * SkinTemplate class for the WoOgLeShades skin
 *
 * @ingroup Skins
 */
class SkinWoOgLeShades extends SkinTemplate {
	public $stylename = 'WoOgLeShades',
		$template = 'WoOgLeShadesTemplate';

	/**
	 * Add CSS via ResourceLoader
	 *
	 * @param $out OutputPage
	 */
	public function initPage( OutputPage $out ) {
		// TODO Better source, actual font stack sucks?
		$out->addStyle( 'https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i', 'screen' );
		$out->addStyle( 'https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,700i', 'screen' );
	}
}
