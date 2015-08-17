<?php 
header('Content-type: text/plain');
require_once ('App/lib.php');
include_once './interface/test.php';
use App\lib as m;

abstract class test implements header {
    abstract public function testb();
}
class testa extends test{
    public function testb() {
        echo 'this is is testb';
    }

    public function is_login() {
        $a = array('1','2');
        return $a;
    }

}

$a = new testa();


//m\MYCONST;
$x = m\MyFunction($a->is_login());
//m\MyClass::WhoAmI("hi");

print_r($x);