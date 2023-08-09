<?php


class formPersonal {

 public $nombres = "";
 public $apellidos = "";
 public $fecha_nacimiento = "";
 public $tipo_documento = "";
 public $documento = "";
 public $telefono = "";
 public $direccion = "";
 public $ciudad = "";
 public $email = "";
 

 public function __construct($nombres, $apellidos,$fecha_nacimiento, $tipo_documento, $documento,$telefono, $direccion,$ciudad, $email)
 {
 $this->nombres = $nombres;
 $this->apellidos = $apellidos;
 $this->fecha_nacimiento = $fecha_nacimiento;
 $this->tipo_documento = $tipo_documento;
 $this->documento = $documento;
 $this->telefono = $telefono;
 $this->direccion = $direccion;
 $this->ciudad = $ciudad;
 $this->email = $email;
 }

 public function getDataUsers()
{
    $infodate = "Información del usuario: <br>";
    $infodate .= "Nombres: " .$this -> nombres . "<br>";
    $infodate .= "Apellidos: " .$this -> apellidos . "<br>";
    $infodate .= "fecha de nacimiento: " .$this -> fecha_nacimiento . "<br>";
    $infodate .= "Tipo de Documento: " .$this -> tipo_documento . "<br>";
    $infodate .= "Documento: " .$this -> documento . "<br>";
    $infodate .= "Telefono: " .$this -> telefono . "<br>";
    $infodate .= "Direccion: " .$this -> direccion . "<br>";
    $infodate .= "Ciudad: " .$this -> ciudad . "<br>";
    $infodate .= "Email: " .$this -> email . "<br>";
    return $infodate;
 }



}
?>