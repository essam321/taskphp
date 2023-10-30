class Circle {
    private $radius = 1.0;
    private $color = "red";

    public function __construct() {
        // Default constructor
    }

    public function Circle($r) {
        // Constructor with a parameter for radius
        $this->radius = $r;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function getArea() {
        return M_PI * pow($this->radius, 2);
    }
}
