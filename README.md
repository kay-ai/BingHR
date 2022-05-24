## BingHR Take home Assignment

## Requirements
<i> Please Ensure you have the following before you run this project </i>

- PHP 8.0.2 or higher
- Composer installed (You can download from here: https://getcomposer.org/download/)
- Local server (Wampp or Xampp for Windows, MAMP for MacOS) <br>
This will be for your database.

## Installation Steps

<i> Below are Steps to run this project </i>

* Clone the Repository 
<code> git clone https://gitHub.com/kay-ai/BingHR.git </code>
* Navigate to the created directory and open with your favourite browser
* Run <code> composer install </code>
* Run <code> copy .env.example .env </code>
* Start your local server and create a database
* Edit .env file, <br> Replace DB_DATABASE & DB_USERNAME with the new database credentials created above
* Run <code> php artisan migrate </code>
* Run <code> php artisan db:seed </code>
* Run <code> php artisan serve </code>
* You are now all set
