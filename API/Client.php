<?php
namespace Dfe\ZohoCRM\API;
use Dfe\ZohoCRM\Settings;
// 2017-07-08
/** @method Settings ss() */
final class Client extends \Df\Zoho\API\Client {
	/**
	 * 2017-07-08
	 * https://www.zoho.eu/crm/help/api/getmodules.html#Request_URL
	 * @override
	 * @see \Df\API\Client::commonParams()
	 * @used-by \Df\API\Client::__construct()
	 * @param string $path
	 * @return array(string => mixed)
	 */
	final protected function commonParams($path) {return [
		// 2017-07-08 «Encrypted alphanumeric string to authenticate your Zoho credentials»
		'authtoken' => $this->ss()->token()
		// 2017-07-08 «Specify the value as `crmapi`»
		,'scope' => 'crmapi'
	];}

	/**
	 * 2017-07-08
	 * @override
	 * @see \Df\API\Client::uriBase()
	 * @used-by \Df\API\Client::__construct()
	 * @used-by \Df\API\Client::_p()
	 * @return string
	 */
	protected function uriBase() {return "https://{$this->ss()->domain()}/crm/private/json";}
}