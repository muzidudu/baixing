<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Dayrui Website Management System
 *
 * @since		version 2.0.0
 * @author		Dayrui <dayrui@gmail.com>
 * @license     http://www.dayrui.com/license
 * @copyright   Copyright (c) 2011 - 9999, Dayrui.Com, Inc.
 */
 
class Home extends M_Controller {

    /**
     * 构造函数
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * 首页
     */
    public function index() {
        $this->template->assign(array(
            'meta_title' => SITE_TITLE,
            'meta_keywords' => SITE_KEYWORDS,
            'meta_description' => SITE_DESCRIPTION,
        ));
        $this->template->display('index.html');
    }

}