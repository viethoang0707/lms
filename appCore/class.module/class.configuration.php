<?php defined("IN_FORMA") or die('Direct access is forbidden.');

/* ======================================================================== \
|   e-Training - The corporate training system (c)  Thanh Cong A Chau       |
|                                                                           |
|   From forma.lms (c) 2013 (Forma)                                         |
|   http://www.formalms.org                                                 |
|   License  http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt           |
|                                                                           |
|   from docebo 4.0.5 CE 2008-2012 (c) docebo                               |
|   License http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt            |
\ ======================================================================== */


/**
 * @package admin-core
 * @subpackage configuration
 */

require_once(dirname(__FILE__).'/class.definition.php');

class Module_Configuration extends Module {
	
	function loadBody() {
		
		require_once($GLOBALS['where_framework'].'/modules/'.$this->module_name.'/'.$this->module_name.'.php');
		configurationDispatch( $GLOBALS['op'] );
	}
	
	function getAllToken($op) {
		return array( 
			'view' => array( 	'code' => 'view',
								'name' => '_VIEW',
								'image' => 'standard/view.png')
		);
	}
}

?>
