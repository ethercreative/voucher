<?php
/**
 * Voucher for Craft 3
 *
 * @link      https://ethercreative.co.uk
 * @copyright Copyright (c) 2018 Ether Creative
 */

namespace ether\voucher;

use craft\base\Plugin;

/**
 * Class Voucher
 *
 * @author  Ether Creative
 * @package ether\voucher
 */
class Voucher extends Plugin
{

	// Properties
	// =========================================================================

	public $schemaVersion = '1.0.0';

	public $hasCpSettings = true;

	public $hasCpSection  = true;

	// Init
	// =========================================================================

	public function init ()
	{
		parent::init();

		// Components
		// ---------------------------------------------------------------------

		$this->setComponents([]);

		// Events
		// ---------------------------------------------------------------------

		// ...

	}

}