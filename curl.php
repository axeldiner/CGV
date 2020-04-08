<?php
$curl = curl_init('https://entreprise.data.gouv.fr/api/rncs/v1/fiches_identite/827905522');
$data = curl_exec($curl);
if ($data===false) {
var_dump(curl_error($curl));
}
else {
$data = json.decode($data, true);
echo '<pre>';
var_dump($data[dossier_entreprise_greffe_principal][code_greffe]);
echo '<pre>';
}
curl_close($curl);
?>
