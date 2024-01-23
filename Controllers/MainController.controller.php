<?php
class MainController{
    public function accueil(){
        $page_description = "Description de la page d'accueil";
        $page_title ="Titre de la page d'accueil";
        ob_start();
        require_once("./Views/Accueil.view.php");
        $page_content= ob_get_clean();
        require_once("Views/Layouts/base.php");
    }

    public function page1(){
        $page_description = "Description de la page 1";
        $page_title ="Titre de la page page1";
        ob_start();
        require_once("./Views/Page1.view.php");
        $page_content= ob_get_clean();
        require_once("Views/Layouts/base.php");
    }

    public function page2(){
        $page_description = "Description de la page 2";
        $page_title ="Titre de la page 2";
        ob_start();
        require_once("./Views/Page2.view.php");
        $page_content= ob_get_clean();
        require_once("Views/Layouts/base.php");
    }

    public function page3(){
        $page_description = "Description de la page 3";
        $page_title ="Titre de la page 3";
        ob_start();
        require_once("./Views/Page3.view.php");
        $page_content= ob_get_clean();
        require_once("Views/Layouts/base.php");
    }

    public function pageErreur($msg){
        $page_description = "Page permettant de gérer les erreurs";
        $page_title ="Page d'erreur";
        ob_start();
        require_once("./Views/404.error.view.php");
        $page_content= ob_get_clean();
        require_once("Views/Layouts/base.php");
    }
}