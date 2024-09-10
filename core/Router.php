<?php 

class Router {

    public function start(){
        try {
            $uri = $_SERVER['REQUEST_URI'];
            if ($uri !== "/") {
                $controller = ucfirst(explode('/', $uri)[1].'Controller');
                if (class_exists($controller)) {
                    $instance = new $controller();
                    $instance->index();
                }else{
                    echo('404');
                    exit();
                }
            }else{
                $instance = new MainController();
                $instance->index();

            }
          
           


        } catch (\Throwable $th) {
          echo $th->getMessage();
          die;
        }
    
    }
}