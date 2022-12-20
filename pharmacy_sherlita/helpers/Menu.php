<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbarsideleft = array(
		array(
			'path' => 'home', 
			'label' => 'Home', 
			'icon' => '<i class="fa fa-home "></i>'
		),
		
		array(
			'path' => 'categories', 
			'label' => 'Categories', 
			'icon' => '<i class="fa fa-square "></i>'
		),
		
		array(
			'path' => 'notifications', 
			'label' => 'Notifications', 
			'icon' => '<i class="fa fa-bell "></i>'
		),
		
		array(
			'path' => 'products', 
			'label' => 'Products', 
			'icon' => '<i class="fa fa-dropbox "></i>'
		),
		
		array(
			'path' => 'purchases', 
			'label' => 'Purchases', 
			'icon' => '<i class="fa fa-credit-card-alt "></i>'
		),
		
		array(
			'path' => 'suppliers', 
			'label' => 'Suppliers', 
			'icon' => '<i class="fa fa-users "></i>'
		),
		
		array(
			'path' => 'users', 
			'label' => 'Staffs', 
			'icon' => '<i class="fa fa-user "></i>'
		),
		
		array(
			'path' => 'menu13', 
			'label' => 'Others', 
			'icon' => '<i class="fa fa-ellipsis-h "></i>','submenu' => array(
		array(
			'path' => 'password_resets', 
			'label' => 'Password Resets', 
			'icon' => '<i class="fa fa-lock "></i>'
		),
		
		array(
			'path' => 'permissions', 
			'label' => 'Permissions', 
			'icon' => '<i class="fa fa-unlock "></i>'
		),
		
		array(
			'path' => 'roles', 
			'label' => 'Roles', 
			'icon' => '<i class="fa fa-android "></i>'
		)
	)
		)
	);
		
	
	
}