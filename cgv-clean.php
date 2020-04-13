<!DOCTYPE html>
<title>Vos CGV</title>

<html>
<body>

<?php
define("WEBADRESS", $_POST["WEBADRESS"]);
define("NAMESOC", "Les Canailles");
define("RCS", $_POST["RCS"]);
define("TYPSOC", "SASU");
define("CAPITAL", 8073847);
define("ADRESSSOC", "18 boulevard Pierre-Henry - BOB - 13015");
define("VILLESOC", "MARSEILLE");
define("TVA", $_POST["TVA"]);
define("EMAIL", $_POST["EMAIL"]);
define("TEL", $_POST["TEL"]);
define("RESPPUBLI", $_POST["RESPPUBLI"]);
define("HEBERGEUR", $_POST["HEBERGEUR"]);
define("ADRESSHEB", $_POST["ADRESSHEB"]);
define("Livraison_1", $_POST["Livraison_1"]);
define("Livraison_2", $_POST["Livraison_2"]);
define("Livraison_3", $_POST["Livraison_3"]);
define("Livraison_4", $_POST["Livraison_4"]);
define("Livraison_1_Prix", $_POST["Livraison_1_Prix"]);
define("Livraison_2_Prix", $_POST["Livraison_2_Prix"]);
define("Livraison_3_Prix", $_POST["Livraison_3_Prix"]);
define("Livraison_4_Prix", $_POST["Livraison_4_Prix"]);


echo "<p>","Le site marchand ", WEBADRESS,", ci-après \"le Site\" est détenu et géré par la société ",NAMESOC,", ",TYPSOC," au capital de ",CAPITAL," euros dont le siège social est situé au ",ADRESSSOC,", immatriculée au registre du commerce et des sociétés de ",VILLESOC," sous le numéro ",RCS," n° TVA ",TVA,"  ci-après dénommée \"le Vendeur\".","</p>";
echo "<p>","Le responsable de la publication est ",RESPPUBLI,". Le site est hébergé chez ",HEBERGEUR," - ",ADRESSHEB,".","</p>";
echo "<h2>","Objet du contrat","</h2>";
echo"<p>","Les présentes conditions générales de vente sont conclues, d'une part, par le Vendeur et, d'autre part, par toute personne physique ou morale souhaitant procéder à un achat via le site Internet ",WEBADRESS," , dénommée ci-après \"le Client\".","</p>";
echo"<p>","Elles ont pour objet de fixer les dispositions contractuelles entre le Vendeur et le Client et les conditions applicables à tout achat effectué par le biais du Site, que le Client soit professionnel ou consommateur.","</p>";
echo"<p>","L’acquisition d'un bien ou d'un service à travers le Site implique une acceptation sans réserve par le Client des présentes conditions de vente.","</p>";
echo"<h2>","Caractéristiques des articles proposés à la vente","</h2>";
echo "<p>","Les articles offerts sont ceux qui figurent dans le catalogue publié sur le Site. Ces articles sont offerts dans la limite des stocks disponibles.","</p>";
echo "<p>","Chaque article est accompagné d'un descriptif des caractéristiques essentielles  établi par le Vendeur. Les éléments graphiques du catalogue sont les plus fidèles possibles mais n'assurent aucune similitude avec l’article acheté.","</p>";
echo"<h2>","Zone géographique","</h2>";
echo"<p>","Nos offres ne s'adressent qu'à des consommateurs et des professionnels majeurs disposant d'une adresse de livraison dans l’un des pays de l’Union Européenne.","</p>";
echo"<p>","La vente en ligne des articles présentés dans le Site est réservée aux acheteurs majeurs disposant d'une adresse de livraison dans l’un des pays de l’Union Européenne.","</p>";
echo"<h2>","Tarifs","</h2>";
echo"<p>","Les prix figurant dans le catalogue sont des prix TTC en euros tenant compte de la TVA applicable au jour de la commande; tout changement du taux pourra être répercuté sur le prix des articles.","</p>";
echo"Le Vendeur se réserve le droit de modifier ses prix à tout moment, étant entendu que le prix figurant au catalogue le jour de la commande sera le seul applicable au Client.";
echo"Les prix indiqués ne comprennent pas les frais de livraison.";
echo"<h2>","Frais de livraison","</h2>";
echo"Les frais de livraison sont convenus en plus du prix et indiqués dans le bon de commande.";
echo"<b>","France métropolitaine, Monaco et Corse:","</b>";

