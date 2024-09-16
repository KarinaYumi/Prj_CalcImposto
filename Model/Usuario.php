<?php

    class Usuario {
        private $nome;
        private $cpf;
        private $rendimento;
        private $aliquota;
        private $valorImposto;


        public function getNome(){
            return $this->nome;
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function getRendimento(){
            return $this->rendimento; 
        }

        public function getaliquota(){
            return $this->aliquota;
        }

        public function getValorImposto(){
            return $this->valorImposto;
        }

        //set  

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        public function setRendimento($rendimento){
            $this->rendimento = $rendimento;
        }

        public function setAliquota($aliquota){
            $this->aliquota = $aliquota;
        }

        public function setValorImposto($valorImposto){
            $this->valorImposto = $valorImposto;
        }

    }

?>