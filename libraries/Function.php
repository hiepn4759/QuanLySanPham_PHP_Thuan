<?php 
	
		/**
	 * get input
	 */
	
	/**
	 * post input
	 */
	
	function postInput($string)
	{
		return isset($_POST[$string]) ? $_POST[$string] : '';
	}
	

?>