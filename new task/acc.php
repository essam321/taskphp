class Account {
    private $id;
    private $name;
    private $balance;

    public function __construct($id, $name, $balance = 0) {
        $this->id = $id;
        $this->name = $name;
        $this->balance = $balance;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function credit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
        return $this->balance;
    }

    public function debit($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Amount exceeded balance";
        }
        return $this->balance;
    }

    public function transferTo($another, $amount) {
        if ($amount <= $this->balance) {
            $this->debit($amount);
            $another->credit($amount);
        } else {
            echo "Amount exceeded balance";
        }
        return $this->balance;
    }

    public function toString() {
        return "Account [id={$this->id}, name={$this->name}, balance={$this->balance}]";
    }
}
