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
 * @package  DoceboLms
 * @version  $Id: class.subscribe.php 573 2006-08-23 09:38:54Z fabio $
 * @category Course managment
 * @author	 Fabio Pirovano <fabio [at] docebo [dot] com>
 */

require_once(dirname(__FILE__).'/class.definition.php');

class Module_Subscribe extends LmsAdminModule {
	
	
	function loadBody() {
		
		require_once(dirname(__FILE__).'/../modules/'.$this->module_name.'/'.$this->module_name.'.php');
		subscribeDispatch($GLOBALS['op']);
	}
}

?>
