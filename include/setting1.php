
<div class="wrap">
	<h1><?php _e( 'Insert Code Headers And Footers', NJT_HEADER_FOOTER_TEXT_DOMAIN ); ?></h1>


	<form  action="options.php" method="post" id="nj-header-footer-class">
		<?php
			settings_fields( 'njt-header-footer-settings-group' );
			do_settings_sections( 'njt-header-footer-settings-group' );
		?>
	 	
			
					<label for="njt_hf_header"><?php _e('Header Section', NJT_HEADER_FOOTER_TEXT_DOMAIN) ?></label>
				
			
					<div class="editor-holder">
						<div class="scroller">
							<textarea name="njt_hf_header" id="njt_hf_header" class="editor allow-tabs"><?php echo esc_attr( get_option('njt_hf_header') ); ?></textarea>
							<pre><code class="syntax-highight html"></code></pre>
						</div>
					</div>

					<p class="description">The scripts will be printed in the &lt;head&gt; section</p>
				
					<label for="njt_hf_footer"><?php _e('Footer Section', NJT_HEADER_FOOTER_TEXT_DOMAIN); ?></label>
				
					<div class="editor-holder">
						<div class="scroller">
							<textarea name="njt_hf_footer" id="njt_hf_footer" class="editor allow-tabs"><?php echo esc_attr( get_option('njt_hf_footer') ); ?></textarea>
							<pre><code class="syntax-highight html"></code></pre>
						</div>
					</div>
					<p class="description">The scripts will be printed above the &lt;/body&gt; tag</p>
					<label for="njt_hf_css"><?php _e('Custom CSS', NJT_HEADER_FOOTER_TEXT_DOMAIN) ?></label>
				
					<div class="editor-holder">
						<div class="scroller">
							<textarea name="njt_hf_css" id="njt_hf_css" class="editor allow-tabs"><?php echo get_option('njt_hf_css')? esc_attr( get_option('njt_hf_css') ) : '<style type="text/css"></style>'; ?></textarea>
							<pre><code class="syntax-highight html"></code></pre>
						</div>
					</div>
					<p class="description">The scripts will be printed in the &lt;head&gt; section</p>
				
		<?php submit_button( __('Save Changes', NJT_HEADER_FOOTER_TEXT_DOMAIN)) ?>
			
		
	
	</form>
</div>
