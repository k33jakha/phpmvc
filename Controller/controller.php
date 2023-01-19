<?php
include 'Model/Model.php';


class controller
{
    public $model;
    public function __construct()
    {
        $this->model=new Model();
    }
    public function invoke()
    {
        if(!isset($_GET['book']))
        {
            $books=$this->model->getBookDetails();
            include './View/booklist.php';
        }
        else
        {
            $book=$this->model->getBook($_GET['book']);
            include './View/viewbook.php';
        }
    }
    
}

?>