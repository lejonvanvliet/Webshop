<?php
	class UsersController extends Controller
	{
		public function viewall()
		{
			$this->set('header', 'Hieronder staan alle users in de user tabel');
			$this->_model->select_all();
		} 
	}
?>