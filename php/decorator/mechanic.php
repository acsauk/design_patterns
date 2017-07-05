<?php
  interface CarService {
    public function getCost();
  }

  class BasicInspection implements CarService {
    public function getCost()
    {
      return 25;
    }
  }

  echo (new BasicInspection())->getCost();
?>
