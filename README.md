# DawaOnline

## Overview

  This project is built using PHP and is powered by a custom routing system (`Core\Router`). It includes session management.
  The code is structured to follow modern PHP best practices with autoloading, session handling and exception-based error handling.

---

## Features

  ### 1. Routing 
  A custom `Router` class is used to handle HTTP routes. Routes are defined in a `routes.php` file and resolved dynamically based on the request URI and method.

  ### 2. Session Management
  The project uses a `Core\Session` class for handling session data, including flash messages for temporary data persistence.

  ### 3. Validation Exception
  The project leverages a `Core\ValidationException` class to validate data and report errors.

  ### 4. Autoloading
  The project uses composer to autoload dependencies, ensuring clean and maintainable code.

  ### 5. Project Structure
  The application is structured in a logical way, making it easy to understand, extend, and maintain.

---

## Project Structure

  ```
  ├── bootstrap.php
  ├── composer.json
  ├── composer.lock
  ├── config.php
  ├── routes.php
  ├── core/
  |  ├── Middleware/
  │   ├── App.php
  │   ├── Authenticator.php
  │   ├── Container.php
  │   ├── Database.php
  │   ├── functions.php
  │   ├── Response.php
  │   ├── Router.php
  │   ├── Session.php
  │   ├── ValidationException.php
  │   ├── Validator.php
  ├── Http/
  │   ├── controllers/
  │   ├── Forms/
  ├── public/
  │   ├── assets/
  │   ├── index.php
  ├── vendor/
  ├── views/
  ```

---

## Project Components

  ### Core
  - **Authentictor.php**: Handles User authentication.
  - **Container.php**: Dependency Injection container.
  - **Database.php**: Database connection and operations
  - **functions.php**: Helper functions.
  - **Router.php**: Handles routing.
  - **Session.php**: Manages session data.
  - **ValidationException.php**: Custom exception for validation errors.
  - **Validator.php**: Validates input data.

  ### Public
  - **index.php**: Entry point of the application.

  - **config.php**: Configuration settings.
  - **routes.php**: Defines applications routes.

## Template Usage

  This project uses an HTML, CSS and JavaScript template from the `Colorlib Site`: 
  [https://colorlib.com/wp/template/pharmative/](https://colorlib.com/wp/template/pharmative/).
   



