<?php

namespace App\Conreollers;


class MainController extends \App\Core\Controller {



    private $dbc;

    public function __construct(\App\Core\DatabaseConnection &$dbc){
        $this->dbc=$dbc;

    }


    public function home(){
     $termyModel = new \App\Models\CategoryModel($this->getDatabaseConnection());
     $terms= $termModel->getAll();

$this->set('terms', $terms);
     

   


    }
}