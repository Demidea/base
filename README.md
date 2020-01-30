# base
 Creating a base for developing multilingual single page web apps=>
 
 This is my first public project, so I am looking for feedback! Please, feel free to tell me whatever you want. I have some doubts about how to make this web visible, especially because of the sql file. Favicon is not showing neither... And I don't really know if this is the right way to publish a public repository... Anyway... please help!

 Step 1: Define variables for the theme in _root.css

 Step 2: Create database (we are calling it 'base' and can find it in 'mysql' folder).

 Step 3: Check table 'lang' and add the languages that you are using.

Step 4: Check table 'text(x)', where (x) is the id from the language that you are using, according to previous table 'lang'. You will need as many tables as different languages you are going to use. In this table you will add every text on the website in that particular language.

To add a new language, duplicate this table and change 'text' field in every record accordingly. Don't forget to add any new languages to 'lang' table and use the right 'text(x)' number!
 
Step 5: We are populating 'lang' table with 2 different languages:

    So 'text1' table would be English text and 'text2' Spanish text.

    Then, we will define our items menu on 'text(x)' tables, in these 2 different languages. Fields 'class' and 'link' would be the same for all languages, so the only real difference between tables will be on 'text' field. 

Step 6: Check 'config.php' file for connecting to the database. We will use this parameters, adjust it to yours:

 	$host = 'localhost';
	$db   = 'base';
	$user = 'root';
	$pass = '1234';

