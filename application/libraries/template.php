<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Template {

    protected $_ci;

    function __construct() {
        $this->_ci = &get_instance();
    }

    function display($template=NULL, $data = NULL) {
        if($template!=NULL)
        $data['_content'] = $this->_ci->load->view($template, $data, TRUE);
        $data['_header'] = $this->_ci->load->view('template/header', $data, TRUE);
        $data['_footer'] = $this->_ci->load->view('template/footer', $data, TRUE);
        $data['_sidebar'] = $this->_ci->load->view('template/template', $data);
    }
    
    function front($template, $data = NULL) {
        $data['_content'] = $this->_ci->load->view($template, $data, TRUE);
//        $data['_content'] = $this->_ci->load->view($template, $data, TRUE);
//        $data['_header'] = $this->_ci->load->view('template_frontend/header', $data, TRUE);
//        $data['_footer'] = $this->_ci->load->view('template_frontend/footer', $data, TRUE);
//        $data['_menu'] = $this->_ci->load->view('template_frontend/menu', $data, TRUE);
        $data['_sidebar'] = $this->_ci->load->view('template_frontend/template', $data);
    }

}

?>
