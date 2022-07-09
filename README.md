# Prueba de desarrollo

_Prueba de desarrollo para tiendapp._

### Instalación 🔧

1. Clonar el repositorio en el folder del servidor web en uso o en el de su elección, **este folder debe tener permisos para que php se pueda ejecutar por CLI y permisos de lectura y escritura para el archivo .env**.

```sh 
git clone https://github.com/beleer11/tiendapp.git 
```

2. Instalar paquetes ejecutando en la raíz del folder.

```sh 
1. composer install
2. composer require laravel/ui
3. php artisan ui bootstrap --auth
4. npm install
5. npm run dev
```
3. Crear BD, ejemplo.

```sh 
`CREATE DATABASE tiendaapp_db COLLATE 'utf8mb4_general_ci';`
```

4. Duplique el archivo `.env.example` incluido en uno de nombre `.env` y dentro de este ingrese los valores de las variables de entorno necesarias, las básicas serían las siguientes:
- `DB_HOST="value"` Variable de entorno para el host de BD.
- `DB_PORT="value"` Variable de entorno para el puerto de BD.
- `DB_DATABASE="value"` Variable de entorno para el nombre de BD.
- `DB_USERNAME="value"` Variable de entorno para el usuario de BD.
- `DB_PASSWORD="value"` Variable de entorno para la contraseña de BD.

5. En la raíz del sitio ejecutar.
- `php artisan migrate` Crea la estructura de BD. 
- `php artisan serve` Arranca el servidor web bajo la url [http://127.0.0.1:8000](http://127.0.0.1:8000).

## Autor ✒️ 

* **Brahiam Musse** [mussebrahiam11@gmail.com](bmusse11:mussebrahiam11@gmail.com)


------------------------
