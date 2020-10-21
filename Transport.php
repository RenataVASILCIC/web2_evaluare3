<?
abstract class Transport{
    public $model = "model";
    public $consum_km = "";
    public $comb_disponibil = "";

    public function __construct($model, $consum_km, $comb_disponibil){
        $this->model = $model;
        $this->consum_km = $consum_km;
        $this->comb_disponibil = $comb_disponibil;
    }

    public function startRuta($distanta){
        $this->comb_disponibil -= $distanta/100 * $this->consum_km;
    }

    public function alimentareCombustibil($amount){
        $this->comb_disponibil += $amount;
    }

    public function combustibilRamas(){
        echo "Combustibil ramas: ". $this->comb_disponibil ."<br>";
    }
}
?>