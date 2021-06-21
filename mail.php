<?php
if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['message'])) {
    mail('b.piedallu@ecole-ipssi.net', $_POST['prenom'] . ' ' . $_POST['nom'],
    'From : ' . $_POST['email'] . "\n\n" . $_POST['message']);
}
?>
