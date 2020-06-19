<?php


if (isset($_POST['firstName'])) {
  $userFirstName = htmlspecialchars($_POST['firstName']);
  if (preg_match("/[a-zA-Zéèêëiîïôöüäç]{2,12}[-]?[a-zA-Zéèêëiîïôöüäç]{2,12}/", $userFirstName)) {
    $userFirstNameError = '';
  } else {
    $userFirstNameError = 'Informations non valides';
  }
} else {
  $userFirstNameError = 'Veuillez remplir le champ';
}

if (isset($_POST['lastName'])) {
  $userLastName = htmlspecialchars($_POST['lastName']);
  if (preg_match("/[a-zA-Zéèêëiîïôöüäç ]{1,15}[- \"]{0,1}[a-zA-Zéèêëiîïôöüäç ]{0,18}[- \"]{0,1}[a-zA-Zéèêëiîïôöüäç ]{1,10}/", $userLastName)) {
    $userLastNameError = '';
  } else {
    $userLastNameError = 'Informations non valides';
  }
} else {
  $userLastNameError = 'Veuillez remplir le champ';
}

if (isset($_POST['birthDate'])) {
  $userBirthDate = htmlspecialchars($_POST['birthDate']);
  if (preg_match("/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/", $userBirthDate)) {
    $userBirthDateError = '';
  } else {
    $userBirthDateError = 'Informations non valides';
  }
} else {
  $userBirthDateError = 'Veuillez remplir le champ';
}

if (isset($_POST['birthCountry'])) {
  $userBirthCountry = htmlspecialchars($_POST['birthCountry']);
  if (preg_match("/^[A-Z]{0,1}[a-zéèêëiîïôöüäç]{2,25}$/", $userBirthCountry)) {
    $userBirthCountryError = '';
  } else {
    $userBirthCountryError = 'Informations non valides';
  }
} else {
  $userBirthCountryError = 'Veuillez remplir le champ';
}

if (isset($_POST['nationality'])) {
  $userNationality = htmlspecialchars($_POST['nationality']);
  if (preg_match("/^[A-Z]{0,1}[a-zéèêëiîïôöüäç]{2,25}$/", $userNationality)) {
    $userNationalityError = '';
  } else {
    $userNationalityError = 'Informations non valides';
  }
} else {
  $userNationalityError = 'Veuillez remplir le champ';
}

if (isset($_POST['adresse'])) {
  $userAdress = htmlspecialchars($_POST['adresse']);
  if (preg_match("/^[A-Z]{0,1}[a-zéèêëiîïôöüäç]{2,25}$/", $userAdress)) {
    $userAdressError = '';
  } else {
    $userAdressError = 'Informations non valides';
  }
} else {
  $userAdressError = 'Veuillez remplir le champ';
}

if (isset($_POST['email'])) {
  $userEmail = htmlspecialchars($_POST['email']);
  if (preg_match("/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/", $userEmail)) {
    $userEmailError = '';
  } else {
    $userEmailError = 'Informations non valides';
  }
} else {
  $userEmailError = 'Veuillez remplir le champ';
}

if (isset($_POST['phoneNumber'])) {
  $userPhoneNumber = htmlspecialchars($_POST['phoneNumber']);
  if (preg_match("/(0)+[0-9]{1}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}/", $userPhoneNumber)) {
    $userPhoneNumberError = '';
  } else {
    $userPhoneNumberError = 'Informations non valides';
  }
} else {
  $userPhoneNumberError = 'Veuillez remplir le champ';
}

if (isset($_POST['graduationLvl'])) {
  $userGraduationLvl = htmlspecialchars($_POST['graduationLvl']);
  $userGraduationLvlError = '';
} else {
  $userGraduationLvlError = 'Veuillez selectionner une option';
}

if (isset($_POST['poleEmploiNumber'])) {
  $userPoleEmploiNumber = htmlspecialchars($_POST['poleEmploiNumber']);
  if (preg_match("/[0-9]{7}[a-zA-Z]{1}/", $userPoleEmploiNumber)) {
    $userPoleEmploiNumberError = '';
  } else {
    $userPoleEmploiNumberError = 'Informations non valides';
  }
} else {
  $userPoleEmploiNumberError = 'Veuillez remplir le champ';
}

