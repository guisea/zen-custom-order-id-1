/**
 * readme for Custom Order ID functionality
 * 
 * @package     custom_order_id
 * @author      Aaron Guise <custom_order_id@guise.net.nz>
 * @copyright   Copyright 2011 Guise Design
 * @copyright   Copyright 2003-2007 Zen Cart Development Team
 * @copyright   Portions Copyright 2003 osCommerce
 * @license     http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version     $Id: readme.txt 001 2011-07-08 15:05 guisea $
 */
 
 =============
 INSTALL
 =============
 
 1. Make backup copy of order.php 
 2. Copy includes folder to your zen cart installation
 3. Run custom_order_id_install.sql via Tools->Install SQL Patches in admin
 4. Enable the custom order id generator via the Configuration Menu
 
 =============
 UNINSTALL
 =============
 1. Run custom_order_id_uninstall.sql
 2. Remove the below files
	includes/classes/class.custom_order_id.php
	includes/extra_datafiles/custom_order_database_tables.php
	includes/auto_loaders/config.custom_order_id.php
 3. Restore your backup copy of the order.php you took before this mod was installed.