--TEST--
jphp no support ref for typed props
--FILE--
<?

class A {
    public static int $x = 0;
}

$y =& A::$x;

echo "failed";
?>
--EXPECTF--

Fatal error: Unable to assign by ref for typed property A::$x, jphp will not support this feature in %s on line %d, position %d
