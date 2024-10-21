
 <?php
 print"<br>Original file name-=".$_FILES["fi"]["name"];
 print"<br>Uploaded temp file=".$_FILES["fi"]["tmp_name"];
 print"<br>File type=".$_FILES["fi"]["type"];
 if(move_uploaded_file($_FILES["fi"]["tmp_name"],basename($_FILES["fi"]["name"])))
 {
    print"<br>Uploaded file succesfully";
    print"<br><img src=".basename($_FILES["fi"]["name"])." width=200 >";
 }
else
    print"<br><Font color=red>File uppload failed! Try again </font>";
 
 ?>