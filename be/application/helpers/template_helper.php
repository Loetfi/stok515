<?php 

function template_auth($view='' , $data = '')
{
	$ci =& get_instance(); 
	$ci->load->view('template/auth/header' , $data);
	$ci->load->view($view , $data); // content
	$ci->load->view('template/auth/footer' , $data); // content
}


function template($view='' , $data = '')
{
	$ci =& get_instance(); 
	$ci->load->view('template/header' , $data);
	$ci->load->view('template/sidebar' , $data);
	$ci->load->view($view , $data); // content
	$ci->load->view('template/footer' , $data); // content
}

?>
