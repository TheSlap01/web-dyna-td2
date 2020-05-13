<?php
namespace controllers;
 /**
 * Controller InscriptionControllers
 **/
class InscriptionControllers extends ControllerBase{

	public function index(){
		$this->loadView("InscriptionControllers/index.html");
	}
	public function inscription(){

        $this->loadView('InscriptionControllers/inscription.html');

    }
}
