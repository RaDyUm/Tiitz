<?php
class ErrorManager {
	
	private $error = array();

	/**
	 * launch php function for managing error
	 * @param integer $errorReport manage visibility of php error
	 */
	public function __construct() {
		// manage fatal error
		register_shutdown_function(array($this, 'callRegisteredShutdown'));
		// manage warning and other error not fatal
		set_error_handler(array($this, 'exception_handler'));
	}

	/**
	 * manage fatal error
	 * @return void
	 */
	public function callRegisteredShutdown() {
		// get last error
		$error = error_get_last();
		
		if($error != null){
			// add date to the array error
			$error['date'] = date("Y-m-d H:i:s");
			array_push($this->error, $error);
		}
	}

	/**
	 * manage warning error
	 * @param  [type] $errno   error number
	 * @param  [type] $errstr  error message
	 * @param  [type] $errfile error file
	 * @param  [type] $errline error line
	 * @return void
	 */
	public function exception_handler($errno, $errstr, $errfile, $errline) {
		// construct an array of error
		$error = array(	'type' 		=> $errno, 
						'message' 	=> $errstr, 
						'file' 		=> $errfile, 
						'line' 		=> $errline,
						'date' 		=> date("Y-m-d H:i:s")
						);
		array_push($this->error, $error);
	}
	
	/**
	 * method static use to catch error inside your code
	 * @param  Object/array $e   either a try catch object or an array of error
	 * @param  boolean $die use if to control the end of the script
	 * @return void
	 */
	public function catchError($e, $die = false) {

		if (is_object($e)) {

			// try/catch
			$error = array(
					'type' 		=> $e->getCode(), 
					'message' 	=> $e->getMessage(), 
					'file' 		=> $e->getFile(), 
					'line' 		=> $e->getLine(),
					'date' 		=> date("Y-m-d H:i:s")
			);
		} elseif (is_array($e)){
			// array();
			$error = array (
				'type'		=> 'none',
				'message'	=> $e[0],
				'file'		=> $e[1],
				'line'		=> $e[2],
				'date' 		=> date("Y-m-d H:i:s")
			); 
		} else {
			// bad format
			$error = array (
				'type'		=> 'none',
				'message'	=> 'Le format des paramètres de la méthode static catchError n\'est pas correct (Array,Bool)',
				'file'		=> $e[1],
				'line'		=> $e[2],
				'date' 		=> date("Y-m-d H:i:s")
			);
		}
		array_push($this->error, $error);
		if ($die === true) {
			die();
		}
	}

	
	// getter
	public function getError() {
		return $this->error;
	}
}