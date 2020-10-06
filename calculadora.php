<?php

declare (strict_types=1);

if (isset($_GET['num'])){
    $num_url= filter_input (INPUT_GET,'num',FILTER_SANITIZE_URL);
    fcalc($num_url);
}


fcalc($num_url){
    
}

?>