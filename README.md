# PHP Basic Calculator

## Overview
A simple calculator built using PHP and HTML. The project allows users to perform basic arithmetic operations by entering two numbers and selecting an operation.

This project is part of my PHP learning journey, helping me understand how HTML forms interact with PHP to process user input and perform calculations.

## Features
- Addition (+)
- Subtraction (-)
- Multiplication (*)
- Division (/)
- User input through HTML forms
- Handles division by zero

## Technologies Used
- **PHP** – Handles calculations and processes form data.
- **HTML5** – Creates the calculator interface and input fields.

## How It Works
1. The user enters two numbers into the input fields.
2. The user selects an arithmetic operation.
3. The HTML form submits the values to `calculator.php` using the GET method.
4. PHP retrieves the submitted values using `$_GET`.
5. A switch statement determines the selected operation.
6. The result is calculated and displayed to the user.

## How to Run the Project

1. Install PHP on your computer.
2. Clone this repository:

   ```bash
   git clone https://github.com/Imani-hub-pixel/PHP-Calculator.git
   ```

3. Navigate to the project directory.
4. Start the PHP development server:

   ```bash
   php -S localhost:8000
   ```

5. Open your browser and visit:

   `http://localhost:8000`

## Learning Objectives
Through this project, I am practising:
- Creating and handling HTML forms.
- Understanding GET requests.
- Retrieving form data using PHP superglobals.
- Using conditional statements and switch cases.
- Performing arithmetic operations in PHP.

## Future Improvements
- Implement a calculator-style numeric keypad.
- Improve the user interface with CSS.
- Add JavaScript for interactive button functionality.
- Display results on the same page without unnecessary navigation.

## Author
**Faith Chepngeno**

GitHub: [Imani-hub-pixel](https://github.com/Imani-hub-pixel)
