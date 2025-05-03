/* JavaScript for the WoOgLeShades skin */

$( () => {
	let toggleTime = 200,
		mobileMediaQuery = window.matchMedia( 'screen and (max-width: 701px)' ),
		toggled = false,
		toggles = {
			'#p-global-links-label': '#p-global-links .mw-portlet-body',
			'#main-menu-toggle': '#mw-sidebar',
			'#personal-menu-toggle': '#p-personal',
			'#p-actions-label': '#p-actions .mw-portlet-body',
			'#p-lang-label': '#p-lang .mw-portlet-body',
			'#p-variants-label': '#p-variants .mw-portlet-body'
		};

	function setToggled() {
		if ( !toggled ) {
			// swap hide method from screen-reader-friendly .hidden to display:none,
			// as presumably people are actually poking a screen for this...
			$.each( toggles, ( toggle, target ) => {
				$( target ).hide();
				$( target ).addClass( 'toggled' );
			} );

			toggled = true;
		}
	}

	$.each( toggles, ( toggle, target ) => {
		$( toggle ).on( 'click', () => {
			if ( mobileMediaQuery.matches ) {
				setToggled();
				$( target ).fadeToggle( toggleTime );
				$( '#menus-cover' ).fadeToggle( toggleTime );
			}
		} );
	} );

	// Close menus on click outside
	$( document ).on( 'click touchstart', ( e ) => {
		if ( $( e.target ).closest( '#menus-cover' ).length > 0 ) {
			$( Object.values( toggles ).join( ', ' ) ).fadeOut( toggleTime );
			$( '#menus-cover' ).fadeOut( toggleTime );
		}
	} );
} );
