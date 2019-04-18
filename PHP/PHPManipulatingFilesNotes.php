<?php
//readfile() example
echo readfile("webdictionary.txt");//it reads the file and prints out what it says
echo "<br /><br />";

//fopen() example; has more options than readfile()
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
/*the first parameter takes the "name" of the file, and the second parameter specifies how it should be opened
the different ways it can open:
"r"-Open a file for read only;
"w"-Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist;
"a"-Open a file for write only. The existing data in file is preserved and Creates a new file if the file doesn't exist
"x"-Creates a new file for write only. Returns FALSE and an error if file already exists
"r+"-Open a file for read/write
"w+"-Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist.
"a+"-Open a file for read/write. The existing data in file is preserved and creates a new file if the file doesn't exist
"x+"-Creates a new file for read/write. Returns FALSE and an error if file already exists

if it does not open, it will print out "Unable to open file!"*/
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
echo "<br /><br />";

//fread() example
fread($myfile,filesize("webdictionary.txt"));
//the first parameter takes the "name" of the file, and the second parameter specifies the max number of bytes
//this example reads the file to the end
echo "<br /><br />";

//fclose() example
$myfile = fopen("webdictionary.txt", "r");
// some code to be executed....
fclose($myfile);//closes an open file
echo "<br /><br />";

//fgets() example
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);//reads the first line of the file
fclose($myfile);
echo "<br /><br />";

//feof() example; eof stands for "end-of-file"
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
echo "<br /><br />";

//fgetc() example
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);
?>