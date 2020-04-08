<?php

$APIRCSA = 'https://entreprise.data.gouv.fr/api/rncs/v1/fiches_identite/827905522'.RCS;
$curl = curl_init($APIRCSA);
$data = curl_exec($curl);
if ($data===false) {
var_dump(curl_error($curl));
}
else {
$data = json.decode($data, true);
define("NAMESOC", $data[dossier_entreprise_greffe_principal][etablissements][1][nom_commercial]);
efine("CAPITAL", $data[dossier_entreprise_greffe_principal][etablissement_principal[capital]);
define("ADRESSSOC", $data[dossier_entreprise_greffe_principal][etablissements][0][adresse_ligne_1].$data[dossier_entreprise_greffe_principal][etablissements][0][adresse_code_postal].$data[dossier_entreprise_greffe_principal][etablissements][0][adresse_ville]);
define("VILLESOC", $data[dossier_entreprise_greffe_principal][code_greffe]);

echo '<pre>';
var_dump($data[dossier_entreprise_greffe_principal][code_greffe]);
echo '<pre>';
}
curl_close($curl);
?>
