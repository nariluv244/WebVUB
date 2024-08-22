<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller 
{
 
    // function __construct()
    // {
    //     parent::__construct();
    // }  
 
    function bsp(){
        $this->template->display('bsp');
    }

    
    function bpc(){
        $this->template->display('bpc');
    }


    function bm(){
        $this->template->display('bm');
    }    
 
	function bg(){
        $this->template->display('bg');
    }

    function sewa(){
        $this->template->display('sewa');
    }  
}
 
?>