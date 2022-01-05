<?php
/**
 *
 * @version Jomres 9.23.x
 *
 * @copyright	2021 Mark the Shark
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 *
 **/
 
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class plugin_info_remove_plugin_update_check
	{
	function __construct()
		{
		$this->data=array(
			"name"=>"remove_plugin_update_check",
			"category"=>"System",
			"marketing"=>"This Plugin will remove jomres plugin update check.",
			"version"=>"1.00",
			"description"=> "This Plugin will remove jomres plugin update check. ",
			"lastupdate"=>"01/04/2022",
			"min_jomres_ver"=>"9.25.2",
			'third_party_plugin_latest_available_version' => "http://www.fixmycomputermark.com/jomrespluginsinfo/remove_plugin_update_check.json",
			"manual_link"=>'',
			'change_log'=>'None.',
			'highlight'=>'',
			'image'=>'https://snippets.jomres.net/plugin_screenshots/2017-08-02_4tti8.png',
			'demo_url'=>'',
			 "developer_page" => "http://www.fixmycomputermark.com/free-downloads/file/130-remove-jomres-plugin-update-check.html",
			"author"=>"Mark",
			"authoremail"=>"<a href=mailto:info@fixmycomputermark.com?subject=remove_plugin_update_check>Email_Me</a>"
			);
		}
	}
?>