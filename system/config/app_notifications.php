<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Define app notifications for this module.
 */

$config['notification_definitions'] = array();

$config['notification_definitions']['app']				= new stdClass();
$config['notification_definitions']['app']->slug		= 'app';
$config['notification_definitions']['app']->label		= 'Site';
$config['notification_definitions']['app']->description	= 'General site notifications.';
$config['notification_definitions']['app']->options		= array();

$config['notification_definitions']['app']->options['default']					= new stdClass();
$config['notification_definitions']['app']->options['default']->slug			= 'default';
$config['notification_definitions']['app']->options['default']->label			= 'Generic';
$config['notification_definitions']['app']->options['default']->sub_label		= '';
$config['notification_definitions']['app']->options['default']->tip				= '';
$config['notification_definitions']['app']->options['default']->email_subject	= '';
$config['notification_definitions']['app']->options['default']->email_tpl		= '';
$config['notification_definitions']['app']->options['default']->email_message	= '';

/* End of file app_notifications.php */
/* Location: ./module-system/system/config/app_notifications.php */