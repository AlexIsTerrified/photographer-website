<?php

if(isset($_POST["pass"])){
    if($_POST["pass"] == "password"){
        echo '{"pass":true}';
    }else{
        echo '{"pass":false}';
    }
}else{
    echo '{"pass":false}';
}

?>