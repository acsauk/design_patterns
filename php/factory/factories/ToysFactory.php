<?php

abstract class ToysFactory {

  public function produceToy($toyName) {
    $toy = null;
    $toy = $this->createToy($toyName);
    $toy->prepare();
    $toy->package();
    $toy->label();
    return $toy;
  }

  abstract public function createToy($toyName);
}

?>
