# Prueba tecnica para Tally

Esta es una prueba tecnica para una empresa 

## Instalando

Una vez descargado el proyecto en tu servidor local o produccion se tiene que copiar el archivo .env.example

```
cp. env.example. .env
```

Se agregra APP_KEY

```
php artisan key:generate
```

Dentro del archivo .env se agregan la tabla a la cual noombramos en nuestra base de daots asiganada para este proyecto y nuestras llaves DB_USERNAME y DB_PASSWORD

Se corre el siguiente comando para agregar las tablas y la data a la base de datos

```
php artisan migrate --seed
```


Verificamos en el navegador dependiendo de la configuracion que tengamos para ver nuestro proyecto 

En la ruta raiz encontraremos el formulario para agregar una compañia si queremos entrar al admin agregamos a la url 

```
/login
```

Y los accesos seran los siguientes

```
email: admin@demo.com
password: demo123
```

#NOTA

No se cuenta con register para usarios ya que en las instrucciones pidieron un admin unico para acceder a visualizar las compañias registradas.
