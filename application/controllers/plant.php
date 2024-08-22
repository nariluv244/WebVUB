<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plant extends CI_Controller 
{
 
    // function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('home_model');
    // }  
 
    // function index()
 
    // {
    //     // $a = $this->home_model->getpegawai();
    // 	 // $this->template->display('contact');
 		
    // }

    function jatim(){
        $this->template->display('jatim');
    }

    
    function jateng(){
        $this->template->display('jateng');
    }


    function luarjawa(){
        $this->template->display('luarjawa');
    }    
 
	
}
 
?>