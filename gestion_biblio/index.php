<?php 
session_start();
$uri = $_SERVER['REQUEST_URI'];
var_dump($uri);

require_once 'elements/header.php';


if($uri === '/gestion_biblio/index.php?/views/login.php'){
    require_once 'views/login.php';
}elseif($uri === '/gestion_biblio/index.php?/views/test.php'){
    
}
else{
    require_once 'views/acceuil.php';
}


require_once 'elements/footer.php';

?>

</form>

</body>

</html>