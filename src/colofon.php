<?php

include 'resources/includes/PageCreator.php';
$page = new PageCreator();
$page->head = '<link rel="stylesheet" href="resources/css/specific/standard.css"
                     type="text/css">';
$page->title = "Colofon";
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

    <div class="row text water docFill" id="first">
      <div class="medium-10 medium-centered columns">

        <h5>Colofon</h1>

  		  <p>
  			  Hoewel deze website met veel zorg is samengesteld, aanvaarden
          auteur(s) noch uitgever enige aansprakelijkheid voor geleden schade
          ontstaan door eventuele fouten en/of onvolkomenheden op deze site. De
          links die verwijzen naar andere websites zijn ter informatie.
          CheckJeStress kan op geen enkele wijze hoe dan ook aansprakelijk
          gesteld worden voor de inhoud en de kwaliteit van deze website.
          Sommige teksten, afbeeldingen, tekens, logo's en andere op deze
          website gebruikte items worden auteursrechterlijk beschermd of zijn
          geregistreerde handelsmerken. Schriftelijke toestemming van
          desbetreffend uitgever en/of auteur is vereist om deze te
          verveelvoudigen en/of openbaar te maken.
  		  </p>
  		  <p>
  			  Indien u vragen en/op opmerkingen heeft n.a.v. deze site, neem dan
          a.u.b. <a href="contact/">contact</a> met ons op.
  		  </p>
  		  <p>
  			  Op alle diensten van CheckJeStress zijn algemene voorwaarden van
          toepassing. Wij hanteren de bepalingen en het
          <a href="http://www.abvc.nl/CMS/Docs/ABvC%20Klachtenreglement.pdf">
          klacht- en tuchtreglement</a> van de "Beroepscode van ABvC".
  		  </p>

  		  <p>
  			  CheckJeStress respecteert al uw persoonlijke gegevens die door u aan
          CheckJeStress verstrekt worden. Deze worden niet zonder uw toestemming
          doorgegeven aan derden en zullen met de grootste zorg worden behandeld
          en opgeslagen. De geheimhouding van uw persoonlijke gegevens heeft
          hierbij de hoogste prioriteit. Gegevens die mogelijk door de server
          van checkjestress.nl en/of steunpuntstressburnoutnederland.nl van uw
          computer worden ontvangen, worden uitsluitend gebruikt voor
          statistische doeleinden ten behoeve van het optimaliseren van de
          gebruiksvriendelijkheid van checkjestress.nl en/of
          steunpuntstressburnoutnederland.nl.
  		  </p>

  		  <p>
  			  Uw naam, adres, telefoonnummer kunnen wij niet zonder meer inzien,
          tenzij u ons deze gegevens verstrekt per email. In dit geval zal
          CheckJeStress zoals eerder aangeveven, deze gegevens strikt
          vertrouwelijk behandelen.
  		  </p>

      </div>
    </div>

  </div>

CONTENT;
$page->create();
