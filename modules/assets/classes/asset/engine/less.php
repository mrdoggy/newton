<?php defined('SYSPATH') or die('No direct script access.');
/**
* Lessphp engine
*
* @package    OpenBuildings/asset-merger
* @author     Ivan Kerin
* @copyright  (c) 2011 OpenBuildings Inc.
* @license    http://creativecommons.org/licenses/by-sa/3.0/legalcode
*/
class Asset_Engine_Less {

	/**
	 * Process asset content
	 *
	 * @param   string  $content
	 * @param   Asset   $asset
	 * @return  string
	 */
	static public function process($content, Asset $asset)
	{
		// Include the engine
		include_once Kohana::find_file('vendor/lessphp', 'lessc');

		// Set Less
		$lc = new lessc();
		$lc->importDir = dirname($asset->source_file()).DIRECTORY_SEPARATOR;

		return $lc->parse($content);
	}

} // End Asset_Engine_Less