<?php

class Controller{
    public static function do_register(){
        return '101';
    }
    public static function do_login(){
        return '100';
    }
    public static function do_not_found(){
        return VIEW_FOLDER.'not_found.view';
    }

    public static function render($page)
    {
        if(is_file(View::render_view($page))){
            echo file_get_contents(VIEW_FOLDER.$page);
            return;
        }
        echo file_get_contents(Controller::do_not_found());
        return;
    }
}



