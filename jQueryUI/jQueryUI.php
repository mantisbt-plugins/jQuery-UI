<?php
# Copyright (c) 2011 Robert Munteanu (robert@lmn.ro)

# jQuery UI plugin for MantisBT is free software: 
# you can redistribute it and/or modify it under the terms of the GNU
# General Public License as published by the Free Software Foundation, 
# either version 2 of the License, or (at your option) any later version.
#
# jQuery UI plugin for MantisBT is distributed in the hope 
# that it will be useful, but WITHOUT ANY WARRANTY; without even the 
# implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
# See the GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with jQuery UI plugin for MantisBT.  
# If not, see <http://www.gnu.org/licenses/>.


/**
 * Provides access to the jQuery UI library as a MantisBT plugin.
 */
class jQueryUIPlugin extends MantisPlugin {

	function register() {
        $this->name = plugin_lang_get("title");
        $this->description = plugin_lang_get("description");

        $this->version = "1.12.1";
		$this->requires = array(
			'MantisCore' => '2.0.0',
		);
        $this->author = "Robert Munteanu";
        $this->contact = "robert@lmn.ro";
	}

	function hooks() {
		return array(
			'EVENT_LAYOUT_RESOURCES' => 'resources',
		);
	}

	/**
	 * Create the resource link to load the jQuery UI library.
	 */
	function resources( $p_event ) {
		if( config_get_global( 'cdn_enabled' ) == ON ) {
		    $t_js_path = "http://ajax.googleapis.com/ajax/libs/jqueryui/".$this->version."/jquery-ui.min.js";
			$t_css_path = "http://ajax.googleapis.com/ajax/libs/jqueryui/".$this->version."/themes/cupertino/jquery-ui.min.css";
		} else {
		    $t_js_path = plugin_file('jquery-ui-min.js');
			$t_css_path = plugin_file('jquery-ui-min.css');
		}

		return '<script type="text/javascript" src="' . $t_js_path  . '"></script>'
			. '<link rel="stylesheet" type="text/css" href="' . $t_css_path . '"></link>';
	}
}

