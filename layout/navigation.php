<nav>
  <div class="menu">
        <ul class="menu__down">
      
      <li class="menu__item menu__item--logo ">
        <a class="menu__link menu__link--logo" href="/">
          <img id="logo" class="menu__logo  {{'menu__link--active' if page.fileSlug === ''}}" src="/images/logo.svg" alt="Logo pension Gerta Český Krumlov"/>
        </a>
      </li>
      
      <li class="menu__item menu__item--menu" id="menu__button">
        menu <img src="/images/menu.svg" alt="Ikona menu"/>
      </li>
    </ul>
    <ul class="menu__hide" id="menu__open">
      <img class="menu__cross" id="cross" src="/images/cross.svg" alt="Ikona křížek"/>
      <?php echo vypisMenu($polozkyMenu);?>
    </ul>
  </div>
</nav>