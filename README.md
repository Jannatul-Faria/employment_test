### Task are completed
### Instruction


#### Project Setup Instructions:
1. **Clone the Repository**
   ```bash
   git clone https://github.com/Jannatul-Faria/example.git
   cd example
   ```

2. **Install Dependencies**
   Run the following command to install PHP and JavaScript dependencies:
   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Configure Environment Variables**
   Create a `.env` file by copying `.env.example`, and configure the database and other environment variables:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

   Update the following lines in the `.env` file with your database connection details:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=internship_task
   DB_USERNAME=root
   DB_PASSWORD=your-password
   ```

4. **Run Migrations and Seeders**
   Run the database migrations and seeders to set up the database schema and any initial data.
   ```bash
   php artisan migrate --seed
   ```

5. **Serve the Application**
   Run the application locally:
   ```bash
   php artisan serve
   ```

6. **Access the Application**
   Open a web browser and go to `http://127.0.0.1:8000` to access the PawFinder application.

#### Task and Issues:
### Task 1:
Upload user profile picture using by jquery ajax request system.

### Task 2:
Create product with multiple features and single image. must be use Has-Many Relation product and features.






