# Blood Bank Management System

A web-based blood bank management platform built with PHP, allowing administrators to manage blood donors and recipients, and enabling users to search for available blood and register as donors or recipients.

## What This Is

This project is a full-stack blood bank management system designed to streamline blood donation operations. It provides separate interfaces for admins (to manage donors, recipients, and inventory) and users (to register, donate blood, request blood, and view announcements). The system maintains a centralized database of blood availability and helps connect donors with recipients efficiently.

### Stack
- **Framework / runtime:** PHP (server-side), vanilla HTML/CSS/JavaScript (client-side)
- **Database:** MySQL
- **Notable libraries:** Font Awesome icons, HTML5 forms, session-based authentication

## How It's Organized

```
Blood_bank_management_system/
├── Database/
│   └── BLOOD_SQL.sql          SQL schema with sample data (ADMIN, USERS, DONOR, RECIPIENT, ANNOUNCEMENT tables)
├── admin/                      Admin dashboard and management features
│   ├── admindashboard.php      Admin homepage with navigation
│   ├── adminlogin.php          Admin authentication
│   ├── adddonor.php            Form to add new donors
│   ├── bloodavail.php          View blood inventory by type
│   ├── recpavail.php           View recipient details
│   ├── announc.php             Post announcements (e.g., blood drives)
│   ├── deldonrecp.php          Delete donor/recipient records
│   ├── logout.php              Session cleanup
│   ├── dbcon.php               MySQL connection (localhost, root, no password)
│   └── *.css files             Styling for admin pages
├── user/                       User-facing functionality
│   ├── usrlogin.php            User login page
│   ├── signup.php              User registration
│   ├── userdashboard.php       User homepage after login
│   ├── donateblood.php         Form to register blood donation
│   ├── availblood.php          Search available blood by type
│   ├── search.php              Search blood recipients or announcements
│   ├── viewannoun.php          View active blood drive announcements
│   ├── logout.php              Session cleanup
│   ├── dbcon.php               MySQL connection
│   └── *.css files             Styling for user pages
├── index.php                   Landing/home page
├── aboutus.php                 About the system
├── contactus.php               Contact information
├── index.jpg, admin.jpg        Background images
├── logo.png                    Logo asset
└── *.css files                 Global styles
```

## How to Run It

### Prerequisites
- PHP (5.6+)
- MySQL server
- Web server (Apache, Nginx, or PHP's built-in server)
- Browser

### Setup Steps

1. **Clone the repository:**
   ```bash
   git clone https://github.com/tinabenita/Blood_bank_management_system.git
   cd Blood_bank_management_system
   ```

2. **Set up the database:**
   - Open MySQL and create the database:
     ```sql
     CREATE DATABASE blood_sql;
     USE blood_sql;
     ```
   - Import the schema and sample data:
     ```bash
     mysql -u root blood_sql < Database/BLOOD_SQL.sql
     ```

3. **Update database credentials:**
   - Edit `admin/dbcon.php` and `user/dbcon.php` if your MySQL user/password is different:
     ```php
     $con = new mysqli("localhost", "your_user", "your_password", "blood_sql");
     ```

4. **Run the application:**
   - Using PHP built-in server:
     ```bash
     php -S localhost:8000
     ```
   - Or place files in your web server's root directory (e.g., `/var/www/html/`)

5. **Access the application:**
   - Open your browser and navigate to `http://localhost:8000`

### Default Credentials

**Admin Login:**
- Username: `fmullers`
- Password: `54xya`

**Sample User (Donor):**
- Username: `jake_456`
- Password: `654effg`

**Sample User (Recipient):**
- Username: `sebs_012`
- Password: `34pqt`

## Features

### Admin Features
- Add new donors to the system
- View blood inventory by blood type
- View all donor and recipient details
- Delete donor/recipient records
- Post announcements for blood drives or campaigns
- Manage blood availability
- Dashboard with system overview

### User Features
- Register as a donor or recipient
- Log in securely
- Donate blood and record quantity
- Search available blood by type
- View blood drive announcements
- View announcements and event details
- Update profile information
