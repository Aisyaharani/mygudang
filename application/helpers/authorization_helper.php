<?php 

function isGuest()
 {
 	$ci = get_instance();

 	if (!$ci->session->userdata('email')) redirect('auth');
 	return TRUE;
 } 

 function isAuth()
 {
 	$ci = get_instance();
 	if($ci->session->userdata('email')) redirect('home');

 	return TRUE;
 }
 function isRole($role = 'all', $redirect = TRUE)
 {
 	$ci = get_instance();

 	isGuest();

 	if ($role == 'all') {
 		return TRUE;
 	}

 	$role = ($role == 'user') ? 1: 2;

 	if ($ci->session->userdata('role') == $role)
 		return TRUE;

 	if ($redirect) 
 		show_error('Acess Forbidden', 403, '403');
 }
 ?>