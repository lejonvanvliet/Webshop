<?php
	class UsersController extends Controller
	{
		public function viewall($number1, $number2, $number3)
		{
			$this->set('header', 'Hallo ik kom van de header af');
			$this->set('number1', $number1);
			$this->set('number2', $number2);
			$this->set('number3', $number3);
		} 
	}
?>