<?php
namespace Dfe\ZohoCRM\API;
use Df\Core\Exception as DFE;
use Dfe\ZohoCRM\API\Client as C;
# 2017-07-08
final class Facade {
	/**
	 * 2017-07-08 https://www.zoho.eu/crm/help/api/getmodules.html
	 * @return array(array(string => mixed))
	 */
	final function getModules():array {return $this->p(__FUNCTION__, 'Info');}
	
	/**
	 * 2017-07-08
	 * @param array(string => mixed) $p [optional]
	 * @param string|null $method [optional]
	 * @return array(string => mixed)
	 * @throws DFE
	 */
	final function p(string $path, string $ns = '', array $p = [], $method = null) {return C::i(
		$this, df_cc_path($ns, $path), $p, $method
	)->p();}

	/**
	 * 2017-07-08
	 * @used-by \Dfe\ZohoCRM\Test\Basic::t02_getModules()
	 */
	static function s():self {static $r; return $r ? $r : $r = new self;}
}