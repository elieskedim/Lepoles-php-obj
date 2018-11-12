<?php

namespace controller;

class Error{

    public function __construct(){
        set_error_handler( array( '\controller\Error', 'exception_error_handler')); //Il faut obligatoirement que la fonction qui suit soit static
    }

    public function exception_error_handler($errno, $errstr, $errfile, $errline){
        throw new  \ErrorException($errstr, $errno, 0, $errfile, $errline);
    }
}