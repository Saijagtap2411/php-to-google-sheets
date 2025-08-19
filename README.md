# php-to-google-sheets

A simple PHP project to send HTML form data directly into a Google Sheet using the Google Sheets API.

## Description

This project lets you capture form submissions via a basic HTML form (`secure_1736585form.html`) and forward the data into a Google Sheet using PHP (`secure_store.php`). Optionally, `index.php` can serve as the main entry point or loader.

---

## Prerequisites

- PHP installed (preferably PHP 7 or higher)
- Composer (for dependency management), if using the Google PHP Client library
- A Google Cloud project with the **Google Sheets API enabled**
- A Service Account with credentials (JSON key file)
- Sharing permissions: your Google Sheet must be shared with the service account’s `client_email` with **Editor** rights

---

## Setup & Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/Saijagtap2411/php-to-google-sheets.git
   cd php-to-google-sheets
