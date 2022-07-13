<?php

class Movie {

    public $titolo;
    public $cover;
    public $genere;
    public $anno;

    function __construct($_titolo, $_cover, $_genere, $_anno) {
        $this->setTitolo($_titolo);
        $this->setCover($_cover);
        $this->setGenere($_genere);
        $this->setAnno($_anno);
    }

    public function getTitolo() {
        return $this->titolo;
    }

    public function setTitolo($titolo) {
        $this->titolo = $titolo;
    }

    public function getCover() {
        return $this->cover;
    }

    public function setCover($cover) {
        $this->cover = $cover;
    }

    public function getGenere() {
        return $this->genere;
    }

    public function setGenere($genere) {
        $this->genere = $genere;
    }

    public function getAnno() {
        return $this->anno;
    }

    public function setAnno($anno) {
        $this->anno = $anno;
    }
    
    public function printMovie() {

        $titolo = $this->getTitolo();
        $cover = $this->getCover();
        $genere = $this->getGenere();
        $anno = $this->getAnno();
?>

    <div class="card my-4" style="width: 18rem;">
        <img src="<?php echo $cover ?>" class="card-img-top w-100" alt="<?php echo $titolo ?>">
        <div class="card-body">
            <h2 class="card-title"><?php echo $titolo ?></h2>
            <p class="card-text"><?php echo $genere . " - " .  $anno ?></p>
        </div>
    </div>

<?php
        
    
    }
}

?>

