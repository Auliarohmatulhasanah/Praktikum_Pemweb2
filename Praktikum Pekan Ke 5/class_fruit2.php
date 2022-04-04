<?php
class fruit {
    public $name;
    public $color;
    public $weight;

    function set_name($n) {
        $this->name = $n;
    }
    protected function set_color($n){
        $this->color = $n;
    }
    private function set_weight($n){
        $this->weight = $n;
    }
}

$mango = new fruit ($nama, $color, $weight);
echo $mango->set_name = "mango";
echo $mango->set_color = "yelow";
echo $mango->set_weight = 300 ;
?>