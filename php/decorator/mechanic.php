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

  class OilChange implements CarService {
    protected $carService;

    function __construct(CarService $carService)
    {
      $this->carService = $carService;
    }

    public function getCost()
    {
      return 19 + $this->carService->getCost();
    }
  }

  echo (new OilChange(new BasicInspection()))->getCost();
?>
