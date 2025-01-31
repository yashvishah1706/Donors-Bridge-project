# Donors Bridge Project

## Overview

The **Donors Bridge Project** is a web-based platform designed to connect blood donors with recipients in need. The application facilitates efficient matching, provides information on blood donation, and offers resources such as emergency contacts and pre-booking for donations.

## Features

- **Donor Registration**: Allows individuals to register as blood donors.
- **Find a Donor**: Enables users to search for available donors based on blood type and location.
- **Emergency Contacts**: Provides a list of emergency contacts and ambulance services.
- **Pre-Booking**: Allows users to schedule blood donation appointments in advance.
- **Informational Resources**: Offers information on blood donation eligibility and benefits.

## Project Structure

The repository is organized as follows:

- `index.html`: The main landing page of the website.
- `aboutus.html`: Information about the organization.
- `ambulance.html`: Lists ambulance services and emergency contacts.
- `canyoudonate.html`: Details eligibility criteria for blood donation.
- `contact.php`: Handles form submissions from the contact page.
- `contacts.php`: Displays contact information.
- `database.php`: Manages database connections.
- `delete.php`: Handles deletion of records.
- `emergency.html`: Provides emergency-related information.
- `fetch.php`: Retrieves data from the database.
- `finddonor.php`: Search functionality to locate donors.
- `helpdesk.html`: User support and help resources.
- `insert.php`: Inserts data into the database.
- `loginprocess.php`: Processes user login requests.
- `newsletter.php`: Manages newsletter subscriptions.
- `prebook.html`: Form for scheduling donation appointments.
- `prebook.php`: Processes pre-booking requests.
- `process.php`: General processing script.
- `registration.php`: User registration form.
- `signupsuccess.php`: Confirmation page after successful signup.
- `style.css`: Stylesheet for the website's design.
- `update.php`: Handles updates to user information.
- `whydonateblood.html`: Explains the importance and benefits of blood donation.
- `A002,A006,A024_WT MINI PROJECT DOCUMENTATION.docx`: Project documentation.
- `projectpdf.pdf`: PDF version of the project documentation.
- `header-background.png`: Image asset used in the website's header.

## Getting Started

### Prerequisites

To run this project locally, you need:

- A web browser (e.g., Google Chrome, Mozilla Firefox).
- A local server environment capable of running PHP scripts, such as [XAMPP](https://www.apachefriends.org/index.html) or [WAMP](http://www.wampserver.com/en/).

### Installation

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/yashvishah1706/Donors-Bridge-project.git
   cd Donors-Bridge-project
Set Up the Local Server:

Install and configure XAMPP or WAMP.
Place the cloned repository in the server's root directory (e.g., htdocs for XAMPP).
Start the Server:

Launch the local server and ensure Apache and MySQL services are running.
Configure the Database:

Open phpMyAdmin (usually accessible at http://localhost/phpmyadmin/).
Create a new database (e.g., donors_bridge).
Import the provided SQL file (database.sql) to set up the necessary tables and data.
Access the Website:

Open your web browser and navigate to http://localhost/Donors-Bridge-project/index.html.
Usage
Register as a Donor: Navigate to the registration page and fill out the form to become a registered donor.
Find a Donor: Use the search functionality to locate donors based on specific criteria.
Pre-Book a Donation: Schedule a future donation appointment through the pre-booking form.
Access Resources: Explore informational pages to learn more about blood donation and related services.
Contributing
We welcome contributions to enhance the Donors Bridge Project. To contribute:

Fork the repository.
Create a new branch:
bash
git checkout -b feature/YourFeatureName
Make your changes and commit them:
bash
git commit -m 'Add your feature'
Push to the branch:
bash
git push origin feature/YourFeatureName
Open a Pull Request detailing your changes.
