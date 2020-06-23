<?php
$error = array();

if (isset($_POST['firstName'])) {
  $userFirstName = htmlspecialchars($_POST['firstName']);
  if (!preg_match("/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð-]{0,18}+$/u", $userFirstName)) {
    $error['firstName'] = 'Mauvais format';
  }
  if (empty($_POST['firstName'])) {
    $error['firstName'] = 'Veuillez renseigner le champ';
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

if (isset($_POST['gender'])) {
  $userGender = htmlspecialchars($_POST['gender']);
  $userGenderError = '';
} if (empty($_POST['gender'])) {
  $error['gender'] = 'Veuillez choisir une option';
}

if (isset($_POST['poleEmploiNumber'])) {
  $userPoleEmploiNumber = htmlspecialchars($_POST['poleEmploiNumber']);
  if (!preg_match("/^[0-9]{7}[a-zA-Z]{1}+$/", $userPoleEmploiNumber)) {
    $error['poleEmploiNumber'] = 'Mauvais format';
  }
  if (empty($_POST['poleEmploiNumber'])) {
    $error['poleEmploiNumber'] = 'Veuillez renseigner le champ';
  };
}

if (isset($_POST['codeCadLink'])) {
  $userCodeCadLink = htmlspecialchars($_POST['codeCadLink']);
  if ((filter_var($userCodeCadLink, FILTER_VALIDATE_URL) !== false)) {
    $error['codeCadLink'] = 'Mauvais format';
  }
  if (empty($_POST['codeCadLink'])) {
    $error['codeCadLink'] = 'Veuillez renseigner le champ';
  };
}

if (isset($_POST['badgeNumber'])) {
  $userBadgeNumber = htmlspecialchars($_POST['badgeNumber']);
  if (!preg_match("/[0-9]{1}+[0]?/", $userBadgeNumber)) {
    $error['badgeNumber'] = 'Mauvais format';
  }
  if (empty($_POST['badgeNumber'])) {
    $error['badgeNumber'] = 'Veuillez renseigner le champ';
  };
}

if (isset($_POST['heroQuestion'])) {
  if (empty($_POST['heroQuestion'])) {
    $error['heroQuestion'] = 'Veuillez renseigner le champ';
  };
}

if (isset($_POST['hackQuestion'])) {
  if (empty($_POST['hackQuestion'])) {
    $error['hackQuestion'] = 'Veuillez renseigner le champ';
  };
}

if (isset($_POST['radioBtn'])) {
  if (empty($_POST['radioBtn'])) {
    $error['radioBtn'] = 'Veuillez renseigner le champ';
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
          

        <?php } else { ?>

          <form method="post" action="" novalidate>

            <div class="row mt-3">
              <div class="col-sm-6">
                <label for="genderInpt">Civilité</label>
                <select class="form-control" required id="genderInpt" name="gender">
                  <option value="blank"></option>
                  <option value="Mme" <?= isset($_POST['gender']) && ($_POST['gender']) == 'none'  ? 'selected' : '' ?>>Mme</option>
                  <option value="M." <?= isset($_POST['gender']) && ($_POST['gender']) == 'bac'  ? 'selected' : '' ?>>M.</option>
                </select>
              </div>
            </div>
            <div class="text-danger"><?= isset($error['gender']) ? $error['gender'] : '' ?></div>

            <div class="row">
              <div class="col">
                <label for="lastNameInpt" class="mt-3">Nom</label>
                <input type="text" required class="form-control" id="lastNameInpt" placeholder="Veuillez renseigner votre Nom" name="lastName" value="<?= isset($_POST['lastName']) ? $_POST['lastName'] : '' ?>">
              </div>
            </div>
            <div class="text-danger"><?= isset($error['lastName']) ? $error['lastName'] : '' ?></div>

            <div class="row">
              <div class="col">
                <label for="firstNameInpt">Prénom</label>
                <input type="text" required class="form-control" id="firstNameInpt" name="firstName" placeholder="Veuillez renseigner votre Prénom" value="<?= isset($_POST['firstName']) ? $_POST['firstName'] : '' ?>">
              </div>
            </div>
            <div class="text-danger"><?= isset($error['firstName']) ? $error['firstName'] : '' ?></div>

            <div class="row mt-3">
              <div class="col">
                <label for="ageInpt">Âge</label>
                <input type="text" required class="form-control" id="ageInpt" name="age" placeholder="Veuillez renseigner votre âge" value="<?= isset($_POST['age']) ? $_POST['age'] : '' ?>">
              </div>
            </div>
            <div class="text-danger"><?= isset($error['age']) ? $error['age'] : '' ?></div>

            <div class="row mt-3">
              <div class="col-sm-6">
                <label for="compagnyInpt">Société</label>
                <input type="text" required class="form-control" id="compagnyInpt" name="company" placeholder="Veuillez renseignez le nom de votre société" value="<?= isset($_POST['company']) ? $_POST['company'] : '' ?>">
              </div>
            </div>
            <div class="text-danger"><?= isset($error['company']) ? $error['company'] : '' ?></div>

            <button type="submit" class="btn btn-dark mt-3" name="submitBtn">Valider le formulaire</button>
          </form>
      </div>
    </div>
  </div>
  </div>


  
<?php } ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>