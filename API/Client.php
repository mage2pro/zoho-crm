<?php
namespace Dfe\ZohoCRM\API;
use Dfe\ZohoCRM\Settings;
# 2017-07-08
/** @method Settings ss() */
final class Client extends \Df\Zoho\API\Client {
	/**
	 * 2017-07-08 https://www.zoho.eu/crm/help/api/getmodules.html#Request_URL
	 * @override
	 * @see \Df\API\Client::commonParams()
	 * @used-by \Df\API\Client::__construct()
	 * @param string $path
	 * @return array(string => mixed)
	 */
	final protected function commonParams($path):array {return [
		'authtoken' => $this->ss()->token() # 2017-07-08 «Encrypted alphanumeric string to authenticate your Zoho credentials»
		,'scope' => 'crmapi' # 2017-07-08 «Specify the value as `crmapi`»
	];}

	/**
	 * 2017-07-08
	 * @override
	 * @see \Df\API\Client::urlBase()
	 * @used-by \Df\API\Client::__construct()
	 * @used-by \Df\API\Client::url()
	 */
	protected function urlBase():string {return "https://{$this->ss()->domain()}/crm/private/json";}
}