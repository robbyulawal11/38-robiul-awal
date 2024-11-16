# Mafaza Staff - Therapy patient booking management website at the sports injury therapy clinic specifically for admins and therapists

## About Mafaza Staff

Therapy patient booking management website at the sports injury therapy clinic specifically for admins and therapists. As an admin, this website will function for bookkeeping, recording and managing therapy patient lists, therapist lists, clinic income and clinic statistics. Admin can perform CRUD on patient and therapist data. As a therapist, this website will function for therapist schedule management in treating patients. The therapist can see, accept, or reject the patient's treatment schedule and can get notification of the treatment schedule.

---

## System Requirements
Before getting started, ensure your system meets the following requirements:
- PHP >= 8.0
- Composer >= 2.0
- Laravel >= 9.0
- Node.js >= 16.0 and NPM
- MySQL Database
- Local server XAMPP

---

## Installation and Setup Guide

### 1. Clone the Repository
Run the following command in your terminal:
```bash
git clone https://github.com/robbyulawal11/mafaza-staff.git
cd mafaza-staff
```

### 2. Install Dependencies
Install all PHP and JavaScript dependencies:
```bash
composer install
npm install
```

### 3. Configure Environment
Create a `.env` file by copying the `.env.example` file:
```bash
cp .env.example .env
```
Update the `.env` file with your database configuration:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

### 4. Generate Application Key
Run the following command:
```bash
php artisan key:generate
```

### 5. Migrate and Seed Database
Run the migrations and optionally seed the database:
```bash
php artisan migrate --seed
```

### 6. Build Frontend Assets
Compile the JavaScript and CSS files:
```bash
npm run dev
```
For production:
```bash
npm run build
```

### 7. Run the Application
Start the Laravel development server:
```bash
php artisan serve
```

---

## Contribution
We welcome contributions! Please feel free to submit a **Pull Request** or open an **Issue** if you find any bugs or have ideas for improvement.

---

## License
This project is licensed under the [MIT License](https://opensource.org/licenses/MIT). See the LICENSE file for more details.
