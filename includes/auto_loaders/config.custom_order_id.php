<?php
/**
 * autoloader array for Custom Order ID functionality
 * 
 * @package     custom_order_id
 * @author      Aaron Guise <custom_order_id@guise.net.nz>
 * @copyright   Copyright 2011 Guise Design
 * @copyright   Copyright 2003-2007 Zen Cart Development Team
 * @copyright   Portions Copyright 2003 osCommerce
 * @license     http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version     $Id: config.custom_order_id.php 001 2011-07-08 15:05 guisea $
 */
 
 
// Autoload custom order id class

 $autoLoadConfig[190][] = array('autoType'=>'class',
                                'loadFile'=>'class.custom_order_id.php');
