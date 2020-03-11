<?php
class Dipendente
{
  private $matricola;
  private $nome;
  private $cognome;
  private $luogoNascita;
  private $dataNascita;
  private $residenza;
  public function__construct($_matricola,$_nome,$_cognome,$_luogoNascita,$_dataNascita,$_residenza)
  {
    $this->matricola = $_matricola;
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->luogoNascita = $_luogoNascita;
    $this->dataNascita = $_dataNascita;
    $this->residenza = $_residenza;
  }
  public function visualizzaDipendente()
  {
      $result = [
        'Nome'=> $this->nome,
      ]
  }
}

class Operaio extends Dipendente
{
  private $notturno;
  function__construct($_matricola,$_nome,$_cognome,$_luogoNascita,$_dataNascita,$_residenza,$_notturno)
  {
    parent::_cnstruct($_matricola,$_nome,$_cognome,$_luogoNascita,$_dataNascita,$_residenza);
    $this->notturno = $_notturno;
  }

}
class Dirigente extends Dipendente
{
  private $bonus;
  public function setBonus($bonus)
  {
    if(!is_numeric($bonus)){
      throw new Exception('Is not a number');
    }else{
      $this->bonus = $_bonus;
    }
  }
}
