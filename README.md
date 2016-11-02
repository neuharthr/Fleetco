#Features
* Fueling Record Maintenance
* Repair Record Maintenance
* Maintenance Record Maintenance
* Inventory Module
* Accident Reporting
* Fuel Efficiency Reports
* Vehicle Expense Reports

##System requirements:
* Web Hosting (XAMPP/WAMP can also be used)
* PHP 4.2
* MySQL Database
* GPLv3 license


##How to install
1. Unzip the file
2. Upload the file to the hosting root ot folder 
3. Create a MySQL database using phpmyadmin or otherwise
3. In the unzip folder, locate the SQL dump file called mysql-dump-with dummy-data.sql.
4. Import this SQL dump to the database created (This database contains some sample data which you can delete later)
5. Enter the database connectivity details as follows:

Find "ConnectionManager.php" in connections folder and on line 254-258 find below block of code:

		$data["connInfo"][0] = "database_host_name";
		$data["connInfo"][1] = "database_user_name";
		$data["connInfo"][2] = "database_user_password";
		$data["connInfo"][3] = "database_port_number";
		$data["connInfo"][4] = "database_name";

Update your database connectivity details above

6. Then visit the url and the login screen should appear
7. Use following admin logins:

Username: Admin
Password: AdminF123

Once you log in, go to Admin Area. You can create any no of users with various user rights to different tables.

Originally created by Vishan Fernando.

