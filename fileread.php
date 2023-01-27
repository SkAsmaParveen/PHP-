
<?php
  //A. Write a PHP program to Read from existing file.

  //opening the file cseinfo.txt in r mode
  $filename = fopen("cseinfo.txt","r");

  //reading the entire file using fread()
  //echo fread($filename,filesize("cseinfo.txt")); //fread(filename,size of content to be read

  //fgets(filename) is used to read and print the content line by line using loops

  //feof() is used to check if the end of file is reached
  while(!feof($filename))
  {
    echo fgets($filename)."<br>";
  }

  fclose($filename);
?>
  
