<?php

namespace App\Entity;

/**
 * Defines the properties of a representation of a wheel.
 * 
 * @author William Clark <w.max.clark@gmail.com>
 */
class Wheel{

    /**
     * Diameter of the wheel in millimeters
     */
    private int $diameter;
    /**
     * Diameter of the wheel in millimeters
     */
    private int $width;
    /**
     * The air pressure of the tire in pound per square inch gauge
     */
    private int $pressure;
    

    public function __construct(int $diameter = 622, int $width = 37, int $pressure = 60) {
        $this->diameter = $diameter;
        $this->width = $width;
        $this->pressure = $pressure;
    }

	/**
	 * Diameter of the wheel in millimeters
	 * @return int
	 */
	public function getDiameter(): int {
		return $this->diameter;
	}
	
	/**
	 * Diameter of the wheel in millimeters
	 * @param int $diameter Diameter of the wheel in millimeters
	 * @return self
	 */
	public function setDiameter(int $diameter): self {
		$this->diameter = $diameter;
		return $this;
	}

	/**
	 * Diameter of the wheel in millimeters
	 * @return int
	 */
	public function getWidth(): int {
		return $this->width;
	}
	
	/**
	 * Diameter of the wheel in millimeters
	 * @param int $width Diameter of the wheel in millimeters
	 * @return self
	 */
	public function setWidth(int $width): self {
		$this->width = $width;
		return $this;
	}

	/**
	 * The air pressure of the tire in pound per square inch gauge
	 * @return int
	 */
	public function getPressure(): int {
		return $this->pressure;
	}
	
	/**
	 * The air pressure of the tire in pound per square inch gauge
	 * @param int $pressure The air pressure of the tire in pound per square inch gauge
	 * @return self
	 */
	public function setPressure(int $pressure): self {
		$this->pressure = $pressure;
		return $this;
	}
}