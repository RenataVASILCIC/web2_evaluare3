<?
require_once "Transport.php";
class Avion extends Transport{
    public function startRuta($distanta){
        $this->comb_disponibil -= $distanta/100 * $this->consum_km;
        if($this->comb_disponibil <= 0){
            echo("Nu este destul combustibil, Avionul nu poate decola  <br>");
            $this->comb_disponibil += $distanta/100 * $this->consum_km;
            return 0;
        }
        return 1;
    }
}
?>