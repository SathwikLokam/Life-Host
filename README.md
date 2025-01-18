# Life-Host: Campaign Donor Web Application

**Life-Host** is a **web-based campaign management system** designed to engage and connect potential donors with important causes. The application allows admins to manage campaigns and track donations, while donors can view and contribute to campaigns. The project is developed using **PHP**, **MySQL**, **HTML**, **CSS**, and **JavaScript**, and runs on **Apache Tomcat** through the **XAMPP** platform.

## Features

- **User-Friendly Interface**: A responsive, clean, and easy-to-navigate interface for both admins and donors.
- **Campaign Management**: Admins can create, update, and manage multiple donation campaigns.
- **Donor Interaction**: Donors can browse active campaigns, register interest, and donate directly through the platform.
- **Database Integration**: All data is securely stored in a MySQL database, including donor information and campaign progress.
- **Admin control**: A admin can control all the activity

## Technologies Used

- **PHP**: Server-side scripting for dynamic functionality and form handling.
- **MySQL**: Database management system to store detail.
- **HTML/CSS**: Front-end technologies used to structure and style the user interface.
- **JavaScript**: For interactive features, form validation, and client-side updates.
- **Apache Tomcat**: Web server that serves the application in the XAMPP environment.
- **XAMPP**: Cross-platform software package that includes Apache, MySQL, and PHP for local development.

## Installation

To run **Life-Host** locally, follow the steps below:

### 1. Install XAMPP

- Download and install **XAMPP** from [XAMPP Official Site](https://www.apachefriends.org/index.html).
- After installation, launch the **XAMPP Control Panel** and start **Apache** and **MySQL**.

### 2. Set up the Project

- Clone or download the **Life-Host** project to your local machine.
- Place the project folder into the `htdocs` directory inside your XAMPP installation. Typically, this is located at:
  ```
  C:\xampp\htdocs\life-host
  ```

### 3. Create the Database

- Open **phpMyAdmin** (access it via `http://localhost/phpmyadmin` in your browser).
- Create a new database named `maindatabase` for the application.
- Import the SQL schema (if provided) or manually create the necessary tables for `maintable(name,age,mail,phnumber,gender,adhar,pass)`,`requesttable(mailaddr,profile,rmessage,payment,paynumber,victim,aadhar,vnumber,vmessage,state)`.

### 4. Configure Database Connection

- In the project folder, open `config.php` (or the relevant configuration file).
- makesure the MySQL in running on port `3306`
- Update the database connection settings with your local database credentials:

  ```php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "maindatabase";  // Database name
  ```

### 5. Run the Application

- Open a web browser and navigate to `http://localhost/life-host` to access the **Life-Host** campaign management system.

## License

This project is open-source and available under the MIT License
