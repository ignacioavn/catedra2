# Catedra 2

"This project centers on the development of an API using Laravel for the backend and Angular for the frontend. It involves the modified version of Practice 1 as a template, wherein user data will be populated on the frontend interface."


## Frameworks used

- Backend: Laravel 10.10
- Frontend: Angular 16.2.8
- Database: XAMPP

## Requirements

 - Install [Composer](https://getcomposer.org/download/)
 - Install [PHP](https://www.php.net/manual/es/install.php)
 - Install [Node.js](https://nodejs.org/en)
 - Install [Angular CLI](https://angular.io/guide/setup-local)
 - Install [XAMPP](https://www.apachefriends.org/es/download.html)


## Project Setup

1. Clone the repository.

```bash
git clone https://github.com/ignacioavn/catedra2-no-images.git
```

2. Open the project in your code editor.

### Backend Setup

1. Open the terminal and navigate to the backend directory.

```bash
cd backend
```
2. Install Composer dependencies.

```bash
composer install
```

3. Copy the configuration file.

```bash
cp .env.example .env
```

4. Generate the application key

```bash
php artisan key:generate
```

5. Configure the database in the `.env` file with your information.

6. Run migrations and seeders

```bash
php artisan migrate
php artisan db:seed
```

7. Start the backend server

```bash
php artisan serve
```

The backend will run at http://localhost:8000.

### Database Setup

1. Start XAMPP and make sure Apache and MySQL are running.

2. Open phpMyAdmin at http://localhost/phpmyadmin.

3. Create a new database and set up the information in the backend's `.env` file.



### Frontend Setup

1. Open the terminal and navigate to the frontend directory.

```bash
cd frontend
```

2. Install Node.js dependencies.

```bash
npm install
```

3. Start the frontend server

```bash
ng serve
```

The frontend will run at http://localhost:4200/products.
## Authors

- [@ignacioavn](https://www.github.com/ignacioavn)

