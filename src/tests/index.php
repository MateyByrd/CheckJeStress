<?php
include '../resources/includes/PageCreator.php';
$page = new PageCreator;
$page->path_to_root = '../';
$page->head = '<link rel="stylesheet" href="resources/css/specific/information.css" type="text/css">';
$page->title = "Burn-out Tests";
$page->body = <<<CONTENT

  <div class="content">
    <div class="menuSpacing"></div>

    <div class="indexImage">
      <div class="row">
        <div class="medium-12 medium-centered columns">
          <div class="backgroundImage"
               style="background-image: url('resources/img/background.svg');">
          </div>
        </div>
      </div>
    </div>

    <div class="row water docFill">
      <div class="medium-10 medium-centered columns">
        <h3>Burn-out tests</h3>

        <ul>
          <li>
            <!-- test a -->
            In het geval dat u snel wilt weten of u risico loopt op een burn-out
            kunt u de <a href="tests/snelle-test.php">snelle test</a> afnemen.
            <br>
            Deze test zal circa 2 minuten van uw tijd nemen.
          </li>
          <li>
            <!-- test c -->
            In het geval dat u wilt weten of u verschijnselen heeft van een
            echte burn-out kunt u het beste de <a href="tests/uitgebreide-test.php">
            uitgebreide test</a> afnemen.
            <br>
            Deze test zal circa vijf minuten van uw tijd nemen.
          </li>
          <li>
            <!-- test b -->
            De <a href="tests/risicoanalyse.php">burn-out risico analyse</a> is een
            test voor managers, bestuurders en directeuren om te weten te komen
            hoeveel risico het bedrijf loopt op burn-outs van werknemers.
            <br>
            Deze test duurt ongeveer 2 minuten.
          </li>
        </ul>

        <p>
          Alle feedback verschijnt na het versturen op uw scherm en u weet
          meteen het resultaat. Uiteraard worden alle verstuurde gegevens strikt
          vertrouwelijk door ons behandeld.
        </p>

      </div>
    </div>
  </div>

CONTENT;
$page->includeMenu = true;
$page->create();
