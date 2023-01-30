<?php

/**
 * Project management: default hide completed tasks
 */
add_hook('AdminAreaFooterOutput', 2000, function($vars) {
	
	if ( $vars['filename'] !== 'addonmodules' && $_REQUEST['module'] !== 'project_management' ) return;
	if ( empty($_REQUEST['projectid']) ) return;
	
	return '<script>
	jQuery(document).ready(function($){
		$("#toggleCompleteHide").iCheck("check");
	});
	</script>';
		
});