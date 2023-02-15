<?php
declare(strict_types=1);

use Tester\Assert;

require_once __DIR__.'/../vendor/autoload.php';

class Rectangle2Test extends Tester\TestCase
{
	public function testOne()
	{
		Assert::same('a', 'a');
	}

	public function testTwo()
	{
		Assert::same('a', 'a');
	}
}

# Run testing methods
(new Rectangle2Test())->run();
