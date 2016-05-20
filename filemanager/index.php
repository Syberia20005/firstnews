<?php

require_once 'functions.php';

//$path ='/Applications/XAMPP/xamppfiles/htdocs/filemanager';

$path = getcwd(); //получаем текущую директорию ulr index.php

if(isset($_GET['dir'])){
    path($_GET['dir']);
}else{
    path($path);
}

?>