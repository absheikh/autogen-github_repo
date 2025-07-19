# Simple PHP Login and Signup System

This is a simple HTML/PHP login and signup system with session management.

## Features

- User registration with validation
- User login with password verification
- Session management
- Basic dashboard after login
- Responsive design
- Password hashing for security

## Files Structure

- `index.html` - Main page with login/signup forms
- `login.php` - Handles login processing
- `signup.php` - Handles registration processing
- `dashboard.php` - User dashboard after successful login
- `logout.php` - Handles user logout
- `styles.css` - CSS styling for all pages
- `database.sql` - SQL script to create the database

## Setup Instructions

1. **Database Setup:**
   - Import the `database.sql` file into your MySQL database
   - Update the database connection details in `login.php` and `signup.php`:
     - `$host` - Database host (default: localhost)
     - `$dbname` - Database name (default: user_auth)
     - `$username` - Database username (default: root)
     - `$password` - Database password (default: empty)

2. **Web Server Setup:**
   - Place all files in your web server directory (e.g., htdocs for XAMPP)
   - Ensure PHP and MySQL are running
   - Access the application through your web browser

## Security Features

- Password hashing using PHP's `password_hash()` and `password_verify()`
- SQL injection protection using prepared statements
- Input validation and sanitization
- Session management for user authentication
- CSRF protection considerations

## Usage

1. Open `index.html` in your web browser
2. Click "Sign up here" to create a new account
3. Fill in the registration form and submit
4. After successful registration, login with your credentials
5. You'll be redirected to the dashboard upon successful login
6. Use the logout button to end your session

## Requirements

- PHP 7.0 or higher
- MySQL 5.6 or higher
- Web server (Apache/Nginx)

## Note

This is a basic implementation for educational purposes. For production use, consider adding:
- Email verification
- Password reset functionality
- Rate limiting for login attempts
- HTTPS enforcement
- More robust error handling
- Input validation improvements
- CSRF tokens

Updated on 2025-07-19 11:45:22.244810 UTC

Updated on 2025-07-19 11:45:48.092676 UTC

Updated on 2025-07-19 11:48:15.423570 UTC
