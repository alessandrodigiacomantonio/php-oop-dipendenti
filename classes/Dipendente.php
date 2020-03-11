<?php
  class Dipendente
   {
     // ↓ proprietà classe ↓
     protected $nome;
     protected $cognome;
     protected $codFis;
     protected $turnoMattina;
     protected $turnoPomeriggio;
     protected $turnoSera;
     // ↓ metodo __costructor() ↓
     public function __constructor($nome, $cognome, $codFis, $turnoMattina, $turnoPomeriggio, $turnoSera) {
       setNome($nome);
       setCognome($cognome);
       setCodFis($codFis);
       setTurnoMattina($turnoMattina);
       setTurnoPomeriggio($turnoPomeriggio);
       setTurnoSera($turnoSera);
     }
     // ↓ metodi classe ↓
     public function setNome($nome) {
       if(!empty($nome)) $this->nome = $nome;
       var_dump($this->nome);
     }
     public function setCognome($cognome) {
       if(!empty($cognome)) $this->cognome = $cognome;
       var_dump($this->cognome);
     }
     public function setCodFis($codFis) {
       if(!empty($codFis)) $this->codFis = $codFis;
       var_dump($this->codFis);
     }
     public function setTurnoMattina($turnoMattina) {
       if(!empty($turnoMattina)) $this->turnoMattina = $turnoMattina;
       var_dump($this->turnoMattina);
     }
     public function setTurnoPomeriggio($turnoPomeriggio) {
       if(!empty($turnoPomeriggio)) $this->turnoPomeriggio = $turnoPomeriggio;
       var_dump($this->turnoPomeriggio);
     }
     public function setTurnoSera($turnoSera) {
       if(!empty($turnoSera)) $this->turnoSera = $turnoSera;
       var_dump($this->turnoSera);
     }
     public function getName($nome) {
       var_dump($this->nome);
     }
     public function getCognome($cognome) {
       var_dump($this->cognome);
     }
     public function getCodFis($codFis) {
       var_dump($this->codFis);
     }
     public function getTurnoMattina($turnoMattina) {
       var_dump($this->turnoMattina);
     }
     public function getTurnoPomeriggio($turnoPomeriggio) {
       var_dump($this->turnoPomeriggio);
     }
     public function getTurnoSera($turnoSera) {
       var_dump($this->turnoSera);
     }
   }
