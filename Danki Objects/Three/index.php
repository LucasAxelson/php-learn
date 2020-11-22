<?php
    class filha {

//        protected function funcaoteste() {
//            echo 'funcionado teste';
//        }

        private function funcaoTeste() {
            echo 'Teste funcionando';
        }

        public function mostrarOla() {
            $this->funcaoteste();
            echo '<br />';
            echo 'Ola Mundo';
        }
    }
    class Pai extends Filha {

        public function mostrarOla()
        {
            parent::mostrarOla();
            echo 'Hi';
        }

        public function mostrarTchau() {
            echo 'Tchau mundo!';
            echo '<br />';
            $this->funcaoteste();
        }
    }

//    $pai = new Pai;

//   $pai->mostrarTchau();

    $pai = new Pai;
    $pai->mostrarOla();

    $filha = new Filha;

//    $filha->mostrarOla();

?>