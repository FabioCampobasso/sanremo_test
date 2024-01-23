<?php
$filename = 'click_lasad.json';

// Leggere il file JSON esistente
if (file_exists($filename)) {
    $data = json_decode(file_get_contents($filename), true);
    $data['totalClicks']++;

    // Salvare il file JSON aggiornato
    file_put_contents($filename, json_encode($data));
    echo "Click registrato. Totale Click: " . $data['totalClicks'];
} else {
    echo "Errore: File non trovato.";
}
?>