if (isset($_POST['codeCadLink'])) {
  $userCodeCadLink = htmlspecialchars($_POST['codeCadLink']);
  if (preg_match("/https?:\/\/(www\.)?(codecademy)\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&\/\/=]*)/", $userCodeCadLink)) {
    $userCodeCadLinkError = '';
  } else {
    $userCodeCadLinkError = 'Informations non valides';
  }
} else {
  $userCodeCadLinkError = 'Veuillez remplir le champ';
}

if (isset($_POST['badgeNumber'])) {
  $userBadgeNumber = htmlspecialchars($_POST['badgeNumber']);
  if (preg_match("/[0-9]{1}+[0]?/", $userBadgeNumber)) {
    $userBadgeNumberError = '';
  } else {
    $userBadgeNumberError = 'Informations non valides';
  }
} else {
  $userBadgeNumberError = 'Veuillez remplir le champ';
}

if (isset($_POST['heroQuestion'])) {
  $userHeroQuestion = htmlspecialchars($_POST['heroQuestion']);
  if (preg_match("/^[a-zA-ZéèêëiîïôöüäçÉÀÂÛÔÎÙÈÊ\" -,!.;:?()]{20,150}$/", $userHeroQuestion)) {
    $userHeroQuestionError = '';
  } else {
    $userHeroQuestionError = 'Informations non valides';
  }
} else {
  $userHeroQuestionError = 'Veuillez remplir le champ';
}

if (isset($_POST['hackQuestion'])) {
  $userHackQuestion = htmlspecialchars($_POST['hackQuestion']);
  if (preg_match("/^[a-zA-ZéèêëiîïôöüäçÉÀÂÛÔÎÙÈÊ\" -,!.;:?()]{20,150}$/", $userHackQuestion)) {
    $userHackQuestionError = '';
  } else {
    $userHackQuestionError = 'Informations non valides';
  }
} else {
  $userHackQuestionError = 'Veuillez remplir le champ';
}

