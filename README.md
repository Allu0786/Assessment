# Rewards Redemption System

## Project Folder Structure

The project contains two separate folders on the D drive.

```text
D:\
│
├── taskapp/                 # Laravel Backend
│
└── taskapp-frontend/        # React Frontend
```

## Technologies Used

**Backend**
- PHP
- Laravel
- MySQL
- REST API

**Frontend**
- React.js
- JavaScript
- Tailwind CSS
- Axios

## 1. Backend Setup – Laravel

Open the terminal and navigate to the backend folder:

```bash
cd D:\taskapp
```

Install dependencies:

```bash
composer install
```

Configure your database in the `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=rewards_db
DB_USERNAME=root
DB_PASSWORD=
```

Generate application key:

```bash
php artisan key:generate
```

Run database migrations:

```bash
php artisan migrate
```

Run database seeders:

```bash
php artisan db:seed
```

Start Laravel server:

```bash
php artisan serve
```

Backend URL:

http://127.0.0.1:8000

## 2. Frontend Setup – React

Open a new terminal and navigate to the frontend folder:

```bash
cd D:\taskapp-frontend
```

Install dependencies:

```bash
npm install
```

Start React development server:

```bash
npm run dev
```

Frontend URL:

http://localhost:5173

Check your terminal for the actual Vite URL.

## 3. Database

Database Name: `rewards_db`

### Database Tables

| Table | Description |
|---|---|
| users | Customer information |
| profiles | Customer profile and status |
| categories | Product categories |
| products | Reward products |
| category_limits | Monthly redemption limits |
| redemptions | Redemption transactions |
| points_ledgers | Points earned and spent records |

## 4. Main Features

- Customer management
- Customer profile management
- Product category management
- Product management
- Customer points balance
- Points earning and spending history
- Product redemption
- Monthly category redemption limits
- Redemption reports
- Date and category filters
- Duplicate redemption prevention
- Transaction-safe points deduction

## 5. API Endpoints

| Method | Endpoint | Description |
|---|---|---|
| POST | `/api/redemptions` | Redeem a product |
| GET | `/api/users/{id}/balance` | Get customer balance |
| GET | `/api/reports/redemptions` | Get redemption reports |
| GET | `/api/products` | Get available products |

## 6. Future Enhancements

- Offline redemption and synchronization
- Partner store management
- Customer membership tiers
- Personalized rewards
- Admin analytics dashboard
- Redemption notifications

## 7. Running the Application

Start the backend in the first terminal:

```bash
cd D:\taskapp
php artisan serve
```

Start the frontend in the second terminal:

```bash
cd D:\taskapp-frontend
npm run dev
```

The Laravel backend and React frontend run independently and communicate through REST APIs.

## Conclusion

The Rewards Redemption System is developed using Laravel for backend services, React for the frontend interface, and MySQL for database management. It provides a structured solution for customer points management and product redemption.
