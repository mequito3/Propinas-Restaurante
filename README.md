# Propinas Americo Labs - Engine v1.0

![Americo Labs Logo](public/images/logo.png)

### 🌐 Demo en Vivo: [https://prop.americolabs.com/](https://prop.americolabs.com/)

Una solución premium y minimalista para la distribución equitativa de propinas basada en algoritmos de tiempo. Diseñado para ofrecer transparencia y eficiencia en equipos de servicio.

## ✨ Características Principales

- **Algoritmo de Tiempo Real**: Distribución justa basada en las horas trabajadas por cada miembro.
- **Interfaz Premium**: Diseño basado en Glassmorphism optimizado con Tailwind CSS.
- **Totalmente Responsivo**: Experiencia fluida tanto en dispositivos móviles como de escritorio.
- **Acciones Rápidas**: Añade roles comunes (Meseros, Cocineros, Bartenders) con un solo clic.
- **Validación Robusta**: Prevención de errores en la entrada de datos financieros.

## 🚀 Tecnologías

Este proyecto está construido con el stack moderno de Laravel:

- **Core**: [Laravel 10](https://laravel.com/)
- **Estilos**: [Tailwind CSS](https://tailwindcss.com/)
- **Frontend**: Vanilla JavaScript (Zero dependencies for max speed)
- **Assets**: [Vite](https://vitejs.dev/)

## 🛠️ Instalación Local

1. Clonar el repositorio:
    ```bash
    git clone https://github.com/mequito3/Propinas-Restaurante.git
    ```
2. Instalar dependencias:
    ```bash
    composer install
    npm install
    ```
3. Configurar el entorno:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
4. Compilar assets y ejecutar:
    ```bash
    npm run dev
    php artisan serve
    ```

## 🌐 Despliegue (Hostinger)

El proyecto incluye configuraciones específicas para Hostinger:

- Archivo `.htaccess` para gestión automática de la carpeta `public`.
- Meta-tags CSRF reforzados para evitar errores 419 en servidores compartidos.
- Ver [deployment_guide.md](deployment_guide.md) para instrucciones detalladas paso a paso.

## ✒️ Créditos

Diseñado y desarrollado por **[Americo Labs](https://portafolio.americolabs.com/)**.

---

### 🚀 Sobre el Autor

Si te interesa mi trabajo o quieres contactarme para proyectos similares, visita mi **[Portafolio Profesional](https://portafolio.americolabs.com/)**.

---

© 2026 Americo Alvarez. Todos los derechos reservados.
