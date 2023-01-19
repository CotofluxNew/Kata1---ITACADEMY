<?php

class traduccioANumeroRomans{

    //atributos
    private $numeroEntrante;

    //metodos
    public function __construct($numeroEntrante){
        $this->numeroEntrante = $numeroEntrante;
    }

    public function esEntero(){
        return is_int($this->numeroEntrante);
    }
    public function determinaLongitudInput(){
        if($this->esEntero() == 1){

            switch ($this->numeroEntrante > 0) {

                case ($this->numeroEntrante>=1000):
                    echo "M";
                    break;
                case ($this->numeroEntrante>=500):
                    echo "D";
                    break;
                case ($this->numeroEntrante>=100):
                    echo "C";
                    break;
                case ($this->numeroEntrante>=50):
                    echo "L";
                    break;
                case ($this->numeroEntrante>=10):
                    echo "X";
                    break;
                case ($this->numeroEntrante>=5):
                    echo "V";
                    break;
                case (($this->numeroEntrante<5) &&($this->numeroEntrante<5)):
                    echo $this->calculInferior4();
                    break;
            
                case ($this->numeroEntrante==1):
                    echo "I";
                    break;
            }
        }

    }
    public function calculInferior4(){

        if($this->numeroEntrante == 4){
            echo "IV";

        }else{
            //echo "Estoy en el else";
            for($i=0; $i<$this->numeroEntrante; $i++){
                echo "I";
            }
        }

    }

}

//Se trata de crear un programa que, dado un número entero(entre 1 y 3999) nos lo traduzca a numeración romana
$numero = new traduccioANumeroRomans(2);
$numero->esEntero();
echo $numero->determinaLongitudInput();
//echo $numero->determinaLongitudInput(1000);

?>