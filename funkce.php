<?php

function vypisMenu(array $polozkyMenu) : string
 {
  $vystup = "";
  foreach($polozkyMenu as $polozka){

   $vystup .='<li class="menu__item menu__item--home ">
    <a class="menu__link menu__link--home" href="' . $polozka['href'] . '">' . $polozka['nazev'] . '</a></li>';

  }
  return $vystup;
};



function nactiController(): string
{
  $stranka = $_GET['stranka'] ?? 'domu';

  if (is_file(__DIR__ . '/controller/' . $stranka . '.php')) {
    return __DIR__ . '/controller/' . $stranka . '.php';
  } else {
    return __DIR__ . '/controller/404.php';
  }
}

?>