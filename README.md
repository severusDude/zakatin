# Zakatin — Digital Zakat Management System

A full-stack web application designed for accurate calculation, collection tracking, and equitable distribution of Zakat, Infaq, and Shadaqah (ZIS).

[![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=flat-square&logo=laravel&logoColor=white)](https://laravel.com)
[![Livewire](https://img.shields.io/badge/Livewire-Reactive-FB70A9?style=flat-square&logo=livewire&logoColor=white)](https://livewire.laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=flat-square&logo=php&logoColor=white)](https://php.net)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=flat-square&logo=tailwindcss&logoColor=white)](https://tailwindcss.com)

---

## Overview

Zakatin modernizes zakat administration for organizations and religious councils. It features automated Nisab calculators for Zakat Mal and Zakat Fitrah alongside transparent distribution tracking across eligible beneficiaries (*asnaf*).

## Key Features

- **Automated Zakat Calculator**: Nisab thresholds based on real-time commodity pricing (gold/silver and staple foods).
- **Muzakki & Mustahik Registry**: Centralized management of donors (*muzakki*) and recipients (*mustahik*).
- **Livewire Reactive Interface**: Seamless single-page user experience without full page reloads.
- **Audit Reports**: Transparent ledger generation for accountable fund disbursement.

## Installation

```bash
# Clone repository
git clone https://github.com/severusDude/zakatin.git
cd zakatin

# Install backend dependencies
composer install

# Install frontend assets
npm install && npm run build

# Environment setup
cp .env.example .env
php artisan key:generate

# Database migration
php artisan migrate

# Serve application
php artisan serve
```

---

<sub>Collaborative Project • Maintained by @severusDude & Collaborators</sub>
