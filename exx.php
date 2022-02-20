<?php
    class Studenti{
        private $emri;
        private $mbiemri;
        private $mosha;
        private $email;
        private $gjinia;
        private $vitiAkademik;
        private $niveliStudimeve;
        private $departamenti;

        function __construct($emri,$mbiemri,$mosha,$email,$gjinia,$vitiAkademik,$niveliStudimeve,$departamenti){
            $this->emri = $emri;
            $this->mbiemri = $mbiemri;
            $this->mosha =$mosha;
            $this->email = $email;
            $this->gjinia = $gjinia;
            $this->vitiAkademik = $vitiAkademik;
            $this->niveliStudimeve = $niveliStudimeve;
            $this->departamenti = $departamenti;
        }

        //getters
        function getemri (){
            return $this->emri;
        }
        function getMbiemri (){
            return $this->mbiemri;
        }
        function getMosha (){
            return $this->mosha;
        }
        function getEmail (){
            return $this->email;
        }
        function getGjinia (){
            return $this->gjinia;
        }
        function getVitiAkademik (){
            return $this->vitiAkademik;
        }
        function getNiveliStudimeve (){
            return $this->niveliStudimeve;
        }
        function getDepartamenti (){
            return $this->departamenti;
        }
        //setters
        function setEmri ($emri){
            $this->emri = $emri;
        }
        function setMbiemri ($mbiemri){
            $this->mbiemri = $mbiemri;
        }
        function setMosha ($mosha){
            $this->mosha = $mosha;
        }
        function setEmail ($email){
            $this->email = $email;
        }
        function setGjinia ($gjinia){
            $this->gjinia = $gjinia;
        }
        function setVitiAkademik ($vitiAkademik){
            $this->vitiAkademik = $vitiAkademik;
        }
        function setNiveliStudimeve ($niveliStudimeve){
            $this->niveliStudimeve = $niveliStudimeve;
        }
        function setDepartamenti ($departamenti){
            $this->departamenti = $departamenti;
        }
        
    }

    $stud = new Studenti("asdasd","asdasd",12,"asdasd",'M',"20/21","bachelor","CSE");
    echo $stud->getEmail();
?>