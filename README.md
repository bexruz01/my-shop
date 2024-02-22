
Instructions: How to Run?
After you finish downloading the project, unzip the project file.
Open the project folder, check for the env file, and update the database credentials.
Create a MySQL database with the name provided inside the env file.
Then, open the project in the Terminal or Command Prompt.
Install the composer dependencies: composer install
For the database, you can either import the given SQL file or start a new one following the command lines.
Now migrate the tables: php artisan migrate
Run seeder: php artisan db:seed
Then generate the key: php artisan key:generate
And finally, run the project: php artisan serve
It will start the application and give you a URL.
At last, open the URL in your favorite browser; we recommend using Google Chrome.
All the login details are provided inside the project folder[text files], check that out and enter them to use it.
