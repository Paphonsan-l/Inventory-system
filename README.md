# 📦 Smart Inventory Management System

![Docker](https://img.shields.io/badge/Docker-Enabled-blue)
![PHP Version](https://img.shields.io/badge/PHP-8.2-777BB4)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1)

A full-stack web application for managing product inventory. Built to demonstrate proficiency in **Modern PHP**, **RESTful API architecture**, and **Containerization** using Docker.


---

## 📸 Screenshots

![Dashboard Screenshot](https://placehold.co/1000x500/png?text=Dashboard+Preview)

---

## 🛠️ Tech Stack

This project uses a modern, lightweight technology stack:

* **Frontend:**
    * HTML5 & Vanilla JavaScript (ES6+)
    * **Tailwind CSS** (for responsive UI)
    * Fetch API (Asynchronous Data Handling)
* **Backend:**
    * **PHP 8.2** (PDO connection, OOP style)
    * RESTful API Implementation
* **Database:**
    * **MySQL 8.0** (Local Development)
    * **TiDB Cloud** (Production Database)
* **DevOps & Tools:**
    * **Docker & Docker Compose** (Containerization)
    * Git & GitHub (Version Control)
    * **Vercel** (Serverless Deployment)

---

## ✨ Features

* **CRUD Operations:** Create, Read products via API.
* **Single Page Application (SPA) feel:** Add products using a Modal without page refresh.
* **REST API:** Backend serves JSON data separate from the frontend.
* **Responsive Design:** Works seamlessly on desktop and mobile.
* **Containerized Environment:** Fully reproducible development environment using Docker.

---

## 📂 Project Structure

```bash
inventory-app/
├── src/
│   ├── api/            # Backend Logic (API Endpoints)
│   │   ├── products.php
│   │   └── create_product.php
│   ├── config/         # Database Configuration
│   │   └── db.php
│   └── index.html      # Frontend Interface
├── docker-compose.yml  # Docker Orchestration
├── Dockerfile          # PHP Environment Setup
└── vercel.json         # Vercel Deployment Config
