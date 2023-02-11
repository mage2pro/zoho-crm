<?php
namespace Dfe\ZohoCRM\Test;
use Dfe\ZohoCRM\API\Facade as F;
use Dfe\ZohoCRM\Settings as S;
# 2017-07-05
final class Basic extends TestCase {
	/** 2017-07-05 @test */
	function t00():void {}

	/** 2017-07-05 */
	function t01_token():void {print_r(S::s()->token());}

	/** 2017-07-08 @test */
	function t02_getModules():void {print_r(df_json_encode(F::s()->getModules()));}
}