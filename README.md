Students i.e USERS can post questions/Queries, Reply to Each Others questions. They can also personally messages each other. Also there is a Teacher, who can monitor the question threads and delete all unwanted and undesirable queries, can create new topic threads , reply to the queries. Further there is a admin , who can create/delete topics thread, subtopic threads, Approve a user as faculty, delete an user account, unwanted questions and manages database.  

NOTICE :: ALL THE PROCESS NEED ACTIVE INTERNET CONNECTION

You’ll need XAMPP Server (Version 5.6)
(note : Dont use version above 5.6, otherwise database won't connect, we are using some modules of 5.6 , which were taken off in higher Versions)
Lets first download XAMP from "https://xampp.site" and set it up.
It will install Apache, Maria DB(MySQL), PHP, Perl.
Next set up phpmyadmin , check whether phpMyAdmin is connected or not, by going to https://localhost/phpmyadmin ,Webpage should open for your localhost, if it show some error, connect it properly. 
(note : If error does not go , You can also try stopping "MySQL Database" and "APACHE Web Server" from XAMPP control panel of your System{in "Manage Servers" option} and start them again.)
Put the code_folder inside “c:/opt/xampp/htdocs/” or “c:/opt/lampp/htdocs/”. 
Go To “localhost/phpmyadmin” in any browser and create Database with name "tech-forum".
In that Database, Import the SQL file given in "Database" folder of Code.
Next  go to URL: “http://localhost/Discussion-Forum”
Website should run.

Some Credentials to login to website:

Administrator : Username : admin
                Password : admin

Faculty : Username : Rock
          Password : qwerty

Student : Username : Vikas
	  password : vikas

However you can register as a Student and login through that account also.
For Faculty, you can register as a Teacher, but first need to open admin account and verify that User as Faculty.
 
An Video is also attached named "Demonstration of project", You can check from there how to run project, after installing XAMPP.  :- https://drive.google.com/file/d/1coJLHJXSFuaBS5kZX-mUr6JaXB6_Fnkg/view?usp=sharing
