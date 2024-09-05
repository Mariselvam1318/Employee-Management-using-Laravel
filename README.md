# Employee Management System

## Description

The Employee Management System is a Laravel-based web application designed to manage employee records. This application allows users to create, read, update, and delete employee details, making it easier to maintain an organized database of employee information.

## Features

- User-friendly interface for managing employee data.
- Ability to add new employee records.
- View existing employee details in a tabular format.
- Edit employee information as needed.
- Delete employee records from the database.
- Responsive design for optimal viewing on various devices.

## Technologies Used

- *Laravel*: A PHP framework for building web applications.
- *Bootstrap*: A front-end framework for developing responsive and mobile-first websites.
- *SQLite/MySQL*: Database for storing employee records.
- *HTML/CSS*: For structuring and styling the application.

## Requirements

To run this application, ensure you have the following installed:

- PHP >= 7.3
- Composer
- Laravel
- A web server (like Apache or Nginx)
- A database (SQLite or MySQL)

## Installation

1. *Clone the repository*:
   bash
   git clone https://github.com/yourusername/Employee-app.git
   
2.  *Navigate to the project directory*:

bash
cd Employee-app

3.  *Install dependencies*:

bash
composer install

4.  *Configure your database*:

*   Open the .env file and set your database connection details.
*   For SQLite, ensure you have a valid database file. If it doesn't exist, create one and specify the path in the .env file:

javascript
DB\_CONNECTION=sqlite
DB\_DATABASE=/path/to/your/database/Empdb.sqlite

5.  *Run migrations*:

bash
php artisan migrate

6.  *Serve the application*:

bash
php artisan serve

7.  *Access the application*: Open your web browser and go to http://localhost:8000.

## Usage

*   Navigate to the Employee Management section.
*   Fill in the employee details in the provided form and click "Register" to add an employee.
*   The employee list will be displayed below the form.
*   You can edit or delete employee records using the respective buttons.