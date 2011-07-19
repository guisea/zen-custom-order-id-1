-- This will uninstall Custom Order ID configuration items from database.
DROP TABLE IF EXISTS custom_order;
DELETE FROM configuration WHERE configuration_group_id = 40;
DELETE FROM configuration_group WHERE configuration_group_id = 40;
