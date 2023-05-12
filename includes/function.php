<?php
  function nav_link($url,$page_name){
    $active = $_SERVER['REQUEST_URI'] == $url ? "active" : "";
    return '
    <li class="nav-item">
          <a class="nav-link '. $active .'" aria-current="page" href='.$url.'>'. $page_name .'</a>
    </li>
    ';
  }                  
?>