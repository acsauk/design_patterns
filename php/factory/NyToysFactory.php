<?php
class NyToysFactory extends ToysFactory {

  public function createToy($toyName) {
    $toy = null;

    if ('car' == $toyName) {
      $toy = new NyCar();
    } else if ('helicopter' == $toyName) {
      $toy = new NyHelicopter();
    }

    return $toy;
  }
}
?>
