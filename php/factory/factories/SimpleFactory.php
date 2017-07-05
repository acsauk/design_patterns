<?php
class SimpleFactory {
  public function createToy($toyName) {
    $toy = null;
    if ('car' == $toyName) {
      $toy = new Car();
    } else if ('helicopter' == $toyName) {
      $toy = new Helicopter();
    }

    return $toy;
  }
}
?>
