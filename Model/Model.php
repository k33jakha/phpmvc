<?php
include 'Book.php';

class Model
{
    #methos getBoodDetials
    public function getBookDetails()
    {
        return array(
            #"TableHead"=>new Book('Title', 'Author', 'Discription'),
            "XyzS"=>new Book('Xyz','Ajay Suneja', 'classic book'), #Classic object of book
            "Jungle"=>new Book('Jungle','R. Kipling','A classic Book') #jungle book object of book
        );
    }
    #method getBook
    public function getBook()
    {
       $allbooks= $this->getBookDetails(); #this keyword is use to call function within same class
       return $allbooks[$title];


    }
}

?>