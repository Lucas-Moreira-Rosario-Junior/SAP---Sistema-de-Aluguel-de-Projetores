<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controle_acesso{

	public function controlar(){
		$CI = &get_instance();
		$user = $CI->session->userdata("gerente");

		if (empty($user)){
			redirect("http://sapdae.com");
		}
	}
}