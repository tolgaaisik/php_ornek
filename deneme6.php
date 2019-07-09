<?php
class Myclass
{
private $font_size;
private $font_color;
private $string_value ;
function __construct($font_size,$font_color,$string_value)
{
$this->font_size=$font_size;
$this->font_color=$font_color;
$this->string_value=$string_value;
$this->customize_print();
}
function customize_print()
{
	echo "<p style=font-size:".$this->font_size.";color:".$this->
	font_color.";>".$this->string_value. "</p>";
}
}
$a=new MyClass('30px','red','Object Oriented Programming');
$b=new MyClass('25px','blue','Object Oriented Programming');
$c=new MyClass('20px','green','Object Oriented Programming');
$d=new MyClass('15px','black','Object Oriented Programming');




?>