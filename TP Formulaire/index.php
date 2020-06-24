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

if (isset($_POST['birthDate'])) {
  if (!preg_match("/^(1|2){1}[0-9]{3}\-[0-9]{2}\-[0-9]{2}$/", $_POST['birthDate'])) {
    $error['birthDate'] = 'Mauvais format';
  }
  if (empty($_POST['birthDate'])) {
    $error['birthDate'] = 'Veuillez renseigner le champ';
  };
}


if (isset($_POST['birthCountry'])) {
  $userBirthCountry = htmlspecialchars($_POST['birthCountry']);
  if (!preg_match("/^[A-Z]{0,1}[a-zéèêëiîïôöüäç]{2,25}$/", $userBirthCountry)) {
    $error['birthCountry'] = 'Mauvais format';
  }
  if (empty($_POST['birthCountry'])) {
    $error['birthCountry'] = 'Veuillez renseigner le champ';
  };
}

if (isset($_POST['nationality'])) {
  $userNationality = htmlspecialchars($_POST['nationality']);
  if (!preg_match("/^[A-Z]{0,1}[a-zéèêëiîïôöüäç]{2,25}$/", $userNationality)) {
    $error['birthDate'] = 'Mauvais format';
  }
  if (empty($_POST['nationality'])) {
    $error['nationality'] = 'Veuillez renseigner le champ';
  };
}

if (isset($_POST['adresse'])) {
  $userAdresse = htmlspecialchars($_POST['adresse']);
  if (!preg_match("/^[1-9]{1}+[0-9]{0,2}[, ]{1}[ a-zA-Zéèêëiîïôöüäç]{1,11}[, \"-]{1}?[ a-zA-Zéèêëiîïôöüäç]{2,12}?[, \"-]{0,1}?[ a-zA-Zéèêëiîïôöüäç]{0,12}?[, \"-]{0,1}?[ a-zA-Zéèêëiîïôöüäç]{1,12}?$/", $userAdresse)) {
    $error['adresse'] = 'Mauvais format';
  }
  if (empty($_POST['nationality'])) {
    $error['adresse'] = 'Veuillez renseigner le champ';
  };
}

if (isset($_POST['email'])) {
  $userEmail = htmlspecialchars($_POST['email']);
  if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
    $error['email'] = 'Mauvais format';
  }
  if (empty($_POST['email'])) {
    $error['email'] = 'Veuillez renseigner le champ';
  };
}

if (isset($_POST['phoneNumber'])) {
  $userPhoneNumber = htmlspecialchars($_POST['phoneNumber']);
  if (!preg_match("/(0)+[0-9]{1}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}/", $userPhoneNumber)) {
    $error['phoneNumber'] = 'Mauvais format';
  }
  if (empty($_POST['phoneNumber'])) {
    $error['phoneNumber'] = 'Veuillez renseigner le champ';
  };
}

