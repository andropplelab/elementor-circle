 /*!
 * Dimensions Control
 *
 * @package   elementor circle
 */

var $ = jQuery;

$( document ).on( 'click', '.circle-linked',  function() {

	// Set up variables
	var $this = $( this );

	// Remove linked class
	$this.parent().parent( '.dimension-wrap' ).prevAll().slice(0,4).find( 'input' ).removeClass( 'linked' ).attr( 'data-element', '' );

	// Remove class
	$this.parent( '.link-dimensions' ).removeClass( 'unlinked' );

} );

// Unlinked button
$( document ).on( 'click', '.circle-unlinked',  function() {

	// Set up variables
	var $this 		= $( this ),
		$element 	= $this.data( 'element' );

	// Add linked class
	$this.parent().parent( '.dimension-wrap' ).prevAll().slice(0,4).find( 'input' ).addClass( 'linked' ).attr( 'data-element', $element );

	// Add class
	$this.parent( '.link-dimensions' ).addClass( 'unlinked' );

} );

// Values linked inputs
$( document ).on( 'input', '.dimension-wrap .linked', function() {

	var $data 	= $( this ).attr( 'data-element' ),
		$val 	= $( this ).val();

	$( '.linked[ data-element="' + $data + '" ]' ).each( function( key, value ) {
		$( this ).val( $val ).change();
	} );

} );