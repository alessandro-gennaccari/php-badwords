<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza
e sostituire la badword passata in GET con tre *. -->

<?php
    $text = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus, veniam ipsa ullam eos fugiat nobis sit';
    // Andra ad associare alla query badword=
    $bad = $_GET['badword'];
    // Sostituisce la selezione della query con 3*
    $text = str_replace($bad, '***', $text);
    // In questa posizione per fa calcolare sempre la nuova lunghezza.
    $textLength = strlen($text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primi passi</title>
</head>
<body>
    
    <div>
        <p><?php echo $text;?></p>
        <p><?php echo 'Lunghezza: ' .$textLength ;?></p>
    </div>

</body>
</html>