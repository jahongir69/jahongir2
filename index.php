<?php
class Hayvon {
    public $nom;
    public $turi;

    public function ovqatlanish() {
        echo "Hayvon ovqatlanmoqda.n";
    }

    public function harakatlanish() {
        echo "Hayvon harakatlanmoqda.n";
    }
}

class It extends Hayvon {
    // It sinfi Hayvon sinfining barcha xususiyatlari va metodlarini meros qilib oladi
}

$it = new It();
$it->nom = "Rex"; // Hayvon sinfidan meros olingan xususiyat
$it->turi = "It"; // Hayvon sinfidan meros olingan xususiyat
$it->ovqatlanish(); // Hayvon sinfidan meros olingan metod
$it->harakatlanish(); // Hayvon sinfidan meros olingan metod
