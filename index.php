<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP Test </title>
</head>
<body>

<?php
                                        // Creare una variabile con un paragrafo di testo.
                                        // Visualizzare a schermo il paragrafo con la relativa 
                                        // lunghezza e sostituire la badword passata in GET con
                                        //  tre *.

   $sentence = '<p> lorem ipsum dolor et amam lollipop nice one gigan titan judy v panam </p>';
   $badword = $_GET['badword'];
   $replacedSentence = str_replace($badword, '***', $sentence);
   echo $replacedSentence;
   var_dump($replacedSentence); die();
?>

</body>
</html>