<?php
namespace Dfe\ZohoCRM\Source;
// 2017-07-08
final class Domain extends \Df\Config\Source {
	/**
	 * 2017-07-08
	 * https://mage2.pro/t/4150
	 * https://www.quora.com/Where-are-ZOHO-Data-Centers-Cloud-Servers-located/answer/Neel-Gupta-3
	 * https://www.zoho.eu/crm/help/api/using-api-url.html
	 * @override
	 * @see \Df\Config\Source::map()
	 * @used-by \Df\Config\Source::toOptionArray()
	 * @return array(string => string)
	 */
	protected function map() {return
		[0 => '-- select a value --']
		+ dfa_combine_self(['crm.zoho.com', 'crm.zoho.eu', 'crm.zoho.com.cn', 'crm.zoho.co.jp'])
		+ [self::OTHER => 'Other']
	;}

	const OTHER = 'other';
}