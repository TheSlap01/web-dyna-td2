<?php
namespace controllers;

use Ubiquity\orm\DAO;
use Ubiquity\utils\http\URequest;
use Ubiquity\utils\http\UResponse;
use Ubiquity\utils\http\USession;
use models\inscription;
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
	public function do() {
		
		$Data = new inscription();
		$Data->setEmail($_POST["email"]);
        $Data->setNom($_POST["pseudo"]);
        DAO::insert($Data);
	
	
	if(DAO::insert($Data)){
            echo "Confirmé, redirection...";
            UResponse::header("location" ,"inscriptionsController/do.html"); 
        }
        else{
            echo "<div class='ui red message'><p>Votre inscription avec l'email " . $_POST["email"] . " n'a pas fonctionnée</p><a href='/inscriptionsControllers'>Retour à l'accueil</a></div>";
	}}
}
