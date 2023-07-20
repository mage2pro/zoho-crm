<?php
namespace Dfe\ZohoCRM;
# 2017-07-05
/** @method static Settings s() */
final class Settings extends \Dfe\Zoho\Settings {
	/**
	 * 2017-07-08
	 * @used-by \Dfe\ZohoCRM\API\Client::urlBase()
	 */
	function domain():string {return $this->v('', null, $this->v('domain_custom'));}
}