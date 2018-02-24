<?php

//class A
//{
//    public function test()
//    {
//        return 42;
//        var_dump(debug_print_backtrace());
//    }
//}
//
//class B extends A
//{
//
//}
//
//$a = new A;

//$reflector = new ReflectionMethod(B::class, 'test');
//$reflector->setAccessible(true);
//
//var_dump($reflector->invoke($a));

function a()
{
    b();
}

function b()
{
    c();
}

function c()
{
    $arr = debug_backtrace();
    var_dump($arr);
}

a();

