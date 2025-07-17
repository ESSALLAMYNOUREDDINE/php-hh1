<?php
$fileExt = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
echo $fileExt;
if($_FILES["file"]["size"]<= 100 * 1024){
   if($fileExt === "pdf" || $fileExt === "docx" || $fileExt === "pptx"){
      move_uploaded_file($_FILES["file"]["tmp_name"], 
      "C:/xampp/mesfichier/".$_FILES["file"]["name"]);
    } 
   else {
        echo "<p>Le fichier doit être au format PDF ou DOCX ou PPTX</p>";
    }
} 
else {
     echo "<p>La taille du fichier ne doit pas dépasser 100 Ko</p>";
}
?>