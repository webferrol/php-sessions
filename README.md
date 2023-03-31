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

## Atributo action del formulario. Forma correcta de poner la url

```html
<form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>">
  <textarea name="comentarios" cols="30" rows="10" placeholder="Sus comentarios aquí"><?=$comentarios??''?></textarea>
  <br>
  <button>Enviar</button>
</form>
```

## Exensiones VSC
- PHP Server
- PHP Intelephense
- PHP Debug