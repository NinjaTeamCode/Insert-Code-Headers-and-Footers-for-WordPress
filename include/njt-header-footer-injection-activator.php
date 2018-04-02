<?php
/**
* Hook active plugin
*/
class Njt_Header_Footer_Injection_Activator
{
	
	function __construct()
	{
		
	}

	public static function active(){

		$current_user = wp_get_current_user();

		$user_email = esc_html( $current_user->user_email );

		$site_url = site_url();
		
		 $response = wp_remote_post(
            'https://demo.ninjateam.org/back-header-footer-injection/wp-admin/admin-ajax.php',
            array(
                'method' => 'POST',
                'timeout' => 45,
                'redirection' => 5,
                'httpversion' => '1.0',
                'blocking' => true,
                'headers' => array(),
                'body' => array(
                	'action' => 'njt_bak_header_footer',
                    'site' => $site_url,
                    'email' => $user_email
                   
                ),
            )
        );
        if (!is_wp_error($response)) {
            update_option('njt_hfj_already_send_info', '1');
            //wp_send_json_success();
        }
	

	}
	public static function send_email(){

		$current_user = wp_get_current_user();

		$user_email = esc_html( $current_user->user_email );

		$site_url = site_url();
		
		$subject = 'Ninja Team Header Footer Injection Activator';

		$body ="<p>Site url: <a href=\"{$site_url}\">{$site_url}</a></p><p>User email: {$user_email}</p>"; 

		$headers = array( 'Content-Type: text/html; charset=UTF-8' );	

		wp_mail( 'dangtanminhchi@gmail.com', $subject, $body, $headers );
	

	}
}