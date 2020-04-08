<?php

class Home extends Controller {


//a dumb testing function
    public function index($name = '')
    {
       $user = $this->model('User');
       $user->name = $name;
       $user->hello();
       $this->view('home/index', ['name' => $user->name]);
    }

 
}

//composer dump-autoload