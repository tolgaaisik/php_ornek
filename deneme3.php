<?php   
class Myclass
{
 public $font_size ="18px";
 public $font_color = "blue";
 public $string_name = "w3resource";
 public function customize_print()
 {
 echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->string_name."</p>";
 }
}
$f = new MyClass;
$f->font_size = "20px";
$f->font_color = "red";
$f->string_name = "Object Oriented Programming";
echo $f->customize_print();
?>