// Set sidebar active page color variation 
$( 'nav.nav a.nav-link' ).on( 'click', function () {
	$( 'nav.nav' ).find( 'a.nav-link.active' ).removeClass( 'active' );
	$( this ).addClass( 'active' );
});