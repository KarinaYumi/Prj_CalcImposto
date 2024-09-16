<?php

require_once("../Model/Usuario.php");

    class usuarioDao {


        public static function calculoAliquota($rendimento){

            if ($rendimento <= 22847.76) {
                return 0;

            } else if ($rendimento >= 22847.76 && $rendimento <= 33919.80) {
                return 7.5;

            } else if ($rendimento >= 33919.80 && $rendimento <= 45012.60) {
                return 15;

            } else if ($rendimento >= 45012.60 && $rendimento <= 55976.16) {
                return 22.5;

            } else if ($rendimento > 55976.16){
                return 27.5;
            }

    }


        public static function calculoImposto($rendimento){

                $aliquota = 0;
                $imposto = 0;

                if($rendimento <= 22.847){
                    $aliquota = 0;

                }else if($rendimento >= 22847.76 && $rendimento <= 33919.80){
                    $aliquota = 7.5;

                }else if($rendimento >= 33919.80 && $rendimento <= 45012.60){
                    $aliquota = 15;

                }else if($rendimento >= 45012.60 && $rendimento <= 55976.16){
                    $aliquota = 22.5;

                }else if ($rendimento > 55976.16){
                    $aliquota = 27.5;
                }

                $imposto = ($rendimento * $aliquota) / 100;
                return $imposto = $imposto;

        }

        public static function validarCpf($cpf){

            $cpf = str_replace(".","",$cpf);
            $cpf = str_replace("-","",$cpf);
    
            $vetorCpf = array();
    
            for($i = 0; $i < ( strlen($cpf) ); $i++){ 
                $vetorCpf[$i] = substr($cpf,$i,1);
            }
    
            //cálculo do 1º dígito do CPF
            $contador = 10;
            $soma1 = 0;
            for($i = 0; $i < 9; $i++){
                $soma1 = $soma1 + ($vetorCpf[$i] * $contador);
                $contador--;
            }
            $digito1 = ($soma1 % 11);
            if ($digito1 < 2){
                $digito1 = 0;
            }
            else{
                $digito1 = 11 - $digito1;
            }
    
            $contador = 11;
            $soma2 = 0;
    
            for($i = 0; $i < 9; $i++){
                $soma2 = $soma2 + ($vetorCpf[$i]*$contador);
                $contador--;
            }
    
            $soma2 = $soma2 + ($digito1*$contador);
            $digito2=($soma2%11);
    
            if($digito2 < 2){
                $digito2 = 0;
            } else {
                $digito2 = 11 - $digito2;
    
            }
    
            if($digito1 == $vetorCpf[9] && $digito2 == $vetorCpf[10]){
                return true;
            }else{
                return false;
            }
    
        }

    }
?>