<?php
class Dispenser{
    protected $volume;
    protected $hargasegelas;
    private $volumegelas;
    public $namaminum;

    public function isi($vol){
        $this->volume = $vol;
    }
}
?>