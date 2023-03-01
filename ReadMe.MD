# Data Submission

PHP Form Submission to MySQL Database.
### Requirements Met
✅ Save 3 records into the database without duplicating the Id No. The ability to capture a duplicate Id No in the database table is an immediate fail. 

✅ If a duplicate Id No is found up on capturing, the user must be informed about this and the form repopulated. People do not like to input their information in twice.

✅ Validate the Id No field to make sure it is a number and that it is only 13 characters long. 

✅Validate the Date of birth field to make sure that the input date is in the format dd/mm/YYYY. 

✅ There must be a valid data in the name and surname fields and no characters that can cause a record not to be inputted into the database. 

## Installation

1. **Clone** the repository or download the zip file.
2. **Upload/Extract** the source to your server.(`XAMPP, WAMP, LAMP, MAMP, etc.`) 
   - If you are using XAMPP, copy the source to htdocs folder. `C:\xampp\htdocs`
   - If you are using WAMP, copy the source to www folder. `C:\wamp\www`
   - If you are using LAMP, copy the source to var/www/html folder.`C:\xampp\htdocs`
   - If you are using MAMP, copy the source to htdocs folder. ` /Applications/MAMP/htdocs/`
   - If you are using any other server, copy the source to the root folder.
     _(Assuming that the installer has already configured the server or a server)_

3. Create a database named "ProxServer" and import the PROJECT_DIR/`DB/ProxServer.sql` file to the database.

   `CREATE TABLE IF NOT EXISTS ...`
  - If you are using *AMP* Stack, you can import the sql file using phpmyadmin. (http://localhost/phpmyadmin)
  - In PHPStorm, you can import the sql file using the following steps.
    - Open the sql file in the editor.
    - Click on the database name in the editor.
    - Click on the "Import" button.
    - Click on the "Go" button.
    - Through command line, you can import the sql file using the following command.
      - `mysql -u root -p 1234 < ProxServer.sql`


 4. Open the `PROJECT_DIR/DB/DBConnection.php` file and change the database credentials.
    - `$host = "localhost";`
    - `$user = "root";`
    - `$password = "";`
    - `$database = "ProxServer";`
    - `$port = "3306";`
    - `$charset = "utf8mb4";`

5. Fire up your server and open the following url in your browser. `http://localhost/ProxServer/` or `http://localhost/ProxServer/index.php`

6. If you already have Mysql and PHP separately in your machine, you may type the following command in the terminal to run the php native server.
   - `php -S localhost:8000`
   - Open the following url in your browser. `http://localhost:8000/ProxServer/` or `http://localhost:8000/ProxServer/index.php`
   
## Usage
- Open the following url in your browser. `http://localhost/ProxServer/` or `http://localhost/ProxServer/index.php`
- Fill the form and click on the "Submit" button.
- The form data will be saved in the database.
- You can view the saved data in the database.