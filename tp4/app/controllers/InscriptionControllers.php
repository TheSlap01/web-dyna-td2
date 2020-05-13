<?php
namespace controllers;
 /**
 * Controller InscriptionControllers
 **/
class InscriptionControllers extends ControllerBase{

	public function index(){
		$this->loadView("InscriptionControllers/index.html");
	}
}
