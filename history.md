---
slug: php/introduction/features
---

**1.2. Features:**
  - Performance: Script written in PHP executes much faster then those scripts written in other languages such as JSP & ASP.
  - Open Source Software: PHP source code is free available on the web, you can developed all the version of PHP according to your requirement without paying any cost.
  - Platform Independent: PHP are available for WINDOWS, MAC, LINUX & UNIX operating system. A PHP application developed in one OS can be easily executed in other OS also.
  - Compatibility: PHP is compatible with almost all local servers used today like Apache, IIS etc.
  - Embedded: PHP code can be easily embedded within HTML tags and script.

**PHP tags:**<br/>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The PHP parsing engine needs a way to differentiate PHP code from other elements in the page. The mechanism for doing so is known as 'escaping to PHP'. There are four ways to do this<br/>
- The most common tag:<br/>
&nbsp;&nbsp;```<?php [code here] ?>```<br/>
- Another version is this one, which is the same kind of tags used for e.g. blocks of JavaScript code:<br/>
&nbsp;&nbsp;```<script language=”php”> [code here] </script>```<br/>
- A lot of PHP installations are set up to allow the short version:<br/>
&nbsp;&nbsp;```<? [code here] ?>```<br/>
- On some servers, ASP style tags have been enabled. They look like this:<br/>
&nbsp;&nbsp;```<% [code here] %>```<br/>

**Commenting PHP code:**<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A comment is the portion of a program that exists only for the human reader and stripped out before displaying the programs result. There are two commenting formats in PHP.<br/> 
-Single-line comment:<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;They are generally used for short explanations or notes relevant to the local code. 
&nbsp;Example:<br/>
```
<?
# This is a comment, and
//This is a comment too. Each style comments only
?>
```
-Multi-line comment:<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;They are generally used to provide pseudocode algorithms and more detailed explanations when necessary. The multiline style of commenting is the same as in C. Here are the example of multi lines comments.<br/>
&nbsp;Example:<br/>
```
<?
/* This is a comment with multiline
php
laravel
*/
?>
```
**Statements are expressions terminated by semicolons**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A statement in PHP is any expression that is followed by a semicolon (;).Any sequence of valid PHP statements that is enclosed by the PHP tags is a valid PHP program. Here is a typical statement in PHP, which in this case assigns a string of characters to a variable called $greeting 
```$greeting = "Welcome to PHP!";```

**Running PHP Script from Command Prompt**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yes you can run your PHP script on your command prompt. Assuming you have following content in test.php file
```
<?php
   echo "Hello PHP!!!!!";
?>
```
Now run this script as command prompt as follows 
```$ php test.php```
It will produce the following result 
```Hello PHP!!!!!```
Hope now you have basic knowledge of PHP Syntax.