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
     }
     public function setCognome($cognome) {
       if(!empty($cognome)) $this->cognome = $cognome;
     }
     public function setCodFis($codFis) {
       if(!empty($codFis)) $this->codFis = $codFis;
     }
     public function setTurnoMattina($turnoMattina) {
       if(!empty($turnoMattina)) $this->turnoMattina = $turnoMattina;
     }
     public function setTurnoPomeriggio($turnoPomeriggio) {
       if(!empty($turnoPomeriggio)) $this->turnoPomeriggio = $turnoPomeriggio;
     }
     public function setTurnoSera($turnoSera) {
       if(!empty($turnoSera)) $this->turnoSera = $turnoSera;
     }
     public function getNome() {
       var_dump($this->nome);
     }
     public function getCognome() {
       var_dump($this->cognome);
     }
     public function getCodFis() {
       var_dump($this->codFis);
     }
     public function getTurnoMattina() {
       var_dump($this->turnoMattina);
     }
     public function getTurnoPomeriggio() {
       var_dump($this->turnoPomeriggio);
     }
     public function getTurnoSera() {
       var_dump($this->turnoSera);
     }
   }
