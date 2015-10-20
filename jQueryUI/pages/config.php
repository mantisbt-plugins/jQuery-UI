<?php
# Copyright (c) 2012 Jacky Alcine <jacky.alcine@thesii.org>

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

auth_reauthenticate();
access_ensure_global_level( config_get( 'manage_plugin_threshold' ) );

html_page_top1( plugin_lang_get( 'title' ) );
html_page_top2();

print_manage_menu();

$t_isActive = ( plugin_config_get ( 'use_local' ) == ON ) ? 'checked' : '';
?>

<br/>
<form action="<?php echo plugin_page( 'config_edit' ) ?>" method="post">
<table align="center" class="width50" cellspacing="1">
	<tr>
		<td class="form-title" colspan="2">
			<?php echo plugin_lang_get( 'config_title' ) ?>
		</td>
	</tr>

	<tr <?php echo helper_alternate_class() ?>>
		<td class="category" width="60%">
			<?php
				echo plugin_lang_get( 'use_local' );
			?>
		</td>
		<td width="40%">
			<input type="checkbox" name="use_local" <?php echo $t_isActive; ?> />
		</td>
	</tr>

	<tr>
		<td class="center" colspan="2">
			<input type="submit" class="button" value="<?php echo lang_get( 'change_configuration' ) ?>" />
		</td>
	</tr>
</table>
<form>

<?php
html_page_bottom1( __FILE__ );