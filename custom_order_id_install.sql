DROP TABLE IF EXISTS custom_order;
CREATE TABLE IF NOT EXISTS custom_order (
  `last_id` int(3) NOT NULL,
  PRIMARY KEY (`last_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO custom_order (`last_id`) VALUES (300);

INSERT INTO configuration_group (
`configuration_group_id` ,
`configuration_group_title` ,
`configuration_group_description` ,
`sort_order` ,
`visible`
)
VALUES (
40 , 'Custom Order ID', 'Settings for Custom Order Module', '31' , '1'
);	

INSERT INTO configuration (
`configuration_id` ,
`configuration_title` ,
`configuration_key` ,
`configuration_value` ,
`configuration_description` ,
`configuration_group_id` ,
`sort_order` ,
`last_modified` ,
`date_added` ,
`use_function` ,
`set_function`
)
VALUES (
NULL , 'Is Enabled', 'CUSTOM_ORDER_ENABLED', 'false', 'Shall I use the custom order id generator?', '40', '1', NULL , NOW( ) , NULL , 'zen_cfg_select_option(array(''true'', ''false''), '
);
