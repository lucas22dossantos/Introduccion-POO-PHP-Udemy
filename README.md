# Aprendiendo Programación Orientada a Objetos en PHP

Este repositorio contiene mis **apuntes y ejercicios prácticos** realizados mientras aprendo **Programación Orientada a Objetos (POO) en PHP** a través de un curso de Udemy.

Importante: Este código no es un proyecto productivo, sino un espacio personal de práctica y aprendizaje.

## Conceptos que estoy practicando

### Bases de POO en PHP

- **01-clase-objeto.php**: Creación de una clase básica y objeto en PHP.
- **02-constructor.php**: Uso de constructores para inicializar objetos.
- **03-atributos.php**: Atributos en clases y sintaxis de PHP 8.
- **04-metodo.php**: Métodos dentro de clases y uso de `$this`.
- **05-modificadores-acceso.php**: Modificadores de acceso (`public`, `protected`, `private`), getters y setters.
- **06-metodo-estatico.php**: Métodos y propiedades estáticas (`static`, `self`).
- **07-herencia.php**: Herencia entre clases en PHP.
- **08-abstraccion.php**: Clases abstractas y su uso.
- **09-interfaces.php**: Uso de interfaces en PHP para definir métodos obligatorios.
- **10-polimorfismo.php**: Polimorfismo — clases hijas redefiniendo métodos de la clase padre.

### Autoload y Namespaces

- **11-autoload.php**: Uso de `spl_autoload_register()` para cargar clases automáticamente.
- **12-namespace.php**: Uso de namespaces y autoloading con `use`.

### Composer y librerías externas

- **13-composer-firebase-jwt.php**: Uso de Composer y librería externa [firebase/php-jwt](https://github.com/firebase/php-jwt) para generar y decodificar JWT.

### Conexión a MySQL

- **14-consultar-db-mysqli.php**: Conexión a MySQL usando `mysqli` y consultas preparadas.
- **15-consultar-db-pdo.php**: Conexión a MySQL usando PDO y recuperación de resultados con `fetchAll`.

## Estructura del repositorio

````bash
.
├── includes/                       # Header y footer comunes
├── clases/                         # Clases separadas (Cliente.php, Detalle.php, etc.)
├── vendor/                         # Librerías instaladas con Composer
├── 01-clase-objeto.php
├── 02-constructor.php
├── 03-atributos.php
├── 04-metodo.php
├── 05-modificadores-acceso.php
├── 06-metodo-estatico.php
├── 07-herencia.php
├── 08-abstraccion.php
├── 09-interfaces.php
├── 10-polimorfismo.php
├── 11-autoload.php
├── 12-namespace.php
├── 13-composer-firebase-jwt.php
├── 14-consultar-db-mysqli.php
├── 15-consultar-db-pdo.php
└── README.md

## Requisitos

- PHP >= 8.0
- MySQL
- Composer

**Instalar dependencias:**

```bash
composer install
````
