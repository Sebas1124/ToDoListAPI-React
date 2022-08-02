## Ejecutar Laravel

Para ejecutar esta aplicacion, debemos contar con Composer, NodeJS y Xampp o algún gestor de BD local


Se debe inicializar Xampp y crear la BD con el nombre asignado en el archivo .ENV "DB_DATABASE=to_do_list" una vez creada la BD podemos importar manualmente la BD o lo podemos realizar desde consola

La configuracion de la BD ya está lista, solo se debe ejecutar mediante el comando en consola "php artisan migrate" y esto generará las tablas dentro de la BD

una vez hecho la migración correspondiente se puede ejecutar el comando "php artisan serve" con esto se inicializa el servidor de Laravel alojado en el puerto Localhost:8000

con esto la API ya estará corriendo