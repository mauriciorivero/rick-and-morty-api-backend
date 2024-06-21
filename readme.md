# Rick and Morty API

## Descripción del Proyecto

Esta es una API REST basada en la popular serie de televisión *Rick and Morty*. La API proporciona información detallada sobre los personajes, episodios y ubicaciones del universo de Rick and Morty. Este proyecto está diseñado para ayudar a los desarrolladores a acceder a datos de la serie de manera sencilla y eficiente.

## Estructura del Proyecto

La estructura del proyecto está organizada de la siguiente manera:

rick-and-morty-api/
├── api-rest/
├── includes/
├── model-design/
├── unitTests/
├── vendor/
├── .gitignore
├── README.md
├── gitignore.json
├── composer-setup.php
├── composer.json
├── composer.phar
└── readme.md


### Descripción de Directorios

- **api-rest/**: Contiene los endpoints para las operaciones CRUD

- **includes/**: Contiene las clases php de las entidades del proyecto

- **model-design/**: contiene el diagrama ER de la base de datos relacional, el script de montaje, las queries usadas y el archivo mwb de MySQL Workbench

- **unitTests/**: Contiene las pruebas unitarias para las clases.

- **.gitignore**: Archivos y directorios que Git debe ignorar.

- **README.md**: Documentación principal del proyecto.


## Instalación

Para instalar y ejecutar esta API en tu entorno local, sigue estos pasos:

1. **Clonar el repositorio:**
   ```bash
   git clone https://github.com/mauriciorivero/rick-and-morty-api-backend.git
   cd rick-and-morty-api-backend

Instalar las dependencias:
npm install
