<?php

Class Upload extends Controller{

    function index(){

        header("Location:" . ROOT . "login");
        die;
        
    }

    function image(){

        $user = $this->loadModel("user");

        if(!$result = $user->check_logged_in()){

            header("Location:" . ROOT . "login");
            die;

        }


        $data['page_title'] = "Upload";
        $this->view("website/upload", $data);

    }

}