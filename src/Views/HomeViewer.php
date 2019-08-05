<?php


namespace tree\src\Views;


class HomeViewer
{
    public function index($data){
        $loader = new \Twig\Loader\FilesystemLoader($_SERVER['DOCUMENT_ROOT']."/src/Views/Templates");
        $twig = new \Twig\Environment($loader);
        echo $twig->render('index.html', ['data'=>$data]);
    }
    public function add(){
        $loader = new \Twig\Loader\FilesystemLoader($_SERVER['DOCUMENT_ROOT']."/src/Views/Templates");
        $twig = new \Twig\Environment($loader);
        echo $twig->render('add.html');
    }
}