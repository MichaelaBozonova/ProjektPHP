
<?php

$title = "Fromulář";
include "DBcon.php";
include "hlavicka.php"

?>



<?php
if (isset($_GET['ulozit'])) {
    $zadanyEmail = $_GET['email'];
    $zadanyVek = $_GET['vek'];
    $zadanaVaha = $_GET['vaha'];
    $zadanaVyska = $_GET['vyska'];
    $zadanaAdresa = $_GET['adresa'];
    $zadaneMesto = $_GET['mesto'];
    $zadanyStat = $_GET['stat'];
    $zadanePSC = $_GET['psc'];
    $zadanePohlavi = $_GET['inlineRadioOptions'];

    try {
        $sql = "INSERT INTO formular3 (email,vek,vaha,vyska,adresa,mesto,stat,psc,pohlavi) VALUES ('$zadanyEmail','$zadanyVek',$zadanaVaha','$zadanaVyska','$zadanaAdresa','$zadaneMesto','$zadanyStat','$zadanePSC','$zadanePohlavi')";
        $result = pg_query($sql);
        //echo "Záznamy byly úspěšně vloženy do databáze";

        header('location:vysledky.php');

    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 font-weight-normal">Vyplňte formulář BMI</h1>
    <p class="lead font-weight-normal">Index tělesné hmotnosti, obvykle označovaný zkratkou BMI (z anglického body mass index) je číslo používané jako indikátor podváhy, normální tělesné hmotnosti, nadváhy a obezity, umožňující statistické porovnávání tělesné hmotnosti lidí s různou výškou.</p>
    <a class="btn btn-outline-secondary" href="https://www.bodymassindex.cz/faq/co-je-bmi-">Zjistit více</a>
  </div>
  <div class="product-device shadow-sm d-none d-md-block"></div>
  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>

<div class="container">

<form action="" method="get">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-2">
      <label for="inputVek">Věk</label>
      <input type="number" name="vek" class="form-control" id="inputVek">
    </div>
    <div class="form-group col-md-2">
      <label for="inputVaha">Váha</label>
      <input type="number" name="vaha" class="form-control" id="inputVaha">
    </div>
    <div class="form-group col-md-2">
      <label for="inputVyska">Výška</label>
      <input type="number" name="vyska" step="any" class="form-control" id="inputVyska">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Adresa</label>
    <input type="text" name="adresa" class="form-control" id="inputAddress" placeholder="17.listopadu 3838/38">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Město</label>
      <input type="text" name="mesto" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Stát</label>
      <select id="inputState" name="stat" class="form-control">
        <option selected>Česká Republika</option>
        <option selected>Slovenská Republika</option>
        <option selected>Jiný...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">PSČ</label>
      <input type="text" name="psc"class="form-control" id="inputPSC">
    </div>
  </div>
  <div class="form-group">
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="muž">
  <label class="form-check-label" for="inlineRadio1">Muž</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="žena">
  <label class="form-check-label" for="inlineRadio2">Žena</label>
</div>

  </div>
  <button type="submit" name="ulozit" class="btn btn-primary">Odeslat</button>
</form>

</div>


<?php

include "footer.php"

?>