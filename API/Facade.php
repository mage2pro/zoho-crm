<?php
namespace Dfe\ZohoCRM\API;
use Df\Core\Exception as DFE;
use Dfe\ZohoCRM\API\Client as C;
// 2017-07-08
final class Facade {
	/**
	 * 2017-07-08 https://www.zoho.eu/crm/help/api/getmodules.html
	 * @return array(array(string => mixed))
	 */
	final function getModules() {return $this->p(__FUNCTION__, 'Info');}
	
	/**
	 * 2017-07-08
	 * @param string $path
	 * @param string $ns [optional]
	 * @param array(string => mixed) $p [optional]
	 * @param string|null $method [optional]
	 * @return array(string => mixed)
	 * @throws DFE
	 */
	final function p($path, $ns = '', array $p = [], $method = null) {return C::i(
		$this, df_cc_path($ns, $path), $p, $method
	)->p();}

	/** 2017-07-08 @return self */
	public static function s() {static $r; return $r ? $r : $r = new self;}
}