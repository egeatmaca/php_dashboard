# A Dashboard Template with PHP & Charts.js 

## Getting Started
- Clone the repository
- Setup for MySQL connection:
    - Add your database credentials to `config.json`.
    - If not enabled, enable the mysqli extension in your `php.ini` file.
- Setup for AWS S3 connection:
    - Setup AWS credentials in `~/.aws/credentials`
    - Run `composer install`

- Run `php -S localhost:8000`
- Open `http://localhost:8000/dashboard.php` in your browser

## Getting Started with Docker
- Clone the repository
- For MySQL connection, put your database credentials in `config.json`.
- For AWS S3 connection, put your AWS credentials in `docker-compose.yml`.
- Run `docker-compose up`
- Open `http://localhost:8000/dashboard.php` in your browser

## Data Source
- There is some hard-coded data in `dashboard.php`. This is just for demo purposes. 
- You can connect to your actual data source using `services/db.php` or `services/s3.php`.
