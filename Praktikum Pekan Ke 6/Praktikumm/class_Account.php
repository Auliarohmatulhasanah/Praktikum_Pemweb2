<?php
    class Account{
        
        //variabel
        public $nomor;
        public $saldo;

        // konstruktor
        function __construct ($nomor,$saldo){
            $this->nomor = $nomor;
            $this->saldo = $saldo;
        }

        // function
        public function deposit($uang){
            $this->saldi = $this->saldo + $uang;
        }
        public function withdraw( $uang){
            $this->saldo = $this->saldo - $uang;
        }
        public function cetak (){
            echo 'Nama Account :'.$this->nomor;
            echo '<br> saldonya :' .$this->saldo;
        }
    }
    ?>