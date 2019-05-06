<?php

class Controller {
	public $load;
	public $model;

	function __construct($pageURI = null){
		$this->load = new Load();
		$this->model = new Model();

		$this->$pageURI();
	}

	function home(){
		$this->load->view('swordMuseum');
	}

	function apiLoadHomepage(){
		$this->load->view('swordMuseum');
	}

	function apiCreateTables(){
		$data = $this->model->dbCreateTables();
		$this->load->view('viewMessage', $data);
	}

	function apiInsertData(){
		$data = $this->model->dbInsertData();
		$this->load->view('viewMessage', $data);
	}

	function apiGetHomeData(){
		$data = $this->model->dbGetHomeData();
		echo json_encode($data);
	}

	function apiGetModelData(){
		$data = $this->model->dbGetModelData();
		echo json_encode($data);
	}

	function apiGetExtrasData(){
		$data = $this->model->dbGetExtrasData();
		echo json_encode($data);
	}

}
?>