if (isset($_POST['submitBtn'])) {
  if (!array_key_exists('graduation', $_POST)) {
    $error['graduation'] = 'Veuillez choisir une option';
  };
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

if (isset($_POST['submitBtn'])) {
  if (!array_key_exists('radioBtn', $_POST)) {
    $error['radioBtn'] = 'Veuillez selectionner une option';
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
          <p>NOM : <?= htmlspecialchars($_POST['lastName']) ?></p>
          <p>Prénom : <?= htmlspecialchars($_POST['firstName']) ?></p>
          <p>Pays de naissance : <?= htmlspecialchars($_POST['birthCountry']) ?></p>
          <p>Date de naissance : <?= htmlspecialchars($_POST['birthDate']) ?></p>
          <p>Nationnalité : <?= htmlspecialchars($_POST['nationality']) ?></p>
          <p>Adresse postale : <?= htmlspecialchars($_POST['adresse']) ?></p>
          <p>e-mail : <?= htmlspecialchars($_POST['email']) ?></p>
          <p>numéro de téléphone : <?= htmlspecialchars($_POST['phoneNumber']) ?></p>
          <p>Diplôme : <?= htmlspecialchars($_POST['graduation']) ?></p>
          <p>Numéro Pôle-Emploi : <?= htmlspecialchars($_POST['poleEmploiNumber']) ?></p>
          <p>Lien codecademy : <?= htmlspecialchars($_POST['codeCadLink']) ?></p>
          <p>Nombre de badges codecademy : <?= htmlspecialchars($_POST['badgeNumber']) ?></p>
          <p>Si vous étiez un super héros/une super héroïne : <?= htmlspecialchars($_POST['heroQuestion']) ?></p>
          <p>Votre hack: <?= htmlspecialchars($_POST['hackQuestion']) ?></p>
          <p>Vos expériences en programmation : <?= htmlspecialchars($_POST['radioBtn']) ?></p>



        <?php } else { ?>

          <form method="post" action="" novalidate>
            <div class="row">
              <div class="col">
                <label for="firstNameInpt">Prénom</label>
                <input type="text" required class="form-control" id="firstNameInpt" name="firstName" placeholder="Veuillez renseigner votre Prénom" value="<?= isset($_POST['firstName']) ? $_POST['firstName'] : '' ?>">
              </div>
            </div>
            <div class="text-danger"><?= isset($error['firstName']) ? $error['firstName'] : '' ?></div>

            <div class="row">
              <div class="col">
                <label for="lastNameInpt" class="mt-3">Nom</label>
                <input type="text" required class="form-control" id="lastNameInpt" placeholder="Veuillez renseigner votre Nom" name="lastName" value="<?= isset($_POST['lastName']) ? $_POST['lastName'] : '' ?>">
              </div>
            </div>
            <div class="text-danger"><?= isset($error['lastName']) ? $error['lastName'] : '' ?></div>

            <div class="row mt-3">
              <div class="col">
                <label for="birthDayInpt">Date de naissance</label>
                <input type="date" required class="form-control" id="birthDayInpt" name="birthDate" value="<?= isset($_POST['birthDate']) ? $_POST['birthDate'] : '' ?>">
              </div>
            </div>
            <div class="text-danger"><?= isset($error['birthDate']) ? $error['birthDate'] : '' ?></div>

            <div class="row mt-3">
              <div class="col">
                <label for="birthPlaceInpt">Pays de naissance</label>
                <input type="text" required class="form-control" id="birthPlaceInpt" name="birthCountry" placeholder="exemple : France" value="<?= isset($_POST['birthCountry']) ? $_POST['birthCountry'] : '' ?>">
              </div>
            </div>
            <div class="text-danger"><?= isset($error['birthCountry']) ? $error['birthCountry'] : '' ?></div>

            <div class="row mt-3">
              <div class="col">
                <label for="nationalityInpt">Nationnalité</label>
                <input type="text" required class="form-control" id="nationalityInpt" name="nationality" placeholder="exemple : Française" value="<?= isset($_POST['nationality']) ? $_POST['nationality'] : '' ?>">
              </div>
            </div>
            <div class="text-danger"><?= isset($error['nationality']) ? $error['nationality'] : '' ?></div>

            <div class="row mt-3">
              <div class="col">
                <label for="nationalityInpt">Adresse</label>
                <input type="text" required class="form-control" id="adresseInpt" name="adresse" placeholder="exemple : 23 rue de la Fosse, 76600 Le Havre" value="<?= isset($_POST['adresse']) ? $_POST['adresse'] : '' ?>">
              </div>
            </div>
            <div class="text-danger"><?= isset($error['adresse']) ? $error['adresse'] : '' ?></div>

            <div class="row mt-3">
              <div class="col">
                <label for="emailInpt">E-mail</label>
                <input type="email" required class="form-control" id="emailInpt" name="email" placeholder="johndoe@nonamemail.com" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>">
              </div>
            </div>
            <div class="text-danger"><?= isset($error['email']) ? $error['email'] : '' ?></div>

            <div class="row mt-3">
              <div class="col-sm-6">
                <label for="telInpt">Téléphone</label>
                <input type="text" required class="form-control" id="telInpt" name="phoneNumber" placeholder="exemple : 0249987293" value="<?= isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '' ?>">
              </div>
            </div>
            <div class="text-danger"><?= isset($error['phoneNumber']) ? $error['phoneNumber'] : '' ?></div>

            <div class="row mt-3">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="graduation" class="text-secondary font-weight-bold">Diplôme</label>
                  <select class="form-control" id="graduation" name="graduation" required>
                    <option selected disabled>--</option>
                    <option value="none" <?= isset($_POST['graduation']) && ($_POST['graduation']) == 'none'  ? 'selected' : '' ?>>Sans</option>
                    <option value="bac" <?= isset($_POST['graduation']) && ($_POST['graduation']) == 'bac'  ? 'selected' : '' ?>>Bac</option>
                    <option value="bac+2" <?= isset($_POST['graduation']) && ($_POST['graduation']) == 'bac+2'  ? 'selected' : '' ?>>Bac+2</option>
                    <option value="bac+3" <?= isset($_POST['graduation']) && ($_POST['graduation']) == 'bac+3'  ? 'selected' : '' ?>>Bac+3</option>
                    <option value="Supérieur" <?= isset($_POST['graduation']) && ($_POST['graduation']) == 'Supérieur'  ? 'selected' : '' ?>>Supérieur</option>
                  </select>
                  <div class="text-danger"><?= isset($error['graduation']) ? $error['graduation'] : '' ?></div>
                </div>

                <div class="row mt-3">
                  <div class="col-sm-6">
                    <label for="poleEmpInpt">Numéro Pôle-Emploi</label>
                    <input type="text" required class="form-control" id="poleEmpInpt" name="poleEmploiNumber" placeholder="exemple : 03998361" value="<?= isset($_POST['poleEmploiNumber']) ? $_POST['poleEmploiNumber'] : '' ?>">
                  </div>
                </div>
                <div class="text-danger"><?= isset($error['poleEmploiNumber']) ? $error['poleEmploiNumber'] : '' ?></div>

                <div class="row mt-3">
                  <div class="col-sm-6">
                    <label for="codeCadinpt">Lien codecademy</label>
                    <input type="text" required class="form-control" id="codeCadinpt" name="codeCadLink" placeholder="Veuillez renseignez votre lien" value="<?= isset($_POST['codeCadLink']) ? $_POST['codeCadLink'] : '' ?>">
                  </div>
                </div>
                <div class="text-danger"><?= isset($error['codeCadLink']) ? $error['codeCadLink'] : '' ?></div>

                <div class="row mt-3">
                  <div class="col-sm-6">
                    <label for="codeBadgeInpt">Nombre de badges codecademy</label>
                    <input type="text" required class="form-control" id="codeBadgeInpt" name="badgeNumber" placeholder="Veuillez renseignez votre nombre de badges" value="<?= isset($_POST['badgeNumber']) ? $_POST['badgeNumber'] : '' ?>">
                  </div>
                </div>
                <div class="text-danger"><?= isset($error['badgeNumber']) ? $error['badgeNumber'] : '' ?></div>

                <div>
                  <label class="mt-3" for="codeBadgeInpt">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
                  <textarea class="form-control" required aria-label="With textarea" name="heroQuestion" placeholder="Entrez votre réponse"><?= isset($_POST['heroQuestion']) ? $_POST['heroQuestion'] : '' ?></textarea>
                </div>
                <div class="text-danger"><?= isset($error['heroQuestion']) ? $error['heroQuestion'] : '' ?></div>

                <div>
                  <label class="mt-3" for="codeBadgeInpt">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique).</label>
                  <textarea class="form-control" required aria-label="With textarea" name="hackQuestion" placeholder="Entrez votre réponse"><?= isset($_POST['hackQuestion']) ? $_POST['hackQuestion'] : '' ?></textarea>
                </div>
                <div class="text-danger"><?= isset($error['hackQuestion']) ? $error['hackQuestion'] : '' ?></div>

                <div>
                  <label class="mt-3" for="codeBadgeInpt">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                </div>

                <div class="input-group-text col-3 text-center">
                  <input type="radio" id="yes" value="yes" name="radioBtn" class="ml-2" <?= isset($_POST['radioBtn']) && ($_POST['radioBtn']) == 'yes'  ? 'checked' : '' ?>>
                  <label for="yes" class="mr-5 ml-2">OUI</label>
                  <input type="radio" id="no" value="no" name="radioBtn" <?= isset($_POST['radioBtn']) && ($_POST['radioBtn']) == 'no'  ? 'checked' : '' ?>>
                  <label for="no" class="ml-2">NON</label>
                </div>
                <div class="text-danger"><?= isset($error['radioBtn']) ? $error['radioBtn'] : '' ?></div>

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