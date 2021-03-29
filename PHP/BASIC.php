 <?php

	/* To PRINT data or variable */
		echo'Output comes Here';	//you can use ""
		echo $variable_name;		//To Print Variable
		print('Output comes Here');	//you can use ""
		print($variable_name);		//To Print Variable
		print_r($array_name);		//To Print Array
		echo'<strong></strong>';	//Use HTML code inside php
/*---------------------------------------------------------------------------------------*/

	/* INCLUDE REQUIRE*/
		include 'something.php';		//include some another .php, use of "" and () instead of '' doesn't matter
		require 'something.php';		//it is same as include but the different between these is error reporting
		include_once 'something.php';	//it does not include file again & again.
		require_once 'something.php';
/*---------------------------------------------------------------------------------------*/

	/* DATE & TIME*/
		time();		//it gives time in second from1 jan of the year.
		strtotime('+1 week');//its modify current date nd time
		date('D M Y', time());		//Gives date. In 1st argument format of date and time comes, in 2nd argument seconds comes.
		//Random Number Functions
			rand(1,9);		//It generate random number. 1st argument is minimum limit of random number, 2nd argument is maximum limit of random number
			getrandmax();	//gives maximum random number
/*---------------------------------------------------------------------------------------*/

	/*STRING Functions*/
		strlen($string)				//to count characters in string
		strtolower($string)			//to convert string into lowercase
		strtoupper($string)			//to convert string into uppercase
		str_word_count($String);	//To Count String Words
		str_word_count($String, 1);	//2nd Argument Convert String into Array
		preg_match('/Character/', $string);	//to search Character's existence in string
		strpos($string, 'find_word', $offset);	//to find position of word in string, 1st argument is string, 2nd argument is word to be find, 3rd argument is from which position searching take place.
		substr_replace($string, $to_rep_str, startingPoint, endingPoint);	//Replace the string(1st argument) by the given string(2nd argument), 3rd argument is position from where the replacement starts, 4th argument is ending position.
		str_replace(lookingFor, toReplace, string)	//It Search words/characters(1st argument) and replace with given words/Characters(2nd argument)from the String(3rd argument).
		str_shuffle(String);			//To Shuffle String
		substr(String, 0, 5);		//To Trim the String, 2nd argument is starting point of trimming, 3rd argument is ending point
		strrev(String);				//To reverse the string
		similar_text(string1, string2, $result);//To Check Similarities between two string
		htmlentities();						//To Display HTML Code reather then Process it.
		explode(',', $ArrayVariable);		//To remove the character given in 1st argument from the each array's element.
		implode(',', $ArrayVariable);		//To insert the character given in 1st argument from the each array's element.
/*---------------------------------------------------------------------------------------*/

	/* FILE HANDLING*/
		$objName = fopen('FileName', 'w');	//To OPEN the File, if the file does not exist it creates a new file, 1st argument is the name of file that we want to open, 2nd argument is the giving task what we want to do like w - write, r - read, a - append.
		fwrite($objName, 'DATA');			//To WRITE Data in the file. 1st argument takes the object name that we define when the file opens, 2nd argument takes the DATA that we want to write in the file.
		file('fileName');					//To READ all data from file
		fread($objname, filesize);			//To READ the data from file, 2nd argument take the lenth of characters to be readed.
		filesize('fileName');				//To Obtain the Size of the file.
		fclose($objName);					//To Close the file which is open above. argument takes the object name that we define when the file opens
		move_uploaded_file('Tmp_locationOffile',$uploadLocation.$nameOfFile)//To move the uploaded file in the given directory(2nd argument) from its temporary location(1st argument).
/*---------------------------------------------------------------------------------------*/

	/* DIRECTORY */
		$objName = opendir('DirName/');	//To open the Directory. Directory name with one slash in the end needed in argument.
		readdir($objName);				//To Read Files in the Directory. argument takes the object name that we define when the Directory opens
		file_exists('FileName');		//To Check whether the file exist or not.
		unlink('FileName');				//To Delete the File.
		rename('FileName','NewFileName')//To Rename the File.
