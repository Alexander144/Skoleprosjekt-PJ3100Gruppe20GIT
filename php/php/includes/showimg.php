<?php $dir = 'uploads';
$file_display = array ('jpg', 'jpeg', 'png', 'gif');


if (file_exists($dir) ==false) {
echo 'Directory \'', $dir, '\' not found';
} else {
$dir_contents = scandir($dir);


foreach ($dir_contents as $file) {

     pathinfo($file, PATHINFO_EXTENSION);
     $tmp = explode('.', $file);        
     $file_type = end($tmp);

    if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true) {
    echo '<img class="photo" src="', $dir, '/', $file, '" alt="', $file, '" />';
    }
}
}
?>