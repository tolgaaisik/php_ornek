<?php
  class MyClass
  {
  const constant1 = 'PHP Class Constant';
  function PrintConstant() 
  {
  echo  self::constant1 . "<br>";
  }
  }
  echo MyClass::constant1 . "<br>";
  $classname = "MyClass";
  echo $classname::constant1 . "<br>";
  $class = new MyClass();
  $class->PrintConstant();
  echo $class::constant1."<br>"; 
 ?>