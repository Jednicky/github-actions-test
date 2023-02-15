<?php declare(strict_types=1);

use Tester\Environment;

require_once __DIR__.'/../vendor/autoload.php';

Tester\Environment::setup();
date_default_timezone_set('Europe/Prague');

function before(?Closure $function = null)
{
	static $val;
	if (!func_num_args()) {
		return $val ? $val() : null;
	}
	$val = $function;
}

function test(string $title, Closure $function): void
{
	before();
	$function();
}
