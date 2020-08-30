## ZENDESK Evaluation Project

This serves as documentantion on how to use this project for testing the viability of its code.
After cloning the repository you are to do the following in order to set it up.
###
Change your present working directory to that of the project.
<br/>
`cd zentest`
<br />
<br />
Install all laravel dependencies.
<br />
`composer install`
<br />
<br />
[Optional] Install all node dependencies.
<br />
`npm install`
<br />
<br />
Copy the example structure of the environment file and fill in the relevant configuration for your workstation.
<br />
`cp .env.example .env`
<br />
<br />
Generate Laravel APP_KEY.
<br />
`php artisan key:generate`
<br />
<br />
Create a database called zentest in mysql.
<br />
`create database zentest`
<br />
<br />
Run database migrations.
<br />
`php artisan migrate`
<br />
<br />
Set the value of the JVZIPN_SECRET_KEY in the .env file to a secure string of your own choosing or use the command below to let our app generate it for you.
<br />
`php artisan jvzipn_secret_key:generate`
<br />
<br />
Start up the application.
<br />
`php artisan serve`
<br />
<br />
Copy the generated JVZIPN_SECRET_KEY value and add it to jvzoo dashboard.
<br>
<br>
Depending on where the application ends up being hosted add the following to jvzoo dashboard where it needs the Instant Notification URL
<br>
`http://www.yourdomain.com/api/JVZIPN/handler`

