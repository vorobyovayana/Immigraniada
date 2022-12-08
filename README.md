## About Immigraniada

Immigraniada was developed as a course project for CSIS-3280-001 (Web Based Scripting) at Douglas College. The idea was to build a Web application that helps the user to find and fill in the required documents for study permit extension and work permit extension.

## Group Members

- Iana Vorobeva (300339350)
- Henrique Barros (300325470)

## Deployment Documentation and instructions

Immigraniada runs on Laravel and also uses Node packages for Authentication and templating. To be able to run it, the user must do the following steps/run the following commands on the terminal:
- 0: composer install
- 1: composer require laravel/ui
- 2: npm install
- 3: npm run build
- 4: Change the DB_DATABASE field on the .env file to DB_DATABASE=ImmigraniadaDB. The user is root and there is no password.
- 5: Run XAMPP Control Panel and start MySQL. 
- 6: php artisan migrate
- 7: Restore DB data with mysql -u root -p < DBbackup.sql
- 8: php artisan serve (to start Laravel server)
- 9: npm run dev (on a separate terminal)

After that, open your browser and run the application by typing localhost:8000 on the address bar. New users can register an e-mail and password to access the system and returning users may use their credentials, if previously registered.

To log in as administrator and be able to access the Admin Dashboard, use the user "admin@admin.com", with password "password".