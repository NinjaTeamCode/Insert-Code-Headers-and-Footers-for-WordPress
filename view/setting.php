
<div class="wrap njt-hf">
	<h1><?php _e( 'Insert Code Headers And Footers', NJT_HEADER_FOOTER_TEXT_DOMAIN ); ?></h1>

	<div id="poststuff">
		<form  action="options.php" method="post" id="nj-header-footer-form">
			<?php
				settings_fields( 'njt-header-footer-settings-group' );
				do_settings_sections( 'njt-header-footer-settings-group' );
			?>
	 		<div class="postbox">
	 			<h3 class="hndle"><?php _e('Header Section', NJT_HEADER_FOOTER_TEXT_DOMAIN) ?></h3>
	 			
	 			<div class="inside">
	 				
	 				<textarea name="njt_hf_header" id="njt_hf_header" class="editor allow-tabs"><?php echo esc_attr( get_option('njt_hf_header') ); ?></textarea>

					<p class="description"><?php _e('The scripts will be printed in the &lt;head&gt; section', NJT_HEADER_FOOTER_TEXT_DOMAIN);?></p>

	 			</div>
	 		</div>


			<div class="postbox">
	 			<h3 class="hndle"><?php _e('Footer Section', NJT_HEADER_FOOTER_TEXT_DOMAIN); ?></h3>
	 			<div class="inside">

					<textarea name="njt_hf_footer" id="njt_hf_footer" class="editor allow-tabs"><?php echo esc_attr( get_option('njt_hf_footer') ); ?></textarea>

					<p class="description"><?php _e('The scripts will be printed above the &lt;/body&gt; tag', NJT_HEADER_FOOTER_TEXT_DOMAIN);?></p>

				</div>
	 		</div>

			<div class="postbox">
	 			<h3 class="hndle"><?php _e('Custom CSS', NJT_HEADER_FOOTER_TEXT_DOMAIN); ?></h3>
	 			<div class="inside">		
					<textarea name="njt_hf_css" id="njt_hf_css" class="editor allow-tabs"><?php echo get_option('njt_hf_css')? esc_attr( get_option('njt_hf_css') ) : '<style type="text/css"></style>'; ?></textarea>
					<p class="description"><?php _e('The scripts will be printed in the &lt;head&gt; section', NJT_HEADER_FOOTER_TEXT_DOMAIN);?></p>
				</div>
	 		</div>		 		
				
			<?php submit_button( __('Save Changes', NJT_HEADER_FOOTER_TEXT_DOMAIN)) ?>			
		
		</form>

	</div>


</div>
