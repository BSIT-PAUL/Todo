# Laravel Todo App


## Requirements
- PHP 8.0 or higher
- Composer
- Node.js and npm
- MySQL (or your preferred database)

---

## Installation

### 1. Clone the Repository
```bash
git clone https://github.com/BSIT-PAUL/Todo.git
cd Todo
```

### 2. Install Dependencies
Run the following commands to install Laravel and frontend dependencies:
```bash
composer install
npm install
```

### 3. Set Up the Environment
Copy the `.env.example` file to `.env`:
```bash
cp .env.example .env
```
Generate the application key:
```bash
php artisan key:generate
```

Update the `.env` file with your database credentials:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

### 4. Run Migrations
Set up the database tables by running:
```bash
php artisan migrate
```

### 5. Build Frontend Assets
Compile Tailwind CSS and other assets using:
```bash
npm run dev
```


## Running the Application

### Start the Local Development Server
Run the following command:
```bash
php artisan serve
```

Visit the application at: [http://localhost:8000](http://localhost:8000)

---

## Usage

1. Open the app in your browser.
2. Add tasks by entering a name and clicking "Add Todo."
3. Edit tasks using the "Edit" button.
4. Delete tasks using the "Delete" button.

---

## Styling and Icons

- **Tailwind CSS**: Provides utility-first styling.
- **Font Awesome**: Adds icons for better UX. Included via CDN.

