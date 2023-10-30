<?php
class Rectangle {
  
    private $length = 1.0;
    private $width = 1.0;

   
    public function __construct() {
    }

    public function construct(float $length, float $width) {
        $this->length = $length;
        $this->width = $width;
    }

  
    public function getLength(): float {
        return $this->length;
    }

    public function getWidth(): float {
        return $this->width;
    }

  
    public function setLength(float $length): void {
        $this->length = $length;
    }

    public function setWidth(float $width): void {
        $this->width = $width;
    }


    public function getArea(): float {
        return $this->length * $this->width;
    }

    public function getPerimeter(): float {
        return 2 * ($this->length + $this->width);
    }

    public function toString(): string {
        return "Rectangle [length={$this->length}, width={$this->width}]";
    }
}
?>
