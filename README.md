# Sales Data Entry and Display System

This project is a PHP-based web application for entering, storing, and displaying sales data. The application consists of two main functionalities:
1. Form submission to enter sales data and store it in a MySQL database.
2. Displaying all entered sales data from the database.

## Features

- Enter sales data through a web form.
- Store the entered data in a MySQL database.
- Retrieve and display all entered data from the database on a different page.

## Prerequisites

- PHP 7.0 or higher
- MySQL 5.6 or higher
- A web server (e.g., Apache)
- Composer (optional, for managing dependencies)

## Installation

1. **Clone the repository**:
    ```bash
    git clone https://github.com/abdulismailca/sales-data-entry.git
    ```

2. **Navigate to the project directory**:
    ```bash
    cd sales-data-entry
    ```

3. **Set up the database**:
    - Create a database named `bpcl` in your MySQL server.
    - The required tables will be created automatically when you run the application.

4. **Configure database connection**:
    - Open `data_entry.php` and `display_data.php` files.
    - Update the following lines with your MySQL server credentials:
      ```php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "bpcl";
      ```

## Usage

### Entering Sales Data

1. Open `data_entry.php` in your web browser.
2. Fill out the form with the required sales data.
3. Submit the form to store the data in the database.

### Displaying Entered Data

1. Open `display_data.php` in your web browser.
2. The page will display all the sales data entered and stored in the database.

## Files and Directories

- `data_entry.php`: Handles form submission and data storage in the database.
- `display_data.php`: Fetches and displays all the entered data from the database.
- `assets/css/test.css`: Contains the CSS styles for the application.
- `assets/images/bpcllogo.jpeg`: Logo image used in the application.
- `README.md`: This readme file.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Author

- [Abdul Ismail](https://github.com/abdulismailca)
