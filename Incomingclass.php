<?php

    
// Incoming class
class Incoming {
    public $qty = 20; 

    public function add($sqty) {
        $this->qty += $sqty; 
    }

    public function total() {
        return $this->qty; 
    }
}


$incoming = new Incoming();


$incoming->add(10);

// Get the total quantity of incoming items
$total_qty = $incoming->total();

echo "Total qty is: " . $total_qty;

?>