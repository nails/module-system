<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Define email types for this module.
 */

$config['email_types'] = array();

$config['email_types'][0]					= new stdClass();
$config['email_types'][0]->slug				= 'app_notification';
$config['email_types'][0]->name				= 'App Notification';
$config['email_types'][0]->description		= 'Email template used by the App Notification system.';
$config['email_types'][0]->template_header	= '';
$config['email_types'][0]->template_body	= 'system/email/app_notification';
$config['email_types'][0]->template_footer	= '';
$config['email_types'][0]->default_subject	= 'App Notification';