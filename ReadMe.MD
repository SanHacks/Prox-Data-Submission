# Data Submission

PHP Form Submission to MySQL Database.
<img width="1440" alt="Screenshot 2023-03-02 at 01 01 49" src="https://user-images.githubusercontent.com/13138647/222286631-8f26a5c2-999a-44a3-8e30-630516258020.png">

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
