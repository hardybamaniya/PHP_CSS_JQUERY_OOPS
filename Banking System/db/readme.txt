:::Your Banking System ::: 

1) Edit the "db_connect.php" with the user and password for your mysql database.
2) Create database base on create_db.txt or you can just import Script bank.sql to your MySQL Database Server.
3) Lunch http://localhost/banking/main.php to begin.

p/s: You can set as many acct no. value in acct_no table. But make sure you put "no" for column 'used' value. If all the 
acct no. is already being used (column used in table acct_no state 'yes') the system will produce an error message when 
you try to register a new user. =)