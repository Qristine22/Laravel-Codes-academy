## Document Content

## Title

AOJ.am - Accessible Web Solutions for the Academy of Justice


## Table of Contents

1. Project Overview
2. Technologies Used
3. Installation
4. Contributing
5. License
6. Contact Information
7. Acknowledgements
8. Additional Resources


1. Project Overview

The AOJ.am project aims to enhance the accessibility features of the Republic of Armenia Justice Academy website. The project focuses on ensuring compliance with WCAG 2.1 AA standards to provide a more inclusive and accessible experience for all users.

Key Features:
- Button customization and contrast adjustments
- Text font size changing
- Dark and light modes
- Keyboard navigation
- Compliance with WCAG 2.1 standards

Purpose and Goals:
The goal of this project is to make the AOJ.am website fully accessible to users with disabilities, ensuring that all interactive elements are usable via keyboard navigation and that the site meets international accessibility standards.

2. Technologies Used

- HTML5
- CSS3
- JavaScript
- PHP 8.1
- Laravel 8
- MySQL 8.0
- Git for version control

3. Installation

Prerequisites:
- PHP (version 8.1)
- Composer (version 2.6.6)
- Git

Steps:
1. Clone the repository:
   ```
   git clone https://github.com/Qristine22/Laravel-Codes-academy.git
   ```

2. Navigate to the project directory:
   ```
   cd Laravel-Codes-academy
   ```

3. Create a file for your environment variables:
   ```
   cp .env.example .env
   ```
   make sure you have configured your local environment,

4. Install dependencies:
   ```
   composer install
   ```

5. Run migrations:
   ```
   php artisan migrate:fresh --seed
   ```

6. Create symbolic link for storage:
   ```
   php artisan storage:link
   ```
   
To start the development server:

   ```
   php artisan serve
   ```

The application will be available at http://127.0.0.1:8000/.

4. Contributing

We welcome contributions! Please read our Contributing Guidelines for more information.

Code of Conduct:
Please adhere to our Code of Conduct in all interactions.

5. License

This project is licensed under the MIT License.


6. Contact Information

For any inquiries, please contact:
- Artashes Khurshudyan: artashes.khurshudyan@justiceacademy.am, +37477484009
- Kristina Karapetyan: kristinkarapetian@gmail.com, +37433969964


7. Acknowledgements

We would like to thank all contributors and the Academy of Justice IT team for their support and collaboration.


8. Additional Resources

- WCAG 2.1 Guidelines: https://www.w3.org/WAI/WCAG21/quickref/
- Laravel Documentation: https://laravel.com/docs/8.x
