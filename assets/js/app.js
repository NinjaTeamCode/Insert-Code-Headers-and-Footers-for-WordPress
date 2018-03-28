
(function( $ ) {
	'use strict';
	
	$(document).on('ready', function(){

	 	var mixedMode = {
	        name: "htmlmixed"
	    };


		$('#nj-header-footer-form textarea').each(function(i, block) {
			CodeMirror.fromTextArea(block, {
		        mode: mixedMode,
		        lineNumbers: true,
		        selectionPointer: true
		      });
		});


	});


})( jQuery );