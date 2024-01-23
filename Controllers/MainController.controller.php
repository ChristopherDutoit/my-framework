<?php
require_once 'Services/Render.php';
class MainController extends Render{
    public function accueil(){
        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Titre de la page d'accueil",
            "view" => "Views/Accueil.view.php",
            "template" => "Views/Layouts/base.php"
        ];
        $this->render($data_page);
    }

    public function page1(){
        $data_page = [
            "page_description" => "Description de la page 1",
            "page_title" => "Page 1",
            "view" => "Views/Page1.view.php",
            "template" => "Views/Layouts/base.php"
        ];
        $this->render($data_page);
    }

    public function page2(){
        $data_page = [
            "page_description" => "Description de la page 2",
            "page_title" => "Page 2",
            "view" => "Views/Page2.view.php",
            "template" => "Views/Layouts/base.php"
        ];
        $this->render($data_page);
    }

    public function page3(){
        $data_page = [
            "page_description" => "Description de la page 3",
            "page_title" => "Page 3",
            "view" => "Views/Page3.view.php",
            "template" => "Views/Layouts/base.php"
        ];
        $this->render($data_page);
    }

    public function pageErreur($msg){
        $data_page = [
            "page_description" => "Description de la page erreur",
            "page_title" => "Page erreur",
            "msg" => $msg,
            "view" => "Views/404.error.view.php",
            "template" => "Views/Layouts/base.php"
        ];
        $this->render($data_page);
    }
}