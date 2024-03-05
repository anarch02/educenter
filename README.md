

## Education center CRM

### Description
This is a CRM (Customer Relationship Management) system for an education center. It helps manage student information, course enrollment, and other administrative tasks.

### Installation

1. Clone the Laravel project repository to your local machine.
2. Navigate to the project directory using the command line.
3. Run the following command to install the project dependencies:
    ```shell
    composer install
    ```

### Configuration

1. Rename the `.env.example` file to `.env`.
2. Update the `.env` file with your database credentials.

### Database Setup

1. Create a new MySQL database for your Laravel project.
2. Update the `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` values in the `.env` file with your database details.

### Migration and Seeding

1. Run the following command to migrate the database tables:
    ```shell
    php artisan migrate
    ```

2. (Optional) If you have seeders, run the following command to seed the database with sample data:
    ```shell
    php artisan db:seed
    ```

### Execution

1. Start the Laravel development server by running the following command:
    ```shell
    php artisan serve
    ```

2. Open your web browser and navigate to `http://localhost:8000` to access your Laravel application.

### Additional Resources

For more information on Laravel, please refer to the official documentation: [https://laravel.com/docs](https://laravel.com/docs)


