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
        $content = View::render_view($page);
        switch (is_file($content)):
            case true:
                $content = file_get_contents(VIEW_FOLDER.$page);
                break;
            case false:
                $content = file_get_contents(Controller::do_not_found());
                break;
        endswitch;
        echo $content;
    }
}



