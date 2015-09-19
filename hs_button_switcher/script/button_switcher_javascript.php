<!-- Site switcher. -->
<script>

	function switcher_on_mouse_over(){	
		jQuery( ".site_switcher_inner" ).stop().animate( { 
				"width": "220px", 
				"margin-left": "-150px" 
			} );
	}

	function switcher_on_mouse_out(){
		jQuery( ".site_switcher_inner" ).stop().animate( { 
				"width": "70px", 
				"margin-left": "0px" 
			} );
	}

	function append_to_banner(){
		var switcher = "<div class='site_switcher_outer'>";		
		switcher += "<div class='site_switcher_inner' onMouseOver='switcher_on_mouse_over();' onMouseOut='switcher_on_mouse_out();'>&nbsp;";
		switcher += "<a href='<?php echo $button_switcher_url; ?>'><span id='site_switcher_cursor'> &nbsp; > &nbsp;</span>";		
		switcher += "<span id='site_switcher_text'><?php echo $button_switcher_text; ?></span></a></div>";
		switcher += "</div>";
		
		jQuery( "#core_header_navigation" ).append( switcher );	
	}

	append_to_banner();
</script>
<!-- End of site switcher. -->