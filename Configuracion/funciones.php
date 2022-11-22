<?php 
function salir($html){
    return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE,"UTF-8");
}
