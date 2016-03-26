<?php
include_once('model/Model.php');

class Controller{
	public $model;
	public function __construct(){
		$this->model = new Model();
	}
	public function invoke(){
		if(!isset($_GET['book'])){
			// no special book is request, we'll show a list of book;
			$books = $this->model->getBookList();
			include 'view/booklist.php';
		}else{
			// show the requested book
			$books = $this->model->getBook($_GET['book']);
			include 'view/viewbook.php';
		}
	}
}
?>