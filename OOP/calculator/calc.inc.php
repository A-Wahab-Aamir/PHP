<?php

class Calculator
{
    public $n1;
    public $n2;
    public $op;

    public function __construct($n1, $n2, $op)
    {
        $this->n1 = $n1;
        $this->n2 = $n2;
        $this->op = $op;
    }

    public function Calculation()
    {
        switch ($this->op) {
            case "add":
                $result = $this->n1 + $this->n2;
                break;
            case "sub":
                $result = $this->n1 - $this->n2;
                break;

            case "mul":
                $result = $this->n1 * $this->n2;
                break;
            default:
                $result="Error";
                break; 
        }
        return $result; 
    }
}
