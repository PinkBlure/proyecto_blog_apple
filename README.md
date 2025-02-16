# Documentación de la API del Blog

## Descripción

Este proyecto proporciona una API RESTful para interactuar con un blog. Utiliza **Laravel** como framework y **MySQL** como base de datos para almacenar las entradas del blog. La API permite crear, leer, actualizar y eliminar posts de manera sencilla.

## Requisitos previos

Para ejecutar este proyecto, necesitas tener:

- **PHP 7.4+** o una versión posterior.
- **Composer** (gestor de dependencias para PHP).
- **MySQL** para la base de datos.
- **Laravel 8+** o posterior.
- **Acceso a la API del Blog** (puede ser local o remota).

## Instrucciones de instalación y uso

### Paso 1: Clonar el proyecto

1. Clona este repositorio en tu máquina local utilizando Git:
   
```bash
git clone https://github.com/PinkBlure/proyecto_blog_apple.git
```

2. Entra en el directorio del proyecto:

```bash
cd tu-repositorio
```

### Paso 2: Instalar dependencias

1. Asegúrate de tener Composer instalado. Si no lo tienes, puedes instalarlo desde [aquí](https://getcomposer.org/).

2. Instala las dependencias del proyecto ejecutando el siguiente comando en la raíz del proyecto:

```bash
composer install
```

### Paso 3: Configuración de la base de datos

1. Se le pasa al profesor una copia de la base de datos usada.

2. Ejecuta el siguiente comando para generar la clave de la aplicación en Laravel:

```bash
php artisan key:generate
```

3. Ejecuta las migraciones para crear las tablas en la base de datos:

```bash
php artisan migrate
```

4. El proyecto tiene un seeder ya configurado con un montón de entradas preparadas para el disfrute del profesor. Para ejecutarlo, use el siguiente comando:

```bash
php artisan db:seed --class=PostSeeder
```

### Paso 6: Ejecutar el servidor

Ahora, puedes ejecutar el servidor de desarrollo de Laravel:

```bash
php artisan serve
```

Esto hará que la API esté disponible en http://localhost:8000.

### Paso 7: Prueba la API

Abre tu navegador o un cliente como Postman y prueba las rutas de la API que están documentadas más abajo.

## Rutas Implementadas

A continuación se describen las rutas disponibles para interactuar con la API del blog:

---

### 1. Obtener todos los posts
**Ruta:** `/api/posts`  
**Método:** `GET`  
**Descripción:** Obtiene todos los posts publicados en el blog.

---

### 2. Obtener un post por ID
**Ruta:** `/api/posts/{id}`  
**Método:** `GET`  
**Descripción:** Obtiene los detalles de un post específico utilizando su ID.

---

### 3. Crear un nuevo post
**Ruta:** `/api/posts`  
**Método:** `POST`  
**Descripción:** Crea un nuevo post. Requiere los parámetros `title` y `body` en el cuerpo de la solicitud.

**Parámetros requeridos:**
- `title`: El título del post.
- `body`: El contenido del post.

---

### 4. Obtener posts por tipo
**Ruta:** `/api/posts/type/{type}`  
**Método:** `GET`  
**Descripción:** Obtiene los posts filtrados por tipo.

---

### 5. Actualizar un post
**Ruta:** `/api/posts/{id}`  
**Método:** `PUT`  
**Descripción:** Actualiza un post existente. Requiere los campos `title`, `slug`, `body` y `type` en el cuerpo de la solicitud.

**Parámetros requeridos:**
- `title`: El nuevo título del post.
- `slug`: El nuevo slug del post.
- `body`: El contenido actualizado del post.
- `type`: El tipo de post.

---

### 6. Eliminar un post
**Ruta:** `/api/posts/{id}`  
**Método:** `DELETE`  
**Descripción:** Elimina un post especificado por su ID.

---

Estas son las rutas principales de la API para interactuar con el blog. Cada ruta está diseñada para facilitar la gestión de los posts.

## Capturas de Pantalla

### Pantalla principal
![Mi imagen](./images/captura_1.png)

### Paginado de la página principal
![Mi imagen](./images/captura_2.png)

### Filtro de posts por tipo
![Mi imagen](./images/captura_3.png)

### Paginado del filtro de posts por tipo
![Mi imagen](./images/captura_4.png)

### Documentación de la API REST
![Mi imagen](./images/captura_5.png)

### Registro
![Mi imagen](./images/captura_6.png)

### Inicio de sesión
![Mi imagen](./images/captura_7.png)

### Dashboard de usuario logeado
![Mi imagen](./images/captura_8.png)

### Crear nuevo post
![Mi imagen](./images/captura_9.png)

### Listado de posts con botones de modificaciones
![Mi imagen](./images/captura_10.png)

### Detalle de la noticia
![Mi imagen](./images/captura_11.png)

### Editar un post
![Mi imagen](./images/captura_12.png)

### Aviso pop-up al eliminar un posts
![Mi imagen](./images/captura_13.png)

## Credenciales de Prueba

Credenciales de autenticación:
Email: davidperez@apple.us
Contraseña: 12341234

## Contribución
Si deseas contribuir a este proyecto, por favor sigue estos pasos:

1. Haz un fork del repositorio.
2. Crea una nueva rama para tu función o corrección (git checkout -b feature/nueva-funcion).
3. Haz commit de tus cambios (git commit -am 'Añadir nueva función').
4. Envía tu rama al repositorio remoto (git push origin feature/nueva-funcion).
5. Abre un Pull Request.

## Licencia
Este proyecto está licenciado bajo la MIT License. Ver el archivo LICENSE para más detalles.
