<?php
$error = array();

if (isset($_POST['submitBtn'])) {
  if (!array_key_exists('gender', $_POST)) {
    $error['gender'] = 'Veuillez choisir une option';
  };
}

if (isset($_POST['lastName'])) {
  $userLastName = htmlspecialchars($_POST['lastName']);
  if (!preg_match("/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð-]{0,18}+$/u", $userLastName)) {
    $error['lastName'] = 'Mauvais format';
  }
  if (empty($_POST['lastName'])) {
    $error['lastName'] = 'Veuillez renseigner le champ';
  };
}

if (isset($_POST['firstName'])) {
  $userFirstName = htmlspecialchars($_POST['firstName']);
  if (!preg_match("/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð-]{0,18}+$/u", $userFirstName)) {
    $error['firstName'] = 'Mauvais format';
  }
  if (empty($_POST['firstName'])) {
    $error['firstName'] = 'Veuillez renseigner le champ';
  };
}

if (isset($_POST['age'])) {
  $userAge = htmlspecialchars($_POST['age']);
  if ($userAge <= 0 ||  $userAge >= 130) {
    $error['age'] = 'Vous semblez avoir un âge incorrect';
  }
  if (empty($_POST['age'])) {
    $error['age'] = 'Veuillez renseigner le champ';
  };
}

if (isset($_POST['company'])) {
  $userFirstName = htmlspecialchars($_POST['company']);
  if (!preg_match("/^[ a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð-]{0,18}+$/u", $userFirstName)) {
    $error['company'] = 'Mauvais format';
  }
  if (empty($_POST['company'])) {
    $error['company'] = 'Veuillez renseigner le champ';
  };
}

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
        <div class="h1 text-center">Formulaire</div>

        <?php if (!empty($_POST) && count($error) < 1) { ?>
          <p>Vous avez bien été enregistré !</p>
          <p>Civilité : <?= htmlspecialchars($_POST['gender']) ?></p>
          <p>Nom : <?= htmlspecialchars($_POST['lastName']) ?></p>
          <p>Prénom : <?= htmlspecialchars($_POST['firstName']) ?></p>
          <p>Âge : <?= htmlspecialchars($_POST['age']) ?></p>
          <p>Société : <?= htmlspecialchars($_POST['company']) ?></p>
        <?php } ?>

        <form method="post" action="">


          <div class="row mt-3">
            <div class="col-sm-6">
              <label for="gender" class="text-secondary font-weight-bold">Civilité</label>
              <select class="form-control" id="gender" name="gender" required>
                <option selected disabled>--</option>
                <option value="Mme" <?= isset($_POST['gender']) && ($_POST['gender']) == 'Mme'  ? 'selected' : '' ?>>Mme</option>
                <option value="M." <?= isset($_POST['gender']) && ($_POST['gender']) == 'M.'  ? 'selected' : '' ?>>M.</option>
              </select>
              <div class="text-danger"><?= isset($error['gender']) ? $error['gender'] : '' ?></div>


              <div class="row">
                <div class="col mt-3">
                  <label for="lastNameInpt" class="font-weight-bold">Nom</label>
                  <input type="text" required class="form-control" id="lastNameInpt" placeholder="Veuillez renseigner votre Nom" name="lastName" value="<?= isset($_POST['lastName']) ? $_POST['lastName'] : '' ?>">
                </div>
              </div>
              <div class="text-danger"><?= isset($error['lastName']) ? $error['lastName'] : '' ?></div>

              <div class="row mt-3">
                <div class="col font-weight-bold">
                  <label for="firstNameInpt">Prénom</label>
                  <input type="text" required class="form-control" id="firstNameInpt" name="firstName" placeholder="Veuillez renseigner votre Prénom" value="<?= isset($_POST['firstName']) ? $_POST['firstName'] : '' ?>">
                </div>
              </div>
              <div class="text-danger"><?= isset($error['firstName']) ? $error['firstName'] : '' ?></div>

              <div class="row">
                <div class="col mt-3">
                  <label for="ageInpt">Âge</label>
                  <input type="text" required class="form-control" id="ageInpt" name="age" placeholder="Veuillez renseigner votre âge" value="<?= isset($_POST['age']) ? $_POST['age'] : '' ?>">
                </div>
              </div>
              <div class="text-danger"><?= isset($error['age']) ? $error['age'] : '' ?></div>

              <div class="row">
                <div class="col mt-3">
                  <label for="compagnyInpt">Société</label>
                  <input type="text" required class="form-control" id="compagnyInpt" name="company" placeholder="Veuillez renseignez le nom de votre société" value="<?= isset($_POST['company']) ? $_POST['company'] : '' ?>">
                </div>
              </div>
              <div class="text-danger"><?= isset($error['company']) ? $error['company'] : '' ?></div>

              <button type="submit" class="btn btn-dark mt-3" name="submitBtn">Valider le formulaire</button>

            </div>
          </div>
      </div>
    </div>





    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>