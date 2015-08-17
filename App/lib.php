<?php
namespace App\lib;

const MYCONST = 'App\lib\MYCONST';

function MyFunction($a) {
    $b = array('1'=>'a','2'=>'b');
    return array($a,$b);
        
}

class MyClass {
	static function WhoAmI() {
            	return __METHOD__;
	}
}