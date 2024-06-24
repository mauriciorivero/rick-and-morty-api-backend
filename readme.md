# Rick and Morty API

## Project Description

This is a REST API based on the popular TV series *Rick and Morty*. The API provides detailed information about the characters, episodes and locations of the Rick and Morty universe. This project is designed to help developers access data from the series easily and efficiently.

## Project Structure

The structure of the project is organized as follows:

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


### Description of Directories

- **api-rest/**: Contains the endpoints for the CRUD operations.

- **includes/**: Contains the php classes of the project's entities

- **model-design/**: contains the ER diagram of the relational database, the assembly script, the queries used and the MySQL Workbench mwb file.

- **unitTests/**: Contains the unit tests for the classes.

- **.gitignore**: Files and directories that Git should ignore.

- **README.md**: Main project documentation.


## Instalación

To install and run this API in your local environment, follow these steps:

1. **Clone the repository:**
   ```bash
   git clone https://github.com/mauriciorivero/rick-and-morty-api-backend.git
   cd rick-and-morty-api-backend

2. **Run in phpmyadmin (MySQL) the script:**
   ```bash
   rick-and-morty-script-db

3. **Run all the inserts on the model-design/queries.sql:**
    ```bash
        $host = "localhost:8889";
        $user = "root";
        $password = "root";
        $database = "rick-and-mort-api";
    according to your computer engine and configuration

4. **Enter the input parameters for the Database.class:**
    ```bash
        $host = "localhost:8889";
        $user = "root";
        $password = "root";
        $database = "rick-and-mort-api";
    according to your computer engine and configuration

5. **Test the endpoints (you can use an application such as RapidAPI for this task):**
    ```bash
        //These are the endpoints for episodes
        POST http://localhost:8888/rick-and-morty-api-backend/api-rest/create_episode.php?name=Episode%201&air_date=Dec,%2012%202024&episode=S02E03&created=2024-06-20&isActive=1
        GET http://localhost:8888/rick-and-morty-api-backend/api-rest/get_all_episode.php
        DELETE http://localhost:8888/rick-and-morty-api-backend/api-rest/delete_episode.php?id=12

        //These are the endpoints for characters
        POST http://localhost:8888/rick-and-morty-api-backend/api-rest/create_character.php?name=Alicia&status=Alive&species=Human&Gener=Female&image=https%3A%2F%2Frickandmortyapi.com%2Fapi%2Fcharacter%2Favatar%2F372.jpeg&created=2024-06-20&isActive=1
        GET http://localhost:8888/rick-and-morty-api-backend/api-rest/get_all_character.php
        DELETE http://localhost:8888/rick-and-morty-api-backend/api-rest/delete_character.php?id=12

        //These are the endpoints for the operations between episodes and characters
        POST http://localhost:8888/rick-and-morty-api-backend/api-rest/create_relationship_ep_ch.php?id_episode=1&id_character=1
        DELETE http://localhost:8888/rick-and-morty-api-backend/api-rest/delete_relationship_in_between.php?ep_id=1&ch_id=1
        GET http://localhost:8888/rick-and-morty-api-backend/api-rest/get_all_episode_by_ch.php?ch_id=1
        GET http://localhost:8888/rick-and-morty-api-backend/api-rest/get_all_character_by_ep.php?ep_id=1

        //These are the endpoints for users
        POST http://localhost:8888/rick-and-morty-api-backend/api-rest/create_user.php?name=Mauricio&lastname=Rivero&username=mauriciorivero&pass=pasZ12345-
