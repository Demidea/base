# base
 Creating a base for developing multilingual web apps.

 Step 1: Define variables for a theme in _root.css

 Step 2: Create database (we are calling it 'base')

 Step 3: Create table 'lang' and add the languages that you are using:

    CREATE TABLE `lang` (`id` int(3) NOT NULL AUTO_INCREMENT,
                         `lang` varchar(2) NOT NULL COMMENT 'ISO 2 Letter Language Code',
                        PRIMARY KEY (`id`) USING BTREE) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

Step 4: Create table 'text(x)', where (x) is the id from the language that you are using, according to previous table 'lang'. You will need as many tables as different languages you are going to use. In this table you will add every text on the website in that particular language:

 CREATE TABLE `text1` (`id` int(8) NOT NULL AUTO_INCREMENT,
                        `class` varchar(64) NOT NULL, //this will be the ID of this particular DIV
                        `text` text NOT NULL,
                        `link` text DEFAULT NULL, //fill that when this text is a link
                        PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

To add a new language, duplicate this table and change 'text' field in every record accordingly. Don't forget to add any new languages to 'lang' table and use the right 'text(x)' number!

 CREATE TABLE `text2` (`id` int(8) NOT NULL AUTO_INCREMENT,
                        `class` varchar(64) NOT NULL, //this will be the ID of this particular DIV
                        `text` text NOT NULL,
                        `link` text DEFAULT NULL, //fill that when this text is a link
                        PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

 
Step 5: We are populating 'lang' table with 2 different languages:
    INSERT INTO `lang` VALUES (`en`),(`es`);

    So 'text1' table would be English text and 'text2' Spanish text.

    Then, we will define our items menu on 'text(x)' tables, in these 2 different languages. 'class and 'link' would be the same for all languages, so the only real difference between tables will be on 'text' field. 

Step 6: Create a config.php file for connecting to the database. We will use this parameters, adjust it to yours:

 	$host = 'localhost';
	$db   = 'base';
	$user = 'root';
	$pass = '1234';

Step 7: 

