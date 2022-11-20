# A Dashboard Template with PHP & Vanilla JS 

## Getting Started
### with Docker
- Clone the repository
- For MySQL connection, put your database credentials in `config.json`.
- For AWS S3 connection, put your AWS credentials in `docker-compose.yml`.
- Run `docker-compose up`
- Open `http://localhost:8000/` in your browser
### with Manual Setup
- Clone the repository
- Setup for MySQL connection:
    - Add your database credentials to `config.json`.
    - If not enabled, enable the mysqli extension in your `php.ini` file.
- Setup for AWS S3 connection:
    - Setup AWS credentials in `~/.aws/credentials`
    - Run `composer install`

- Run `php -S localhost:8000`
- Open `http://localhost:8000/` in your browser

## Data Source
- There is some hard-coded data in `./app/Modules/Dashboard/Dashboard.php`. This is just for demo purposes. 
- You can connect to your actual data source using `MySQLConnection.php` or `S3Connection.php` in `./app/Modules/DataConnection`.
