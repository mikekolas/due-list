$('#deleteModal').on('show.bs.modal', function(e) {
	var modal = $(this);
	var link = $(e.relatedTarget);
	
	var title = link.data('title');
	var id = link.data('id');
	modal.find('.mdl-title').text('Are you sure you want to delete: ' + title + '?');
	modal.find('form').attr('action', document.location.origin +'/lists/' + id);
});

// Set sidebar active page color variation 
// $( 'nav.nav a.nav-link' ).on( 'click', function () {
// 	$( 'nav.nav' ).find( 'a.nav-link.active' ).removeClass( 'active' );
// 	$( this ).addClass( 'active' );
// });