<?php

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
  <div class="container p-4 col-sm-8 bg-info">
    <div class="col-sm-12">
      <div class="row-sm-justify-content-center">

        <form>
          <div class="row">
            <div class="col">
              <label for="firstNameInpt">Prénom</label>
              <input type="text" class="form-control" id="firstNameInpt" name="firstName" placeholder="Veuillez renseigner votre Prénom">
            </div>
            <div class="col">
              <label for="lastNameInpt">Nom</label>
              <input type="text" class="form-control" id="lastNameInpt" name="lastName" placeholder="Veuillez renseigner votre Nom">
            </div>
          </div>

          <div class="row mt-3">
            <div class="col">
              <label for="birthDayInpt">Date de naissance</label>
              <input type="date" class="form-control" id="birthDayInpt" name="birthDate">
            </div>
            <div class="col">
              <label for="birthPlaceInpt">Pays de naissance</label>
              <input type="text" class="form-control" id="birthPlaceInpt" name="birthCountry"  placeholder="exemple : France">
            </div>
            <div class="col">
              <label for="nationalityInpt">Nationnalité</label>
              <input type="text" class="form-control" id="nationalityInpt" name="nationality"  placeholder="exemple : Française">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-sm-6 mt-3">
              <label for="emailInpt">E-mail</label>
              <input type="email" class="form-control" id="emailInpt" name="email" placeholder="johndoe@nonamemail.com">
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label for="telInpt">Téléphone</label>
              <input type="text" class="form-control" id="telInpt" name="phoneNumber" placeholder="exemple : 0249987293">
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-sm-6">
              <label for="graduationInpt">Diplôme</label>
              <select class="form-control" id="graduationInpt" name="graduationLvl">
                <option>sans</option>
                <option>Bac</option>
                <option>Bac+2</option>
                <option>Bac+3 ou supérieur</option>
              </select>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-sm-6">
              <label for="poleEmpInpt">Numéro Pôle-Emploi</label>
              <input type="text" class="form-control" id="poleEmpInpt" name="poleEmploiNumber" placeholder="exemple : 03998361">
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-sm-6">
              <label for="codeCadinpt">Lien codecademy</label>
              <input type="text" class="form-control" id="codeCadinpt" name="codeCadLink" placeholder="renseignez votre lien">
            </div>
            <div class="col-sm-6">
              <label for="codeBadgeInpt">Nombre de badges codecademy</label>
              <input type="text" class="form-control" id="codeBadgeInpt" name="badgeNumber" placeholder="renseignez votre nombre de badges">
            </div>
          </div>

          <div>
            <label class="mt-3" for="codeBadgeInpt">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
            <textarea class="form-control" aria-label="With textarea" name="heroQuestion" placeholder="Entrez votre réponse"></textarea>
          </div>

          <div>
            <label class="mt-3" for="codeBadgeInpt">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique).</label>
            <textarea class="form-control" aria-label="With textarea" name="hackQuestion" placeholder="Entrez votre réponse"></textarea>
          </div>

          <div>
            <label class="mt-3" for="codeBadgeInpt">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
            <textarea class="form-control" aria-label="With textarea" name="expQuestion" placeholder="Entrez votre réponse"></textarea>
          </div>

          <button type="submit" class="btn btn-dark mt-3" name="submitBtn">Valider le formulaire</button>
        </form>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>