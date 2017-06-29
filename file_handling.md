### File Handling:

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In this PHP web-programming language we will take a look at file handling. We will take a look at how to open en close a file, how to read a file line by line and how to read a file character by character.

**File Opening Modes**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Before we look how to open a file in PHP you need to know that a file can be opened in different modes. For example you can open a file in read only mode or in read and write modes. Take a look at the table below for the different modes:

| Modes | Description |
| --- | --- |
| r | Read only. Starts at the beginning of the file |
| r+ | Read/Write. Starts at the beginning of the file |
| w | Write only. Opens and clears the contents of file; or creates a new file if it doesn’t exist|
| w+ | 	Read/Write. Opens and clears the contents of file; or creates a new file if it doesn’t exist |
| a | Append. Opens and writes to the end of the file or creates a new file if it doesn’t exist|
| a+ | 	Read/Append. Preserves file content by writing to the end of the file
| x |	Write only. Creates a new file. Returns FALSE and an error if file already exists|
| x+ |	Read/Write. Creates a new file. Returns FALSE and an error if file already exists|

**Opening a File**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To open a file PHP you can use the fopen() function. This function takes two parameters, where the first parameter contains the name of the file and the second parameter is the modes that should be used to open the file.

Take a look at an example:
```
<?php
$file=fopen("test.txt","w");
? >
```

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In this example we are trying to open een file test.txt in write modes. If the fopen() function is unable to open the specified file, it returns 0 (of false).

**Closing a File**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;After you have opened a file and you are done (for instance reading its contents) then you should close the file. A fopen() function should always match with a fclose() function. Take a look at an example:
```
<?php
$file = fopen("test.txt","r");
//do something with the file test.txt
fclose($file);
?>
```
**Reading a File Line by Line**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The fgets() function is used to read a single line from a file. After the line has been read the file pointer is pointing to the next line in the file. This is very useful, because we could now read the file line by line.<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Before we show you the example we have to talk about the feof() function. This function can be used to check if the “End-Of-File” (EOF) has been reached. This is very useful because we now can loop through a file of unknown length. We can do this on every file that is not opened in w, a, and x mode!

Let’s take a look at an example:
```
<?php
$file = fopen("test.txt", "r") or exit("Unable to open the file!");
while(!feof($file))
{
echo fgets($file). "<br />";
}
fclose($file);
?>
```
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First we open the file test.txt in read mode. If this is not possible, we exit with a message. Than we use a while loop to loop through the file. This is done until we reach the end of the file. In the loop the fgets() function is used to grab one line and echo this line onto the screen. The last thing that is done is closing the file.
Reading a File Character by Character.<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The function fgetc() can be used to read a character from a file. We now can use the previous example to read a file character by character. Take a look at the following example:

```
<?php
$file = fopen("test.txt", "r") or exit("Unable to open the file!");
while(!feof($file))
{
echo fgetc($file);
}
fclose($file);
?>
```
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As you can see it is almost the same as the previous example. The only thing that’s changed is the function fgets() in fgetc() and the html break is removed.
