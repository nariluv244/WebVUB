<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{
 
    // function __construct()
 
    // {
 
    //     parent::__construct();
 
    //     // $this->load->helper('form');
 
    //     // $this->load->helper('url');
 
    // }  
 
    function index()
 
    {
    	 $this->template->display('profile');
 		
 
    }

    
 
	
}
 
?>