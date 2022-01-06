<?php

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j13200remove_jomres_plugin_update_check_tab {
	function __construct($componentArgs)
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}

		$this->ret_vals = array  ( "TAB_ID" => "remove_jomres_plugin_update_check" , "TAB_NAME" => "Remove Jomres Plugin Update Check" , "TAB_CONTENTS" => "<table><tr>
				<td>This Plugin will remove jomres plugin update check.<br><br>By removing the jomres plugin update check you will be able to use ALL the installed plugins and see your dashboard.<br><br>The reason why Vince (developer) is adding this is because he wants you to pay for a license when your plugins expire. Your expired plugins will work after your license key is disabled.
				</td>
				</tr></table>
") ;
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->ret_vals;
		}
	}
?>