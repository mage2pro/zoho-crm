<?php
namespace Dfe\ZohoCRM\T;
use Dfe\ZohoCRM\Settings as S;
// 2017-07-05
final class Basic extends TestCase {
	/** @test 2017-07-05 */
	function t00() {}

	/** 2017-07-05 */
	function t01_token() {echo S::s()->token();}
}