<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Name:		CORE_NAILS_Language_Model
 *
 * Description:	This model contains all methods for handling languages
 *
 **/

/**
 * OVERLOADING NAILS' MODELS
 *
 * Note the name of this class; done like this to allow apps to extend this class.
 * Read full explanation at the bottom of this file.
 *
 **/

class NAILS_Language_model extends NAILS_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->config->load( 'languages' );
	}


	// --------------------------------------------------------------------------


	public function get_default()
	{
		$_default	= $this->config->item( 'languages_default' );
		$_language	= $this->get_by_code( $_default );

		return ! empty( $_language ) ? $_language : FALSE;
	}


	// --------------------------------------------------------------------------


	public function get_default_code()
	{
		$_default = $this->get_default();
		return empty( $_default->code ) ? FALSE : $_default->code;
	}


	// --------------------------------------------------------------------------


	public function get_default_label()
	{
		$_default = $this->get_default();
		return empty( $_default->label ) ? FALSE : $_default->label;
	}


	// --------------------------------------------------------------------------


	public function get_all()
	{
		return $this->config->item( 'languages' );
	}


	// --------------------------------------------------------------------------


	public function get_all_flat()
	{
		$_out		= array();
		$_languages	= $this->get_all();

		foreach( $_languages AS $l ) :

			$_out[$l->code] = $l->label;

		endforeach;

		return $_out;
	}


	// --------------------------------------------------------------------------


	public function get_all_enabled()
	{
		$_enabled	= $this->config->item( 'languages_enabled' );
		$_out		= array();

		foreach( $_enabled AS $e ) :

			$_out[] = $this->get_by_code( $e );

		endforeach;

		return array_filter( $_out );
	}


	// --------------------------------------------------------------------------


	public function get_all_enabled_flat()
	{
		$_out		= array();
		$_languages	= $this->get_all_enabled();

		foreach( $_languages AS $l ) :

			$_out[$l->code] = $l->label;

		endforeach;

		return $_out;
	}


	// --------------------------------------------------------------------------


	public function get_by_code( $code )
	{
		$_languages = $this->get_all();

		return ! empty( $_languages[$code] ) ? $_languages[$code] : FALSE;
	}
}


// --------------------------------------------------------------------------


/**
 * OVERLOADING NAILS' MODELS
 *
 * The following block of code makes it simple to extend one of the core
 * models. Some might argue it's a little hacky but it's a simple 'fix'
 * which negates the need to massively extend the CodeIgniter Loader class
 * even further (in all honesty I just can't face understanding the whole
 * Loader class well enough to change it 'properly').
 *
 * Here's how it works:
 *
 * CodeIgniter instantiate a class with the same name as the file, therefore
 * when we try to extend the parent class we get 'cannot redeclare class X' errors
 * and if we call our overloading class something else it will never get instantiated.
 *
 * We solve this by prefixing the main class with NAILS_ and then conditionally
 * declaring this helper class below; the helper gets instantiated et voila.
 *
 * If/when we want to extend the main class we simply define NAILS_ALLOW_EXTENSION
 * before including this PHP file and extend as normal (i.e in the same way as below);
 * the helper won't be declared so we can declare our own one, app specific.
 *
 **/

if ( ! defined( 'NAILS_ALLOW_EXTENSION_LANGUAGE_MODEL' ) ) :

	class Language_model extends NAILS_Language_model
	{
	}

endif;


/* End of file language_model.php */
/* Location: ./system/application/models/language_model.php */