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

class Mdl_Client_Notes extends Response_Model {

	public $table		 = 'fi_client_notes';
	public $primary_key = 'fi_client_notes.client_note_id';

	public function default_order_by()
	{
		$this->db->order_by('fi_client_notes.client_note_date DESC');
	}

	public function validation_rules()
	{
		return array(
			'client_id' => array(
				'field'			 => 'client_id',
				'label'			 => lang('client'),
				'rules'			 => 'required'
			),
			'client_note'	 => array(
				'field'	 => 'client_note',
				'label'	 => lang('note'),
				'rules'	 => 'required'
			)
		);
	}

	public function db_array()
	{
		$db_array = parent::db_array();
        
        $db_array['client_note_date'] = date('Y-m-d');

		return $db_array;
	}

}

?>