if (Livraison_2==="") {
  echo "<p>","Les commandes passées sur le site sont livrées via ",Livraison_1,".","</p>";
   if (Livraison_1_Prix!="Tarif (si applicable)") {
        echo "<p>","Les frais de livraison sont fixés à ",Livraison_1_Prix," euros.","</p>";
    }
    else {
      echo "<p>","Les frais de livraison sont calculés pendant la commande en fonction du nombre des articles séléctionnés.","</p>";
    }
}
else {
  echo "<p>","Les modes de livraison suivants sont disponibles depuis le Site :","</p>";
  echo "<ul>";

    if (Livraison_1_Prix!="Tarif (si applicable)") {
      echo "<li>",Livraison_1," (",Livraison_1_Prix," € par commande)","</li>";
    }
    else {
     echo "<li>",Livraison_1," (Frais calculés lors de la commande)","</li>";
    }

   if (Livraison_2_Prix!="Tarif (si applicable)") {
    echo "<li>",Livraison_2," (",Livraison_2_Prix," € par commande)","</li>";
  }
  else {
    echo "<li>",Livraison_2," (Frais calculés lors de la commande)","</li>";
  }

if (Livraison_3!="") {
if (Livraison_3_Prix!="Tarif (si applicable)") {
    echo "<li>",Livraison_3," (",Livraison_3_Prix," € par commande)","</li>";
  }
  else {
    echo "<li>",Livraison_3," (Frais calculés lors de la commande)","</li>";
  }
}
if (Livraison_4!="") {
if (Livraison_4_Prix!="Tarif (si applicable)") {
    echo "<li>",Livraison_4," (",Livraison_4_Prix," € par commande)","</li>";
  }
  else {
    echo "<li>",Livraison_4," (Frais calculés lors de la commande)","</li>";
  }
}
 echo "</ul>";
}


#<li><p>Les retraits en boutique ne peuvent être effectués qu’entre {{ horaire boutique }} du {{ jours boutique }}, dès réception d’un e-mail de disponibilité de la commande.</p>
#</li>
#<li>Les produits commandés resteront disponibles en boutique pour une durée de 14 jours ouvrés, après quoi, la disponibilité ne pourra être garantie et dépendra de l’état des stocks.</li>
#</ul>
#<p>  <strong>Pays de l’Union Européenne hors France métropolitaine, Monaco et Corse:</strong></p>
#<p>  Les frais de livraison sont calculés en fonction du nombre d'articles commandés et sont affichés lors du choix du mode de livraison. Les livraisons à l'international sont prises en charge par {{ mode livraison IN }}.</p>



echo "<h2>","Commandes","</h2>";
echo "<p>","Le Client passe commande sur le site Internet ",WEBADRESS,". Pour acheter un ou plusieurs articles, il doit obligatoirement suivre le processus de commande suivant :","</p>";

echo "<ul>";
echo"<li>","<p>","Choix des articles et ajout au panier","</p>","</li>";
echo"<li>","<p>","Validation du contenu du panier","</p>","</li>";
echo"<li>","<p>","Identification sur le Site ou inscription sur la fiche d'identification sur laquelle il indiquera toutes les coordonnées demandées (en cas de données erronées parmi l’une des informations demandées, le Vendeur ne saurait être tenu responsable de l’impossibilité dans laquelle il pourrait être de livrer le produit).","</p>","</li>";
echo"<li>","<p>","Choix du mode de livraison","</p>","</li>";
echo"<li>","<p>","Choix du mode de paiement et acceptation des CGV","</p>","</li>";
echo"<li>","<p>","Validation du paiement","</p>","</li>";
echo "</ul>";
echo"<p>","Le Client recevra un e-mail de confirmation de commande.","</p>";
echo "<p>","Le Vendeur se réserve la propriété des articles jusqu’au règlement complet de la commande, c'est-à-dire à l’encaissement du prix de la commande par le Vendeur.","</p>";
echo "<p>","Le Vendeur se réserve le droit d’annuler ou de refuser toute commande qui émanerait d’un Client avec lequel il existerait un litige relatif au paiement d’une commande précédente. Toute commande vaut acceptation des prix et descriptions des articles disponibles à la vente.","</p>";
echo"<p>","Le Vendeur s’engage à honorer les commandes reçues sur le Site Internet seulement dans la limite des stocks disponibles, notion indiquée sur le Site.","</p>";
echo "<h2>","Modalités de paiement","</h2>";
echo"<p>","Le règlement des achats s’effectue via l’un des moyens suivants, à la convenance du Client :","</p>";

#<li>{{ mode paiement 1 }}</li>
#<li>{{ mode paiement 2 }}</li>
#<li>{{ mode paiement 3 }}</li>
#<li><p>{{ mode paiement 4 }}</p>
#<p>Le délai de traitement dans le cas d'un virement est majoré, la commande étant préparée dans ce cas dès réception des fonds.</p>



