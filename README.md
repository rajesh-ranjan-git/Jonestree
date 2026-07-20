# Jonestree

Welcome to Jonestree! This is a static business landing page built with HTML, CSS, and Bootstrap for a forestry/tree work services company, including a working PHP contact form.

## Live URL : https://jonestree.netlify.app

```bash
https://jonestree.netlify.app
```

## Table of Contents

- [Project Overview](#project-overview)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Folder Structure](#folder-structure)
- [Installation Guide](#installation-guide)
- [Usage Instructions](#usage-instructions)
- [Author](#author)

## Project Overview

Jonestree is a static marketing landing page for a forestry/tree work company, with a PHP-based handler for processing contact form submissions.

## Features

- **Business Landing Layout:** Header, services, and information sections.
- **Contact Form Backend:** `action.php` handles contact form submissions server-side.
- **Bootstrap Components:** Responsive grid and UI components from Bootstrap.
- **Icon Support:** Font Awesome icons used throughout the page.

## Tech Stack

- **Frontend:** HTML5, CSS3, Bootstrap
- **Backend:** PHP (contact form processing)
- **Icons:** Font Awesome

## Folder Structure

```bash
Jonestree/
├── css/              # Stylesheets (Bootstrap + custom)
├── font-awesome/      # Font Awesome icon library
├── fonts/             # Custom web fonts
├── js/                # JavaScript used by Bootstrap/UI components
├── media/             # Media assets used across the page
├── index.html         # Main landing page markup
├── action.php          # PHP handler for the contact form
├── script.js           # Page-level JavaScript
└── style.css          # Custom page styling
```

## Installation Guide

### Prerequisites

- A modern web browser
- A PHP-capable local server (e.g. PHP's built-in server) to exercise the contact form

### Steps

1. Clone the repository:

   ```bash
   git clone https://github.com/rajesh-ranjan-git/Jonestree.git
   cd Jonestree
   ```

2. To just view the page, open `index.html` directly in your browser.

3. To test the contact form, serve the folder with PHP's built-in server:

   ```bash
   php -S localhost:8000
   ```

## Usage Instructions

1. Open the page in your browser to view the landing page.
2. Submit the contact form to trigger the PHP mail handler.

## Author

- **Rajesh Ranjan** — [GitHub @rajesh-ranjan-git](https://github.com/rajesh-ranjan-git)

---
