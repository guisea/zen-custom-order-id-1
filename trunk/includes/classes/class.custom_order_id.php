<?php
/**
 * Worker class for Custom Order ID functionality
 * 
 * @package     custom_order_id
 * @author      Aaron Guise <custom_order_id@guise.net.nz>
 * @copyright   Copyright 2011 Guise Design
 * @copyright   Copyright 2003-2007 Zen Cart Development Team
 * @copyright   Portions Copyright 2003 osCommerce
 * @license     http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version     $Id: class.custom_order_id.php 001 2011-07-08 15:05 guisea $
 */
 
class CustomOrderID {

public function generateOrderID(){
	$datetime = date('ymd');
	// Get our next sequential number
	$id = $this->getNextID();
	// Set value in database
	$this->setLastID($id);
	// =============================
	return $datetime . $id;
}

private function getLastID(){
	global $db;
	$last_id_query = ("SELECT last_id from " . TABLE_CUSTOM_ORDER );
	$last_id = $db->Execute($last_id_query);
	return $last_id->fields['last_id'];
}

private function getNextID(){
//  Calculation routine for next id
	$last_id = $this->getLastID();
	if ($last_id){
		if ($last_id < 999){
			$next_id = $last_id + rand(3,9);
		} else {
			$next_id = 300;
		}
	} 
	return $next_id;
}

private function setLastID($id){
	// Function to set the last used value in the database
	global $db;
	if (is_numeric($id)){
			$update_query = "UPDATE " . TABLE_CUSTOM_ORDER . " SET last_id = " . $id;
			$db->Execute($update_query);
		}
	}
}