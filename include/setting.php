
<div class="wrap">
	<h1><?php _e( 'Insert Code Headers And Footers', NJT_HEADER_FOOTER_TEXT_DOMAIN ); ?></h1>

	<div class="njt-header-footer-admin-tab-controls">
	        	
    	<div class="njt-header-footer-admin-tab-control active" data-target="#njt-header-footer-tab-1"><?php _e('Header', NJT_HEADER_FOOTER_TEXT_DOMAIN) ?></div>
    	<div class="njt-header-footer-admin-tab-control" data-target="#njt-header-footer-tab-2"><?php _e('Footer', NJT_HEADER_FOOTER_TEXT_DOMAIN) ?></div>
    	<div class="njt-header-footer-admin-tab-control" data-target="#njt-header-footer-tab-3"><?php _e('CSS', NJT_HEADER_FOOTER_TEXT_DOMAIN) ?></div>
	        	
	</div>

	<form  action="options.php" method="post" id="nj-header-footer-class">
		<?php
			settings_fields( 'njt-header-footer-settings-group' );
			do_settings_sections( 'njt-header-footer-settings-group' );
		?>
		<div class="njt-header-footer-admin-tab-contents">
			<div id="njt-header-footer-tab-1" class="njt-header-footer-admin-tab-content active">

				<div class="editor-holder">
					<div class="scroller">
						<textarea name="njt_hf_header" id="njt_hf_header" class="editor allow-tabs"><?php echo esc_attr( get_option('njt_hf_header') ); ?></textarea>
						<pre><code class="syntax-highight html"></code></pre>
					</div>
				</div>

				
			</div>
			<div id="njt-header-footer-tab-2" class="njt-header-footer-admin-tab-content">

				<div class="editor-holder">
					<div class="scroller">
						<textarea name="njt_hf_footer" id="njt_hf_footer" class="editor allow-tabs"><?php echo esc_attr( get_option('njt_hf_footer') ); ?></textarea>
						<pre><code class="syntax-highight html"></code></pre>
					</div>
				</div>

			</div>

			<div id="njt-header-footer-tab-3" class="njt-header-footer-admin-tab-content">
				
			
				<div class="editor-holder">
					<div class="scroller">
						<textarea name="njt_hf_css" id="njt_hf_css" class="editor allow-tabs"><?php echo get_option('njt_hf_css')? esc_attr( get_option('njt_hf_css') ) : '<style type="text/css"></style>'; ?></textarea>
						<pre><code class="syntax-highight html"></code></pre>
					</div>
				</div>

			</div>

			<?php submit_button( __('Save Changes', NJT_HEADER_FOOTER_TEXT_DOMAIN)) ?>
			
		</div>
	
	</form>
</div>
<script type="text/javascript">
		jQuery(document).ready(function($){

			$('.njt-header-footer-admin-tab-control').on('click',function(){

		        $('.njt-header-footer-admin-tab-control').removeClass('active');

		        $('.njt-header-footer-admin-tab-content').removeClass('active');

		        $(this).addClass('active');

		        $($(this).data('target')).addClass('active');

		        return false

		    });
			    
		});
</script>

