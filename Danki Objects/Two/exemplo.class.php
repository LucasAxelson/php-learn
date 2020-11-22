<?php
    class Example {

        private $var1;
        public $var2;
    
        /*public static $var3 = 'Static';

        public function method() {

        }

        private function method2() {


        }
    }
    */
    public function setVar1($var1) {
        $this->var1 = $var1;
        }

    public function pegaVar1() {
        return $this->var1;
    }
}