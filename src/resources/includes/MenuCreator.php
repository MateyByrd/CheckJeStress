<?php
/**
 * Deze PHP class bevat functies voor een (top-bar) menu.
 *
 * @package CheckJeStress
 */
class MenuCreator {

  var $menu_items;
  var $before_menu;
  var $after_menu;

  function create()
  {
    /*
     * Bij elementen van het main menu (de menubalk) moet je telkens strings van
     * MenuBuilders aan elkaar plakken door .build() te gebruiken. Bij submenus
     * van submenus kun je ->appendSubmenu() doen.
     */

    /*
     * Variabelen nodig voor het menu
     */
    $this->before_menu = '
<!--  Menu Bar -->
<div class="top-bar">
  <div class="top-bar-title">
    <span data-responsive-toggle="responsive-menu" data-hide-for="medium"
      style="padding: 1em">
      <span class="menu-icon" data-toggle></span>
      <strong style="color: white; margin-left: 1em;">CHECKJESTRESS
        .NL</strong>
    </span>
  </div>
  <div class="row" id="responsive-menu">
    <div class="medium-10 medium-centered columns">
      <a href="./"><img class="title logo" data-hide-for="small"
          src="resources/img/logo_vector.svg" alt="Logo"></a>
      <nav>
        <ul class="menu dropdown" data-dropdown-menu>';

    $this->after_menu = '
        </ul>
      </nav>
    </div>
  </div>
</div>
<!-- End Menu Bar -->';

    $menu =
      (new MenuBuilder('Home', './'))
        ->build()
      . (new MenuBuilder('Informatie', 'info.php'))
        ->build()
      . (new MenuBuilder('Doelgroep', 'doelgroep/'))
        ->appendElement('Particulier', 'doelgroep/particulier/')
        ->appendElement('Bedrijf', 'doelgroep/bedrijf/')
        ->build()
      . (new MenuBuilder('Tests', 'tests/'))
        ->appendElement('Snelle test', 'tests/snelle-test.php')
        ->appendElement('Uitgebreide test', 'tests/uitgebreide-test.php')
        ->appendElement('Risicoanalyse bedrijven', 'tests/risicoanalyse.php')
        ->build()
      . (new MenuBuilder('Steunpunten', 'steunpunten/'))
        ->appendElement('Vacatures', 'steunpunten/vacatures/')
        ->build()
      . (new MenuBuilder('Contact', 'contact/'))
        ->build();

    /*
     * Zet het menu in elkaar, plaatst eerst de beforemenu variabele en de
     * aftermenu variabele.
     */
    echo $this->before_menu;
    echo $menu;
    echo $this->after_menu;
  }
}

/**
 * Stelt een element van het menu voor. Deze class kan het menu bouwen op een
 * soort recursieve manier.
 *
 * @package CheckJeStress
 */
class MenuBuilder {

  /**
   * Maakt een nieuwe MenuBuilder.
   * @param string $title de label van deze menu entry
   * @param string $link de link waar deze entry naar moet verwijzen
   */
  function __construct($title = null, $link = null) {
    $this->title = $title;
    $this->link = $link;
  }

  private $title;
  private $link;

  /**
   * Bevat de elementen van dit menu element, als het een dropdown is.
   */
  var $children;

  /**
   * Voegt een MenuBuilder toe aan dit submenu.
   *
   * @return MenuBuilder deze MenuBuilder, for chaining
   */
  function appendSubmenu($menu_builder) {
    if (!isset($this->children)) {
      $this->children = array();
    }
    array_push($this->children, $menu_builder);
    return $this;
  }

  /**
   * Voegt een element toe aan dit menu.
   *
   * @return MenuBuilder deze MenuBuilder, for chaining
   */
  function appendElement($title, $link) {
    if (!isset($this->children)) {
      $this->children = array();
    }
    array_push($this->children, new MenuBuilder($title, $link));
    return $this;
  }

  /**
   * Bouwt dit element van het menu.
   *
   * @return string bruikbare HTML-code van dit menu
   */
  function build() {
    if (is_array($this->children)) {
      $output = "<li><a href=\"{$this->link}\">{$this->title}</a><ul
class=\"menu dropdown\" data-dropdown-menu>";
      foreach ($this->children as $child) {
        $output .= $child->build();
      }
      $output .= '</ul></li>';
      return $output;
    } else {
      return "<li><a href=\"{$this->link}\">{$this->title}</a></li>";
    }
  }

}
