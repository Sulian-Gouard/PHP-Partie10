<?php
$portraitsArray = array(
  $portrait1 = [
    'name' => 'Victor',
    'firstname' => 'Hugo',
    'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg'
  ],

  $portrait2 = [
    'name' => 'Jean',
    'firstname' => 'de La Fontaine',
    'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg'
  ],

  $portrait3 = [
    'name' => 'Pierre',
    'firstname' => 'Corneille',
    'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg'
  ],

  $portrait4 = [
    'name' => 'Jean',
    'firstname' => 'Racine',
    'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg'
  ],
);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <title>TP Formulaire</title>
</head>

<body>

  <div class="container p-4 col-sm-8 bg-light">
    <div class="col-sm-12">
      <div class="row-sm-justify-content-center">
        
     <?php foreach ($portraitsArray as $key => $value) { ?> 
      <p style="font-weight: bold;"><?= $value['name'] . ' '. $value['firstname'] ?></p>
        <p><img src="<?= $value['portrait'] ?>" alt="" width="320" height="400"></p>

<?php } ?>

      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>