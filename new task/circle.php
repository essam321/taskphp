class Circle {
    private $radius;

    public function __construct($radius = 1.0) {
        $this->radius = $radius;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return M_PI * $this->radius * $this->radius;
    }

    public function getCircumference() {
        return 2 * M_PI * $this->radius;
    }

    public function toString() {
        return "Circle [radius=" . $this->radius . "]";
    }
}
