
(function( $ ) {
	'use strict';
	
	$(document).on('ready', function(){

	 	var mixedMode = {
	        name: "htmlmixed"
	    };
	    if($('#nj-header-footer-form textarea.html-mode').length){
	    	$('#nj-header-footer-form textarea.html-mode').each(function(i, block) {
				CodeMirror.fromTextArea(block, {
			        mode: mixedMode,
			        lineNumbers: true,
			        selectionPointer: true
			      });
			});
	    }
	    if($('.njt_hf_css').length){
	    	CodeMirror.fromTextArea(document.getElementById("njt_hf_css"), {
			lineNumbers: true,
	        extraKeys: {"Ctrl-Space": "autocomplete"},
	        mode: "text/x-scss"
	      });

	    }
		
		

	});


})( jQuery );