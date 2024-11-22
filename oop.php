<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>物件導向</title>
</head>

<body>
    <h1>物件的宣告</h1>
    <?php
Interface Behavior{
  public function run();
  public function speed();
  public function jump();
}
class Animal{
protected $type='animal';
protected $name='John';
protected $hair_color='black';
protected $feet=['front-left','front-right','back-left','back-right'];

  function __construct($type,$name,$hair_color){
    $this->type=$type;
    $this->name=$name;
    $this->hair_color=$hair_color;
  }

    function run(){
    echo $this->name.' is running';
  }
  
  public function speed(){
    echo $this->name.' is running at 20km/h';
  }

  public function getName(){
    return $this->name;
  }
  
  public function setName($name){
    $this->name=$name;
  }
}

//實例化(instance)
$cat=new Animal('cat','Kitty','white');

//echo $cat->type;
echo $cat->getname();
//echo $cat->hair_color;
echo $cat->run();
echo $cat->speed();
//print_r($cat->feet)
$cat->setName('joson');
echo $cat->getName();









?>

<h1>繼承</h1>


<?php


class Cat extends Animal{
    protected $type='cat';
    protected $name="Judy";
    function __construct($hair_color){
        $this->hair_color=$hair_color;
    }
    function jump(){
      echo $this->name."jumpping 2m";
    }

}


$mycat=new Cat('white');

echo $mycat->getName();
echo "<br>";
echo $mycat->run();
echo "<br>";
echo $mycat->speed();
echo "<br>";
$mycat->setName("Judy");
echo $mycat->getName();
echo "<br>";
echo $mycat->jump();
echo "<br>";


?>
<?php

class dog extends Animal{
  protected $type='dog';
  protected $name="Jacky";
  function __construct($hair_color){
      $this->hair_color=$hair_color;
  }


}
$mydog=new dog('yellow');


echo $mydog->getName();
echo "<br>";
echo $mydog->run();
echo "<br>";
echo $mydog->speed();
echo "<br>";
$mydog->setName("Jacky");
echo $mydog->getName();
echo "<br>";




?>

</body>

</html>