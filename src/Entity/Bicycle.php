<?php

namespace App\Entity;

class Bicycle{
    private string $make;
    private int $modelYear;
    private int $modelMonth;

    public function __construct(string $make, int $modelYear, int $modelMonth) {
        $this->make = $make;
        $this->modelYear = $modelYear;
        $this->modelMonth = $modelMonth;
    }

}