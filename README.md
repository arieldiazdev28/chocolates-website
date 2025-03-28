# Proyecto: Creación del Sitio web para el emprendimiento "Chocolates"

## Requisitos previos

Antes de clonar y configurar el proyecto, asegúrate de tener instalados los siguientes requisitos:

- **WampServer** (PHP, Apache y MySQL)
- **Composer** (Administrador de dependencias de PHP)
- **Laravel** (Se puede instalar con Composer)
- **Node.js y npm** (Para manejar assets con Vite)
- **Git** (Para clonar el repositorio)

## Instalación y configuración

### 1. Clonar el repositorio

```bash
git clone https://github.com/arieldiazdev28/chocolates-website.git
cd chocolates-website
```

### 2. Instalar dependencias de PHP

```bash
composer install
```

### 3. Crear archivo de configuración

```bash
cp .env.example .env
```

### 4. Generar clave de la aplicación

```bash
php artisan key:generate
```

### 5. Configurar base de datos

Edita el archivo `.env` y actualiza los valores de la base de datos según corresponda.

### 6. Ejecutar migraciones

```bash
php artisan migrate
```

### 7. Instalar dependencias de Node.js

```bash
npm install
```

### 8. Compilar assets

```bash
npm run dev
```

### 9. Inicializar el servidor

```bash
php artisan serve
```

El proyecto estará disponible en `http://127.0.0.1:8000`.



