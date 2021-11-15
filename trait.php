<?php
trait message1 {
public function msg1() {
    echo "OOP is fun! ";
  }

  public function msg2() {
    echo "OOP is fun!2 ";
  }
}
trait message2 {
    public function msg11() {
        echo "OOP is fun!  11 ";
      }
    
      public function msg22() {
        echo "OOP is fun!2 22";
      }
}

class Welcome {
//   use message1;
//   use message2;
use message1, message2;
}

$obj = new Welcome();
$obj->msg1();
$obj->msg2();
$obj->msg22();
$obj->msg11();
