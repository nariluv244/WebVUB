<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller 
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

    function transaksi(){
        $this->template->display('transaksi');
    }

    
    function brosursemuaproduk(){
        $this->template->display('brosursemuaproduk');
    }


    function brosurbeton(){
        $this->template->display('brosurbeton');
    }

    function formpermintaan(){
        $this->template->display('formpermintaan');
    }    

    function formpengajuan(){
        $this->template->display('formpengajuan');
    }    





 
	
}
 
?>