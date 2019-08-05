<?php


namespace tree\src\Controllers;
use tree\src\Models\Tree;
use tree\src\Views\HomeViewer;

class HomeController
{
    public function index()
    {
        $tree = new Tree();
        $data = $tree->getAll();
        $home = new HomeViewer();
        $home->index($data);
    }
    public function add($arr)
    {
        $tree = new Tree();
        if($tree->add($arr))
        {
            $home = new HomeViewer();
            $home->add();
        }
    }
}