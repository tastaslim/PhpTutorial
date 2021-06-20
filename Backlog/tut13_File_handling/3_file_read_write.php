<?php
// "
//   The readfile() function reads a file and writes it to the output buffer.It returns number of bytes
//   present in file on successful reding of file.
// ";
// echo readfile("./data/1.txt"); 
// "But this method is not recommend to use, we will discuss better way to open, read and write files";

// /*
//    As always it is very good practice to close all files after reading them.
//  */
// // *************************  fread() and fclose()  **********************
// /*
//       Modes	Description:
//            r	Open a file for read only. File pointer starts at the beginning of the file
//            w	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
//            a	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
//            x	Creates a new file for write only. Returns FALSE and an error if file already exists
//            r+	Open a file for read/write. File pointer starts at the beginning of the file
//            w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
//            a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
//            x+	Creates a new file for read/write. Returns FALSE and an error if file already exists
//    */
//    $data = fread("./data/1.txt", "r") or die("Unable to open file/ file not found");
//    echo $data;
//    fclose($data);

// *************************  fopen() and fwrite()  **********************
  $newFile=fopen("./data/newFile.txt","w") or die("Unable to create new file"); // creates new file if not present
  fwrite($newFile, "This data to write"); // adds new data into file and (overrides data of existing file.)
?>