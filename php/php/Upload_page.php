<!DOCTYPE html>
<html>

<head>

    <style>
        
        .photo{
            max-width: 221px;
            max-height: 200px; 
        
        }
    
    
    </style>
    
</head>    
    
<body>

<form action="includes/upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<?php include_once 'includes/showimg.php';?>
</body>
</html>