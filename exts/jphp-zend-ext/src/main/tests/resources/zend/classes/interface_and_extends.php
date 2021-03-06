--TEST--
ZE2 a class cannot extend an interface
--SKIPIF--
<?php if (version_compare(zend_version(), '2.0.0-dev', '<')) die('skip ZendEngine 2 needed'); ?>
--FILE--
<?php

interface Test
{
	function show();
}

class Tester extends Test
{
	function show() {
		echo __METHOD__ . "\n";
	}
}

$o = new Tester;
$o->show();

?>
===DONE===
--EXPECTF--

Fatal error: Tester cannot extend from Test - it is not an class in %s on line %d, position %d