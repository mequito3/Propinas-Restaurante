# Propinas Restaurante

[![Demo](https://img.shields.io/badge/Demo_en_Vivo-prop.americolabs.com-green?style=for-the-badge)](https://prop.americolabs.com)
![Laravel](https://img.shields.io/badge/Laravel-10-FF2D20?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?logo=php&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-Vanilla-F7DF1E?logo=javascript&logoColor=black)
![Live](https://img.shields.io/badge/Live-prop.americolabs.com-green)

Aplicación web para la distribución equitativa de propinas en equipos de servicio, utilizando un algoritmo basado en tiempo trabajado.

**[Ver Demo →](https://prop.americolabs.com)**

---

## ✨ Características

- **Algoritmo de distribución temporal** — calcula la proporción correspondiente a cada empleado según las horas trabajadas en el turno, garantizando equidad sin cálculos manuales
- **Soporte multi-rol** — meseros, bartenders y personal de cocina con botones de acción rápida para agilizar la carga de datos
- **Interfaz glassmorphism** — diseño moderno, responsive y con feedback visual claro para entornos de trabajo reales
- **JavaScript vanilla, zero-dependency** — decisión de arquitectura consciente para maximizar rendimiento y eliminar overhead en el cliente; no se carga ningún framework adicional
- **Protección CSRF** — integración con el sistema de tokens de Laravel, adecuada para entornos de hosting compartido
- **Hostinger-ready** — guía de deployment específica para Hostinger incluida en la documentación

---

## ⚙️ Cómo funciona el algoritmo

El cálculo de propinas sigue una lógica proporcional basada en tiempo:

1. Se ingresan los empleados del turno y sus horas trabajadas.
2. El sistema suma el total de horas del equipo.
3. Cada empleado recibe la fracción del total de propinas equivalente a su peso horario:

```
Propina empleado = (Horas empleado / Total horas equipo) × Monto total
```

Este enfoque elimina la arbitrariedad en la distribución y puede auditarse fácilmente al cierre de cada turno.

---

## 🛠️ Tech Stack

| Capa | Tecnología |
|---|---|
| Backend | Laravel 10 / PHP 8.2+ |
| Frontend | Tailwind CSS + Vite |
| Lógica cliente | JavaScript vanilla (zero dependencies) |
| Seguridad | CSRF tokens (Laravel built-in) |
| Hosting de referencia | Hostinger (shared hosting) |

---

---

## 🚀 Instalación

### Requisitos previos

- PHP 8.2+
- Composer
- Node.js (LTS recomendado)

### Pasos

```bash
# 1. Clonar el repositorio
git clone https://github.com/mequito3/Propinas-Restaurante.git
cd Propinas-Restaurante

# 2. Instalar dependencias PHP
composer install

# 3. Configurar variables de entorno
cp .env.example .env
php artisan key:generate

# 4. Configurar base de datos en .env y ejecutar migraciones
php artisan migrate

# 5. Compilar assets frontend
npm install
npm run build

# 6. Levantar servidor de desarrollo
php artisan serve
```

La aplicación estará disponible en `http://localhost:8000`.

---

## 📁 Estructura

```
├── app/
│   └── Http/Controllers/   # Lógica de distribución
├── resources/
│   ├── views/              # Plantillas Blade + Tailwind
│   └── js/                 # JavaScript vanilla
├── routes/
│   └── web.php
└── public/
```

---

## 🌐 Deployment en Hostinger

1. Subir el contenido de `/public` a `public_html` y el resto del proyecto fuera del webroot.
2. Configurar el `.env` de producción con las credenciales de la base de datos MySQL de Hostinger.
3. Ejecutar `php artisan migrate --force` desde el panel SSH o terminal de Hostinger.
4. Asegurarse de que `APP_ENV=production` y `APP_DEBUG=false` estén seteados.
5. Los assets ya vienen compilados (`npm run build`); no se necesita Node.js en el servidor.

> La protección CSRF funciona de forma nativa con esta configuración sin ajustes adicionales.

---

## 📝 Estado

En producción — disponible en [prop.americolabs.com](https://prop.americolabs.com)

---

## 📄 Licencia

MIT

---

## 👤 Autor

Américo Álvarez · [@mequito3](https://github.com/mequito3) · americooficial23@gmail.com
