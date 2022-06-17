# basicMVC
A basic mvc template

## Requirement
- php 7.0 or higher
- mysql

## Setup

### 1. Database setup :

    - create a database 
    - create a table named `coffee` with the following columns :
      - id : int, autoincrement, unique
      - name : varchar, 255
      - price : float
      - description : text
      - icon : varchar, 255


### 2. Project setup :

- open `config\config.php`
- Edit the following lines :

```
// database name
define("DB_NAME", "Your database name");

// database user
define("DB_USER", "Your database username");

// database password
define("DB_PASSWD", "your user password");
```

## Run the project

- open a terminal in the `BasicMVC` folder root
- run `php -S localhost:8080`
- open a browser and navigate to `http://localhost:8080` 

## Copyright

This project is open source, you can edit and share it anyway you want