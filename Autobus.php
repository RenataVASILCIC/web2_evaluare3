<?
require_once "Transport.php";
class Autobus extends Transport {
    public function startRuta($distanta){
        $fuel = $this->comb_disponibil;
        $this->comb_disponibil -= $distanta/100 * $this->consum_km;
        if($this->comb_disponibil <= 0){
            echo("Este suficinet combustibil doar pentru 500km: ". ($fuel / $this->consum_km)*100 ."/". $distanta ."<br>");
        }
    }
}
?>