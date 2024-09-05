<?php
class payroll {
    private $Firstname;

    private $lastname;

    private $Tax;
    
    private $Salary;

    public function __construct($Firstname, $lastname, $Tax, $Salary) {
        $this->Firstname = $Firstname;
        $this->lastname = $lastname;
        $this->Tax = $Tax;
        $this->Salary = $Salary;
    }

    public function computeNet() {
        return $this->Salary - $this->Tax;
    }

    public function getEmployeeName() {
        return $this->Firstname . " " . $this->lastname;
    }
}

$payroll = new Payroll("Peter", "Yee", 500, 3000);

echo "Employee Name: " . $payroll->getEmployeeName() . "\n";

echo "Net: " . $payroll->computeNet();
?>