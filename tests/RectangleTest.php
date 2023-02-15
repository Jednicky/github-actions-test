<?php
declare(strict_types=1);

use Tester\Assert;

require_once __DIR__.'/../vendor/autoload.php';

class RectangleTest extends Tester\TestCase
{
	public function testOne()
	{
		Assert::same('a', 'a');
	}

	public function testTwo()
	{
		Assert::same('a', 'a');
	}

	public function testFail()
	{
		Assert::same('a', 'b');
	}
}

# Run testing methods
(new RectangleTest())->run();