echo"<h2>","Expédition et délais de livraison","</h2>";
echo "<p>","Toute commande passée sur le Site avant 14h du lundi au vendredi (hors jours fériés) sera préparée et expédiée le jour même, sous réserve de validation du paiement.","</p>";
<p>Le Vendeur s’engage à livrer les commandes passées par le Client dans les délais prévus. Si lesdits articles n’ont pas été livrés dans un délai de 14 jours à compter de la date de livraison prévue lors de la commande, et si ce dépassement n’est pas lié à un cas de force majeure, le Client pourra procéder à la résolution de la vente, en envoyant un courrier recommandé avec accusé de réception à l’adresse suivante : {{ adresse societe }}.</p>
<p>Les sommes réglées par le Client (frais de livraison inclus) lui seront alors intégralement remboursées, dans les meilleurs délais et au plus tard 14 jours après la date de résolution.</p>
<p>Le Client dispose d’un délai de 30 jours ouvrés à compter de la date d’expédition de la commande pour signaler la non-réception et demander la résolution de la vente et le remboursement des articles.</p>
<p>Passé ce délai, aucune résolution de la vente ne sera acceptée.</p>
<p>Le Client est tenu de vérifier le bon état des articles livrés. Toute anomalie constatée (article manquant, colis endommagé, article cassé…) devra obligatoirement être indiquée dans les 4 jours suivant la réception.</p>
<p>Le Vendeur pourra demander au Client le règlement des frais de retours (~8€ ht) + frais de ré-envoi de son colis dans le cas où le Client n'aurait pas été chercher le colis mis à sa disposition par le transporteur dans les délais prévus par ce dernier (occasionnant un retour au Vendeur).</p>


?>


<h2 id="sav">SAV</h2>
<p>Le Client peut contacter à tout moment le Vendeur par e-mail : {{ mail societe }} (réponse sous 48h ouvrée) ou par téléphone du {{ jours boutique }} de {{ horaire boutique }} au {{ telephone societe }}.</p>
<h2 id="remboursement-d-lai-de-r-tractation-change-ou-retour">Remboursement, Délai de Rétractation : échange ou retour</h2>
<p>Les Clients, personnes physiques non professionnelles, bénéficient d'un délai de rétractation de 14 jours à compter de la livraison de leur commande pour faire retour du produit au Vendeur pour échange ou remboursement sans pénalité.</p>
<p>Le Client sera remboursé intégralement (prix de la commande et des frais de livraison) dans les meilleurs délais et au plus tard 14 jours après la date à laquelle il a exercé son droit de rétractation.</p>
<p><strong>Conditions d’échange et de retour pour remboursement :</strong></p>
<p>Le Client doit informer, avant tout retour, le Vendeur en retournant le formulaire ci-dessous à l'adresse suivante : {{ mail societe }}.</p>
<blockquote>
<h4 id="formulaire-de-r-tractation">FORMULAIRE DE RÉTRACTATION</h4>
<p>À l'attention de : La société {{ nom societe }}, {{ type societe }} au capital de {{ capital societe }} euros dont le siège social est situé au {{ adresse societe }} immatriculée au registre du commerce et des sociétés de {{ ville societe }} sous le numéro {{ RCS societe }}, {{ mail societe }}.</p>
<p>Je vous notifie par la présente ma rétractation du contrat portant sur la vente du bien ci-dessous :</p>
<p>Commandé le  :</p>
<p>Nom et Prénom :</p>
<p>Adresse :</p>
<p>Date :</p>
</blockquote>
<p>Les produits retournés doivent être non ouverts, en parfait état et dans leur boite d’origine. En cas de retour, les frais de port sont à la charge du Client. </p>
<p>Le Client devra conserver la preuve du dépôt du colis auprès du prestataire en charge du retour. En l’absence de cette preuve, aucun échange ou remboursement ne pourra être effectué en cas de perte du colis.</p>
<h2 id="renvoi-suite-colis-non-r-cuper-">Renvoi suite colis non récuperé</h2>
<p>Tout colis non réceptionné par le Client (exemple colis non récupéré au relais, changement d'adresse non mentionné au Vendeur) pourra entraîner la demande de paiement au Client des frais de renvoi afin que le Vendeur puisse renvoyer le colis.</p>
<h2 id="juridiction-comp-tente">Juridiction compétente</h2>
<p>Les présentes conditions générales de vente sont soumises à l'application du droit français. Les informations contractuelles sont présentées en langue française et les produits proposés à la vente sont conformes à la législation française.</p>
<p>Le tribunal de {{ ville societe }} est seul compétent pour tout litige provenant de l'application des présentes conditions générales de vente.</p>
<h2 id="protection-des-mineurs">Protection des mineurs</h2>
<p>La vente des produits spiritueux du Site est strictement réservée aux personnes désignées comme majeures par leur législation nationale (dix-huit ans pour la France).</p>
</li>
</ul>
