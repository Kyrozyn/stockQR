<?php

function checkIsAdmin(){
    if(session()->get('jenis_user') == "Admin"){
        return true;
    }
    else{
        return false;
    }
}