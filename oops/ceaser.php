<?php

//parent class
class Cipher1
{
	//initializes the text value
	function Cipher1($text)
	{
		$this->text=$text;
	}
}
//child class
class Cipher2 extends Cipher1
{   
	function Cipher($ch, $key)
	{
		//ctype_alpha checks whether the character is alphabet or not, if yes return the value
		if (!ctype_alpha($ch))
			return $ch;
		//this statement calculates the difference between upper and lower case
		$offset = ord(ctype_upper($ch) ? 'A' : 'a');
		//it takes the key value and add it to the character along withe offset
		return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
	}
	function Cipher2($input, $key)
	{
		//refers to the parent class and takes the text from the parent class
		parent::__construct($input);
		//initializing an empty string to the output 
		$output = "";
		//splits the output in to array
		$inputArr = str_split($input);
		//for every value in the array, it calls to the cipher function
		foreach ($inputArr as $ch)
			//stores the value in the output
			$output .= $this->Cipher($ch, $key);
		//displays the output
		echo $output."\n";
	}
}
echo "enter a string:";
//takes the input of a string
$input=trim(fgets(STDIN, 1024));
echo "enter a key:";
//takes a key value
$key=trim(fgets(STDIN, 1024));
//created the object of the child class and class the constructor
$childclass=new Cipher2($input,$key);

?>