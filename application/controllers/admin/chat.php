<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Chat extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->library('system/admin_page');

        if($this->get_instance()->session_login->__GET_IS_LOGIN())
        {
            if(!$this->admin_page->__GET_IS_ADMIN())
            redirect($this->get_instance()->session_login->__GET_REDIRECT_HOME_PAGE(), 'refresh');

        }
        $this->load->library('admin/chat_page_render');
    }
    function index()
    {

        $this->chat_page_render->__GET_PAGE();

    }


}