if (isset($_POST['expQuestion'])) {
  $userExpQuestion = htmlspecialchars($_POST['expQuestion']);
  if (preg_match("/^[a-zA-ZéèêëiîïôöüäçÉÀÂÛÔÎÙÈÊ\" -,!.;:?()]{20,150}$/", $userExpQuestion)) {
    $userExpQuestionError = '';
  } else {
    $userExpQuestionError = 'Informations non valides';
  }
} else {
  $userExpQuestionError = 'Veuillez remplir le champ';
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

        <form method="post" action="">
          <div class="row">
            <div class="col">
              <label for="firstNameInpt">Prénom</label>
              <input type="text" class="form-control" id="firstNameInpt" name="firstName" placeholder="Veuillez renseigner votre Prénom" value=<?= !isset($userFirstName) ? '' : $userFirstName ?>>
            </div>
          </div>
          <div class="text-warning"><?= $userFirstNameError ?></div>

          <div class="row">
            <div class="col">
              <label for="lastNameInpt" class="mt-3">Nom</label>
              <input type="text" class="form-control" id="lastNameInpt" placeholder="Veuillez renseigner votre Nom" name="lastName" value=<?= !isset($userLastName) ? '' : $userLastName ?>>
            </div>
          </div>
          <div class="text-warning"><?= $userLastNameError ?></div>

          <div class="row mt-3">
            <div class="col">
              <label for="birthDayInpt">Date de naissance</label>
              <input type="date" class="form-control" id="birthDayInpt" name="birthDate" value=<?= !isset($userBirthDate) ? '' : $userBirthDate ?>>
            </div>
          </div>
          <div class="text-warning"><?= $userBirthDateError ?></div>

          <div class="row mt-3">
            <div class="col">
              <label for="birthPlaceInpt">Pays de naissance</label>
              <input type="text" class="form-control" id="birthPlaceInpt" name="birthCountry" placeholder="exemple : France" value=<?= !isset($userbirthCountry) ? '' : $userbirthCountry ?>>
            </div>
          </div>
          <div class="text-warning"><?= $userBirthCountryError ?></div>

          <div class="row mt-3">
            <div class="col">
              <label for="nationalityInpt">Nationnalité</label>
              <input type="text" class="form-control" id="nationalityInpt" name="nationality" placeholder="exemple : Française" value=<?= !isset($userNationality) ? '' : $userNationality ?>>
            </div>
          </div>
          <div class="text-warning"><?= $userNationalityError ?></div>

          <div class="row mt-3">
            <div class="col">
              <label for="nationalityInpt">Adresse</label>
              <input type="text" class="form-control" id="adresseInpt" name="adresse" placeholder="exemple : 23 rue de la Fosse, 76600 Le Havre" value=<?= !isset($userAdress) ? '' : $userAdress ?>>
            </div>
          </div>
          <div class="text-warning"><?= $userAdressError ?></div>

          <div class="row mt-3">
            <div class="form-group col-sm-6">
              <label for="emailInpt">E-mail</label>
              <input type="email" class="form-control" id="emailInpt" name="email" placeholder="johndoe@nonamemail.com" value=<?= !isset($userEmail) ? '' : $userEmail ?>>
            </div>
          </div>
          <div class="text-warning"><?= $userEmailError ?></div>

          <div class="row">
            <div class="col-sm-6">
              <label for="telInpt">Téléphone</label>
              <input type="text" class="form-control" id="telInpt" name="phoneNumber" placeholder="exemple : 0249987293" value=<?= !isset($userPhoneNumber) ? '' : $userPhoneNumber ?>>
            </div>
          </div>
          <div class="text-warning"><?= $userPhoneNumberError ?></div>

          <div class="row mt-3">
            <div class="col-sm-6">
              <label for="graduationInpt">Diplôme</label>
              <select class="form-control" id="graduationInpt" name="graduationLvl" value=<?= !isset($userGraduationLvl) ? '' : $userGraduationLvl ?>>
                <option></option>
                <option>sans</option>
                <option>Bac</option>
                <option>Bac+2</option>
                <option>Bac+3 ou supérieur</option>
              </select>
            </div>
          </div>
          <div class="text-warning"><?= $userGraduationLvlError ?></div>

          <div class="row mt-3">
            <div class="col-sm-6">
              <label for="poleEmpInpt">Numéro Pôle-Emploi</label>
              <input type="text" class="form-control" id="poleEmpInpt" name="poleEmploiNumber" placeholder="exemple : 03998361"  value=<?= !isset($userPoleEmploiNumber) ? '' : $userPoleEmploiNumber ?>>
            </div>
          </div>
          <div class="text-warning"><?= $userPoleEmploiNumberError ?></div>

          <div class="row mt-3">
            <div class="col-sm-6">
              <label for="codeCadinpt">Lien codecademy</label>
              <input type="text" class="form-control" id="codeCadinpt" name="codeCadLink" placeholder="Veuillez renseignez votre lien" value=<?= !isset($userPoleEmploiNumber) ? '' : $userPoleEmploiNumber ?>>
            </div>
          </div>
          <div class="text-warning"><?= $userCodeCadLinkError ?></div>

          <div class="row mt-3">
            <div class="col-sm-6">
              <label for="codeBadgeInpt">Nombre de badges codecademy</label>
              <input type="text" class="form-control" id="codeBadgeInpt" name="badgeNumber" placeholder="Veuillez renseignez votre nombre de badges" value=<?= !isset($userBadgeNumber) ? '' : $userBadgeNumber ?>>
            </div>
          </div>
          <div class="text-warning"><?= $userBadgeNumberError ?></div>

          <div>
            <label class="mt-3" for="codeBadgeInpt">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
            <textarea class="form-control" aria-label="With textarea" name="heroQuestion" placeholder="Entrez votre réponse"></textarea>
          </div>
          <div class="text-warning"><?= $userHeroQuestionError ?></div>

          <div>
            <label class="mt-3" for="codeBadgeInpt">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique).</label>
            <textarea class="form-control" aria-label="With textarea" name="hackQuestion" placeholder="Entrez votre réponse"></textarea>
          </div>
          <div class="text-warning"><?= $userHackQuestionError ?></div>

          <div>
            <label class="mt-3" for="codeBadgeInpt">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
            <textarea class="form-control" aria-label="With textarea" name="expQuestion" placeholder="Entrez votre réponse"></textarea>
          </div>
          <div class="text-warning"><?= $userExpQuestionError ?></div>

          <button type="submit" class="btn btn-dark mt-3" name="submitBtn">Valider le formulaire</button>
        </form>
      </div>
    </div>
  </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>