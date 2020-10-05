<?php
  echo '<script type="text/javascript" src="/'.PATH_PUBLIC.'\js\addUser.js"></script>';

?>

<form class="needs-validation" novalidate>
<div class="row">
    <div class="col col-12 col-md-6">
    <div class="form-group">
        <label for="first_name">Prénom</label>
        <input  class="form-control" id="first_name"  name="first_name" required>
        <div class="invalid-feedback">
            Le prénom est requis.
      </div>
    </div>
    <div class="form-group">
        <label for="last_name">Nom</label>
        <input  class="form-control" id="last_name"  name="last_name" required>
        <div class="invalid-feedback">
            Le nom est requis.
      </div>
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" required>
        <div class="invalid-feedback">
           Une address courriel est requis
      </div>
    </div>
    <div class="form-group">
        <label for="phone_number">Téléphone</label>
        <input type="tel" class="form-control" id="phone_number" name="phone_number" required 
        pattern="^[0-9]{7}([0-9]{3})?">
        
        <div class="invalid-feedback">
          Le numero doit etre composé de 7 ou 10 chiffres sans espace ou symbole.
      </div>
    </div>
    <!-- <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div> 
   </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>-->
    <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="address">Adresse</label>
                <input class="form-control" id="address" name="address" required>
                <div class="invalid-feedback">
                    L'adresse est requis.
                </div>
            </div>
            <div class="form-group">
                <label for="city">Ville</label>
                <input class="form-control" id="city" name="city" required>
                <div class="invalid-feedback">
                    La ville est requise.
                </div>
            </div>

            <div class="form-group">
                <label for="postal_code">Code Postal</label>
                <input class="form-control" type="postal_code" id="postal_code" name="postal_code" required>
                <div class="invalid-feedback">
                    Le postal code est requis.
                </div>
            </div>
            <div class="form-group">
                <label for="age">Votre âge</label>
                <input  class="form-control" id="age" name="age" required>
                <div class="invalid-feedback">
                    Vous devez avoir 18 ans.
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>