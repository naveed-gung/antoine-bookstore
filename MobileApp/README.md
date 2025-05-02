# Antoine Bookstore Mobile Application

This is a jQuery Mobile application for Antoine Bookstore, created as per the requirements of Homework II.

## Application Structure

The application consists of 5 main pages:
1. **index.html** - Splash screen that redirects to main.html after 3 seconds
2. **main.html** - Main navigation page with links to Books, Contact, and About pages
3. **books.html** - Displays books from the SQLite database
4. **contact.html** - Contact form with validation
5. **About** - Internal dialog page with information about the application

## Folder Structure

- **MobileApp/** - Main application folder
  - **images/** - Contains all image files
  - **others/** - Contains other files like process.php

## Database

The application uses WebSQL (SQLite) to store book information. The database is automatically created when the application starts.

## How to Run

1. Place all the files in a web server that supports PHP (for the contact form submission).
2. Open index.html in a mobile browser or use a mobile emulator.
3. The application will start with the splash screen and then automatically navigate to the main page.

## Image Files

The following image files are required:
- books.png - Used in the splash screen
- book.png - Used as the background in the main page
- about.png - Used in the About dialog
- Book cover images:
  - Visual Basic for Beginners.png
  - MS Office 2016 for Dummies.png
  - C++ reference.png
  - PHP 5.png

## Notes

- The application uses jQuery Mobile 1.4.5 for the UI components.
- Form validation is implemented using JavaScript for client-side validation and PHP for server-side validation.
- The SQLite database is created and populated with book data when the application starts. 