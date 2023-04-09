<?php
declare(strict_types = 1);
abstract class Persona {
  protected string $nombre;
  protected string $apellidos;
  protected ?DateTime $fechaNacimiento;

  function __construct(string $nombre, string $apellidos, ?DateTime $fechaNacimiento = null) {
    $this->nombre = $nombre;
    $this->apellidos = $apellidos;
    $this->fechaNacimiento = $fechaNacimiento;
  }

  public function getFechaNacimientoString (): string {
    return $this->fechaNacimiento? $this->fechaNacimiento->format('d-m-Y') : '';
  }

  static public function dimeEdad (DateTime $edad): int {
    return $edad->diff(new DateTime())->y;
  }

  public function getFechaNacimiento (): ?DateTime {
    return $this->fechaNacimiento;
  }

  abstract public function getNombre(): string;
}

class Alumno extends Persona {
  public function getNombre (): string {
    return $this->nombre;
  }
  
}

$xurxo = new Alumno('Xurxo', 'González', new DateTime('1973-04-06'));

$edad = Persona::dimeEdad($xurxo->getFechaNacimiento());

echo $edad;
