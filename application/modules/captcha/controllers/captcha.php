<?php

/**
 * Created by JetBrains PhpStorm.
 * User: duongbq
 * Date: 2/6/13
 * Time: 3:27 PM
 * To change this template use File | Settings | File Templates.
 */
class Captcha extends Base_Controller {

    function __construct() {
        parent::__construct();
    }

    /**
     *
     */
    function random_sercurity_image() {
        $this->load->model('mdl_captcha');
        $this->mdl_captcha->generate_captcha();
    }

}
