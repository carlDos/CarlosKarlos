<?php
if (isset($_POST['submit'])){
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowd = array('jpg','jpeg','png','webp');

    if (in_array($fileActualExt, $allowd)){
        if($fileError === 0){
            if ($fileSize < 500000){
                $fileNameNew = uniqid('',true).".".$fileActualExt; 
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: media.php?uploadsucess");
            }else{
                echo "Too Big!!!";
            }
        } else{
            echo "Error found";
        }

    } else{
        echo "Only upload jpg jpeg png or webp files";
    }
}
$pictures = array('linkToPicture1', 'linkToPicture2', 'andSoOn');




