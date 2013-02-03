<?php 

/*
*  acf_addons
*
*  @description: controller for add-ons sub menu page
*  @since: 3.6
*  @created: 25/01/13
*/

class acf_addons
{
	
	var $action;
	
	
	/*
	*  __construct
	*
	*  @description: 
	*  @since 3.1.8
	*  @created: 23/06/12
	*/
	
	function __construct()
	{
		// actions
		add_action('admin_menu', array($this,'admin_menu'), 11, 0);
	}
	
	
	/*
	*  admin_menu
	*
	*  @description: 
	*  @created: 2/08/12
	*/
	
	function admin_menu()
	{
		// add page
		$page = add_submenu_page('edit.php?post_type=acf', __('Add ons','acf'), __('Add ons','acf'), 'manage_options', 'acf-addons', array($this,'html'));
		
		
		// actions
		add_action('load-' . $page, array($this,'load'));
		add_action('admin_print_scripts-' . $page, array($this, 'admin_print_scripts'));
		add_action('admin_print_styles-' . $page, array($this, 'admin_print_styles'));
		add_action('admin_head-' . $page, array($this,'admin_head'));
	}
	
	
	/*
	*  load
	*
	*  @description: 
	*  @since 3.5.2
	*  @created: 16/11/12
	*  @thanks: Kevin Biloski and Charlie Eriksen via Secunia SVCRP
	*/
	
	function load()
	{
		
	}
	
	
	/*
	*  admin_print_scripts
	*
	*  @description: 
	*  @since 3.1.8
	*  @created: 23/06/12
	*/
	
	function admin_print_scripts()
	{
		
	}
	
	
	/*
	*  admin_print_styles
	*
	*  @description: 
	*  @since 3.1.8
	*  @created: 23/06/12
	*/
	
	function admin_print_styles()
	{
		wp_enqueue_style(array(
			'wp-pointer',
			'acf-global',
			'acf',
		));
	}
	
	
	/*
	*  admin_head
	*
	*  @description: 
	*  @since 3.1.8
	*  @created: 23/06/12
	*/
	
	function admin_head()
	{
				
	}
	
	
	/*
	*  html
	*
	*  @description: 
	*  @since 3.1.8
	*  @created: 23/06/12
	*/
	
	function html()
	{	
		?>
<div class="wrap">

	<div class="icon32" id="icon-acf"><br></div>
	<h2 style="margin: 4px 0 25px;"><?php _e("Add ons",'acf'); ?></h2>
	
	
</div>
		<?php
		
		return;
		
	}
	
			
}

$acf_addons = new acf_addons();

?>