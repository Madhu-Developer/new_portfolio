<?php

function load_template($name){
    // __DIR__  current file working directary 
    include __DIR__."/../__templates/$name.php";     
}