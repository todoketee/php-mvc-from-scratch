<?php

Class Posts{

    function get_all(){

        $query = "select * from images order by id desc limit 12";

        $DB = new Database();
        $data = $DB->read($query);

        if(is_array($data)){
            
            return $data;

        }

    }

}