<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
 
  {
 
    // function __construct()
 
    // {
 
    //     parent::__construct();
 
    //     // $this->load->helper('form');
 
    //     // $this->load->helper('url');
    //     // $this->load->model('home_model');
 
    // }  
 
    function index()
    {

        // $conn=odbc_connect('Batching','root','variabeton');
        // $sql="SELECT tglspb,kopel,napel,sum(kwantum) as kwantum,kobar,nabar,kerja FROM avatar where tglspb='20180820' group by kopel,kobar"; 
        // $rs=odbc_exec($conn,$sql);
        // $data = null;
        // echo '<pre>';
        // while ($rows = odbc_fetch_object($rs)) {
        //     $rows->plant = 'AVATAR';
        //     $data[] = $rows;
        // }
        // print_r($data);
        // odbc_close($conn);
        // while (odbc_fetch_row($rs))
        // {
        //   echo $nopp=odbc_result($rs,"NOPP");
        //   echo $nospb=odbc_result($rs,"NOSPB");
        //   echo $kopel=odbc_result($rs,"KOPEL");
        //   echo $napel=odbc_result($rs,"NAPEL");
        //   echo $kobar=odbc_result($rs,"KOBAR");
        //   echo $nabar=odbc_result($rs,"NABAR");
        //   echo $kwantum=odbc_result($rs,"KWANTUM");
        //   echo '<br>';
        // }
        
        // $data = $this->home_model->getpegawai();
        // echo '<pre>';print_r($data); exit();
        // echo CI_VERSION;
        
        $this->template->display('home');
    }


    function insert()
    {
        echo $pegawai = 2016089;
        echo $namapeg = 'Eko Putra';
        echo $dept = '90100900';
        $data = $this->home_model->inputpegawai($pegawai,$namapeg,$dept);
        echo '<pre>';print_r($data); exit();
        // $this->template->display('home');
 
    }

    function update()
    {
        $data = $this->home_model->updatepegawai();
        echo '<pre>';print_r($data); exit();
        // echo base_url(); exit();
        // $this->template->display('home');
        // $this->load->view('home');
        
 
    }

    
 
	
  }
 
?>