/*---------------------------------------------------------------------------------------*/

	/* SUPER GLOBAL VARIABLE*/
		//$_SERVER
			$_SERVER['SCRIPT_NAME'];		//It gives Script Name i.e., directory of page.
			$_SERVER['HTTP_HOST'];		//IT gives Host name e.g.-localhost
			// Detecting client IP Address
				$_SERVER['HTTP_CLIENT_IP'];		//IT gives client ACTUAL IP Address
				$_SERVER['HTTP_X_FORWARDED_FOR'];		//IT gives client IP Address
				$_SERVER['REMOTE_ADDR'];		//IT gives Visitors LOCAL IP Address

		//$_GET
			$_GET['NameOfInput']	//To get the inputed DATA of FORM. values send by URL
		//$_POST
			$_POST['NameOfInput']	//To get long type of inputed DATA from FORM and send data secreatly(i.e., not send by the url)
		//$_SESSION
			session_start();				//To start session
			$_SESSION['VariableName']='Value';//To SET Values in session (Hold DATA in Browser or in WebSite)
			$_SESSION['VariableName']		//To ACCESS Session in another pages or anywhere in that page only.
			unset($_SESSION['VariableName'])//To UNSET the Specified Variable Value from Session
			session_destroy();				//To Destroy or UNSET the every Variable from Session and end the session.
		//$_COOKIE
			setcookie('CookieName','Value',time()+10);	//To set a cookie in the users system, 1st argument is the name of Cookie, 2nd argument is the Value that we want to store in Cookie, 3rd argument is the time duration of cookie's exist
			$_COOKIE['CookieName'];		//To access cookie in the page.
			setcookie('CookieName','Value',time()-10);	//To unset the cookie you had to change time in minus. setcookie() is the only function that set and unset cookie as well.
		//$_FILES
			$_FILES['NameOfInput']['name'];		//To get the name of the uploaded file.
			$_FILES['NameOfInput']['size'];		//To get the size of the uploaded file.
			$_FILES['NameOfInput']['type'];		//To get the type of the uploaded file.
			$_FILES['NameOfInput']['tmp_name'];	//To get the temprary location of the file.
			$_FILES['NameOfInput']['error'];	//To check whether file uploaded or not.
			move_uploaded_file('Tmp_locationOffile',$uploadLocation.$nameOfFile)//To move the uploaded file in the given directory(2nd argument) from its temporary location(1st argument).
/*---------------------------------------------------------------------------------------*/

	//Detecting Client Browsers
		$browser = get_browser(null, true);
		echo $browser['browser'];
/*---------------------------------------------------------------------------------------*/

	//MD5 Encryption Function
	//It is a one way Encryption process that means it make hash of a string but the reverse process isn't possible.
		md5('String');
/*---------------------------------------------------------------------------------------*/

	//Email Functions
		mail($to, $subject, $body, $headers);
/*---------------------------------------------------------------------------------------*/

	//XML
		$xmlObj = simplexml_load_file('filename.xml');	//It returns an object containing the data of xml file.
/*---------------------------------------------------------------------------------------*/

	//phpMyAdmin
		//Connecting with database
			$link = mysqli_connect('Host_Name','User_Name','Password','DataBase_Name');
				mysqli_connect_errno();	//this function returns the error number while connecting the db, iF any.
		//Query Processing
			$query_result=mysqli_query($link,"SQL Query");	//this function process the query nd return the result of the query.
				mysqli_error($link);	//this function returns the error msg while Processing query. if any.
			mysqli_num_rows($query_result);	//this function returns the int value of number of rows in the result of query.
			$query_row=mysqli_fetch_assoc($query_result); //this function fetch a row from the Query result and return it as an associative array. later one cane access like: $query_row['name_of_column']
/*---------------------------------------------------------------------------------------*/
	//mysqli
	//mysqli is the extension of php that allow the database connectivity. mysqli is a class that contain methods and properties that facilitate database connectivity.
		//Constructor
			$obj=new mysqli('Host_Name','User_Name','Password','DataBase_Name'); //it is the constructor function of mysqli class.
		//Properties
			mysqli::$connect_errno;	mysqli::$connect_error;	//it contain the error number and msg while connecting the db.
			mysqli::$errno;	mysql::$error;	//contain the error number and msg in the database.
			mysqli::$affected_rows;	//gets the number of affected rows in aprevious MySQL operation;
		//Methods
			mysqli::query("SQL Query");	//it process the SQL Query and return the result of the Query in the form of mysqli_result object.
			mysqli::real_escape_string("String");	//Escapes special Characters in a string for use in an SQL statement.

	//mysqli_result
		// Properties
			int mysqli_result::$current_field;
			int mysqli_result::$field_count;	//contain the numbe rof fields in the result table
			array mysqli_result::$lengths;
			int mysqli_result::$num_rows;	//contain the number of rows in theresult table.
		//Methods
			mysqli_result::fetch_all();	//it return whole data in the form of multi dimentional array.
																	//constant can put into its peremeter like MYSQLI_NUM,MYSQLI_ASSOC,MYSQLI_BOTH.
			mysqli_result::fetch_assoc();	//it return an associative array of a row from the result table.
			mysqli_result::fetch_object();	//it return an object that contain the data of a row. where the attribute of the object represent the name of the field.
			mysqli_result::free();	//freethe memory associated with the  result.
