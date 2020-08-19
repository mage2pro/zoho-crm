<?php
namespace Dfe\ZohoCRM\Test;
use Dfe\ZohoCRM\API\Facade as F;
use Dfe\ZohoCRM\Settings as S;
# 2017-07-05
final class Basic extends TestCase {
	/** @test 2017-07-05 */
	function t00() {}

	/** 2017-07-05 */
	function t01_token() {print_r(S::s()->token());}

	/** @test 2017-07-08 */
	function t02_getModules() {print_r(df_json_encode(F::s()->getModules()));}
}