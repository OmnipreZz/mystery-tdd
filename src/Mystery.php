<?php

class Mystery {

    private $count = 0;
    private $random;

    public function __construct() {
        $this->random = rand(0, 9);
    }

    public function getRandom() {
        return $this->random;
    }

    public function getCount() {
        return $this->count;
    }

    public function mystNumber($n) {
        if ($this->count >= 2) {
            return 'You lose';
        } else {
            if ($this->random < $n) {
                $this->count++;
                return 'Too big! try again';
            } else if ($this->random > $n){
                $this->count++;
                return 'Too small! try again';
            } else {
                return 'You win';
            }
        }
    }
}