/*---------------------------------------------------------------------------------------*/

  //GD "GIF Draw" Graphic Library
    //To generate an image header function must be called at very top of the php page
    header('Content-type: image/jpeg'); //Its change the type of the file. This function treat a php page as a jpeg image.

    //GD Functions
      ImageFontHeight($font_size);  //this func calculate nd returns height in the pixel value according to the font size.
      ImageFontWidth($font_size); //this func calculate nd returns width in the pixel value according to the font size.

      $image = imagecreate($image_width,$image_height); //this function creates an image nd return an instace of image.
      imagecolorallocate($image,rrr,ggg,bbb);
      imagestring($image,$font_size,x_Coordinate,y_Coordinate,"String",$font_color);
      imagejpeg($image);
/*---------------------------------------------------------------------------------------*/

  //Exception HANDLING
    try {
       throw new Exception("Error Processing Request", 1);

    } catch (Exception $e) {

    }
/*---------------------------------------------------------------------------------------*/
  //OOP Object Oriented Programming
    //Class
    class ClassName
    {
      /*Access Specifiers : public, private, protected*/
      public $variable1;  //public properties name starts with smallletter
      private $_variable2;  //private properties name starts with _
      protected $_tvariable3; //protected properties name starts with _t

      /*Constants in Class*/
      const PI=3.141;
	   
      /*Statics in Class*/
      public static DrinkingAge=21;
	public static function setDrinkingAge($x)
	{
		//code here
	}
	    
      //constants and statics in the class can only be accesses by preciding 'self::' keyword
      //and outside class it can only be acessed by preceiding ClassName::
		    
	    
      /*Constructor*/
      public function __construct(argument)
      {
        $this->variable;
      }

      /*Methods*/
      public function FunctionName($value='')
      {
        // code...
        return null;
      }
    }

    class Another extends ClassName{
    	public function __construct(argument)
      	{
        	parent::PI;
      	}
    }
/*---------------------------------------------------------------------------------------*/
/* Load Class Automaticlly in OOP*/
	spl_autoload_register(function($className){
		$path = "etc/etc/".$className.".extension";
		if(!file_exists($path)){
			return false;
		}
		include_once($path);
	});


/*---------------------------------------------------------------------------------------*/

		/* OPERATORS*/
			//Assignment Operators
				=	//assign the value
				+=	// += increase variable value by given value
				-=	// -= decrease variable value by given value
				*=	// *= multiply variable value by given value
				/=	// /= divide variable value by given value
			//Comparison Operators
				<	//smaller than
				>	//greater than
				==	//equal to
				!=	//not equal to
				<=	//smaller than equal to
				>=	//greater than equal to
			//Arithmetic Operators
				+	//Addition
				-	//Subtraction
				*	//Multiplication
				/	//Division
				%	//Modulus
				++	//Increment
				--	//Decrement
			//logical Operators
				&&	//AND
				||	//OR
				!	//NOT
/*---------------------------------------------------------------------------------------*/

	/*if - else Statement*/
		//if - else Statement
			if(condition){
				code comes here;
			}else{
				code comes here;
			}
		//if - else if - else Statement
			if(condition){
				code comes here;
			}else if(condition){
				code comes here;
			}else{
				code comes here;
			}
		//nester if - else Statement
			if(condition){
				if(condition){
					if(condition){

					}
				}
			}else{
				code comes here;
			}
/*---------------------------------------------------------------------------------------*/

	/*SWITCH Statement*/
		switch(condition){
			case 1 : Code;
			break;
			case 2 : Code;
			break;
			case 3 : Code;
			break;
			:
			default : Code;
			break;
		}

/*---------------------------------------------------------------------------------------*/

	/*LOOPS*/
		//WHILE Loop
			while(condition){
				code comes here;
			}
		//DO WHILE Loop
			do{
				code comes here;
			}while(condition)
		//FOR Loop
			for(condition){
				code comes here;
			}
/*---------------------------------------------------------------------------------------*/

	/*Functions*/
		function func_name(argument1,argument2,..,argumentn){
			Code comes here;
			return $var_name;	//in case of function returns value
		}
/*---------------------------------------------------------------------------------------*/

	/*ARRAY*/
		//Single Dimension Array
			$arr_name = array('value1','value2','value3',..,'value_n');
		//Associative Array
			$arr_name = array('indexvalue1'=>value1,'indexvalue2'=>value2,..,'indexvalue_n'=>value_n,)
		//Multi Dimension Array
			$arr_name = array('indexvalue1'=>
											array('value1','value2','value3',..,'value_n'),
							  'indexvalue2'=>
											array('value1','value2','value3',..,'value_n'));
		//Print out Multi Dimension Array Element with foreach loop
			foreach($arr_name as $element => $inner_arr){
				echo '<strong>'.$element.'</strong></br>';
				foreach($inner_arr as $item){
					echo $items.'</br>';
				}
			}
?>
