<?php 
class DataComponent extends Object{

	public function bofore_save_content($data){
		
	}

	public function get_content($data){
		$content = stripslashes($data);
	}
}