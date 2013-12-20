<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * ZonStudio
 * 
 * A free and open source web based invoicing system
 *
 * @package		ZonStudio
 * @author		duongbq
 * @copyright	Copyright (c) 2012 - 2013 ZonStudio, LLC
 * @license		http://www.zonstudio.com
 * @link		http://www.zonstudio.com
 * 
 */

class Dashboard extends Admin_Controller {

    public function index()
    {
//        $this->load->model('invoices/mdl_invoice_amounts');
//        $this->load->model('quotes/mdl_quote_amounts');
//        $this->load->model('invoices/mdl_invoices');
//        $this->load->model('quotes/mdl_quotes');
//
//        $this->layout->set(
//            array(
//                'invoice_status_totals' => $this->mdl_invoice_amounts->get_status_totals(),
//                'quote_status_totals'   => $this->mdl_quote_amounts->get_status_totals(),
//                'invoices'              => $this->mdl_invoices->limit(10)->get()->result(),
//                'quotes'                => $this->mdl_quotes->limit(10)->get()->result(),
//                'invoice_statuses'      => $this->mdl_invoices->statuses(),
//                'quote_statuses'        => $this->mdl_quotes->statuses(),
//                'overdue_invoices'      => $this->mdl_invoices->is_overdue()->limit(10)->get()->result()
//            )
//        );
        
        $this->layout->view('index');
        
    }

}
