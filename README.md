# PHP

[Enlace a classroom](https://classroom.google.com/c/NjAxMjMzOTMyNjQ1?cjc=satfahl)

## Saber características de PHP

```php
phpinfo()
```

## Funciones de depuración

```php
print_r(true); // 1
var_dump(true); // bool(true)
gettype('Xurxo'); // string
```

## Funciones de cadena

```php
# trim()  limpiamos los espacios en blanco por la izquierda y la derecha
# strlen() longitud de un string
# substr() extraemos texto
# strtoupper() pasamos a mayúsculas
# strtolower() pasamos a minúsculas
# strpos() posición / índice de una parte de la cadena
```

## Variables globales

### $_REQUEST, $_POST, $_GET

__Arrays asociativos__ que permiten acceso a las __variables__ pasadas a través de un formulario dependiendo del método del envío

#### Operaciones

- Comprobar si un formulario fue envíado

```php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Gestionamos formulario
}
```

- Otra marera de comprobar si un formulario fue envíado

Se pulsó un botón con el __atributo__ "name" y el __método de envío__ es "post"

```php
if (isset($_POST['enviar'])) { // isset() es un función que comprueba si una variable fue definida
  // Gestionamos formulario
}
```
## Convierte caracteres especiales en entidades HTML

```php
$texto = '<script>alert("Toma virus")<script>'
htmlspecialchars($texto);
```

## Formularios

### Atributo action del formulario. Forma correcta de poner la url

```html
<form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>">
  <textarea name="comentarios" cols="30" rows="10" placeholder="Sus comentarios aquí"><?=$comentarios??''?></textarea>
  <br>
  <button>Enviar</button>
</form>
```

### Sanitizar controles de formularios para evitar injección de código malicioso por script

- [Documentación oficial](https://www.php.net/manual/en/filter.filters.sanitize.php)

```php
<?php
$number_string = '12.34';

echo filter_var( $number_string, FILTER_SANITIZE_NUMBER_FLOAT ); // 1234

echo filter_var( $number_string, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ); // 12.34
?>
```

## Envíos de email

[mail](https://www.php.net/manual/es/function.mail.php)

```php
<?php
$para      = 'nobody@example.com';
$titulo    = 'El título';
$mensaje   = 'Hola';
$cabeceras = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
?>
```

## Clases

Una __clase__ no es más que una _plantilla_ o un _abstracción de una entidad_ del mundo real que pretendemos modelizar.

```php
class Contador {
  private int $cuenta = 0;
  public int $intervalo = 1;

  function __construct (int $number) {
    $this->cuenta = (int) $number;
  }
}
```
En el ejemplo anterior hemos visto una clase llamada __Contador__ del que podemos obtener o __instanciar__ varios __objetos__ contadores.

El __método contructor__ nos permite crear un __objeto__ con un estado inicial. En el ejemplo de abajo creamos dos contadores. Uno con la __propiedad__ $cuenta con valor 0 y el otro con 1.

```php
$contador1 = new Contador(0);
$contador2 = new Contador(1);
```

Tanto las __propiedades__ (variables de una __clase__) como los __métodos__ (funciones de una clase) pueden ser públicos o privados.

Una __propiedad o método público__ pueden ser accedidos desde fuera del objeto:

```php
echo $contador->intervalo;  // 1
```

En cambio una __propiedad o método privado__ sólo pueden ser accesibles desde el interior de la __clase__

```php
echo $contador->cuenta;  // Undefined property '$cuenta'.
```


## Exensiones VSC
- PHP Server
- PHP Intelephense
- PHP Debug

## Ejercicios

- [Ejercicios básicos 1](https://github.com/webferrol/php-basic1-exercises)
- [Ejercicios básicos 2](https://github.com/webferrol/php-basic2-exercises)
- [POO](https://github.com/webferrol/php-basic-oop-exercises)