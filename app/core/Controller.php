<?php
class Controller {

    protected $space = "hehe";

    public function kaya(){
       echo $this->space = "boogie";
    }

    public function model($model)
    {
        require_once '../app/models/' . $model .'.php';
        return new $model();
    }

    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
}