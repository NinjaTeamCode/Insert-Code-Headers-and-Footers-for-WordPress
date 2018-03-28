
(function( $ ) {
	'use strict';
	
	$(document).on('ready', function(){

	 	var mixedMode = {
	        name: "htmlmixed"
	    };


		$('#nj-header-footer-form textarea.html-mode').each(function(i, block) {
			CodeMirror.fromTextArea(block, {
		        mode: mixedMode,
		        lineNumbers: true,
		        selectionPointer: true
		      });
		});
		CodeMirror.fromTextArea(document.getElementById("njt_hf_css"), {
			lineNumbers: true,
	        extraKeys: {"Ctrl-Space": "autocomplete"},
	        mode: "text/x-scss"
	      });

	});


})( jQuery );