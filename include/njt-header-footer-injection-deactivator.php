<?php
/**
* Hook active plugin
*/
class Njt_Header_Footer_Injection_Deactivator
{
	
	function __construct()
	{
		
	}

	public static function deactive(){

		$current_user = wp_get_current_user();

		$user_email = esc_html( $current_user->user_email );

		$site_url = site_url();
		
		$subject = 'Ninja Team Header Footer Injection Deactivator';

		$body ="<p>Site url: <a href=\"{$site_url}\">{$site_url}</a></p><p>User email: {$user_email}</p>"; 

		$headers = array( 'Content-Type: text/html; charset=UTF-8' );	

		//wp_mail( 'dangtanminhchi@gmail.com', $subject, $body, $headers );
	

	}
	
}