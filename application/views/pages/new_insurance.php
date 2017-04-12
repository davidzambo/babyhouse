<br/><br/>
<form class="form-horizontal">
<fieldset>
  <legend>Új biztosítási ajánlat rögzítése</legend>
  <div class="form-group">

    <label for="person_title" class="col-lg-4 control-label">Biztosított <strong>megszólítása</strong>:</label>
    <div class="col-lg-3">
      <select class="form-control" id="person_title">
        <option value="default">Kérem válasszon!</option>
        <option value="holgyem">Hölgyem</option>
        <option value="uram">Uram</option>
      </select>
    </div>
    <br/>
  </div>

  <div class="form-group">
    <label for="first_name" class="col-lg-4 control-label">Biztosított <strong>keresztneve</strong>:</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" id="first_name" placeholder="Keresztnév">
      </div>
  </div>

  <div class="form-group">
    <label for="last_name" class="col-lg-4 control-label">Biztosított <strong>vezetékneve</strong>:</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" id="last_name" placeholder="Vezetéknév">
      </div>
  </div>

  <div class="form-group">
    <label for="birth_date" class="col-lg-4 control-label">Biztosított <strong>születési ideje</strong>:</label>
      <div class="col-lg-2">
        <select class="form-control" id="birth_year">
          <option value="default">év</option>
          <?php
            for ($i=date("Y")-10 ; $i>date("Y")-91 ; $i--){
              echo "<option value='".$i."'>".$i."</option>\n";
            }
           ?>
        </select>
      </div>
      <div class="col-lg-2">
        <select class="form-control" id="birth_month">
          <option value="default">hónap</option>
          <?php
            for ($i=1 ; $i<=12 ; $i++){
              echo "<option value='".$i."'>".$i."</option>\n";
            }
           ?>
        </select>
      </div>
      <div class="col-lg-2">
        <select class="form-control" id="birth_day">
          <option value="default">nap</option>
          <?php
            for ($i=1 ; $i<=31 ; $i++){
              echo "<option value='".$i."'>".$i."</option>\n";
            }
           ?>
        </select>
      </div>
  </div>

  <div class="form-group">
    <label for="country_select" class="col-lg-4 control-label">A biztosított
      <strong>tartózkodás szerinti országa</strong>:</label>
      <div class="col-lg-4">
        <select class="form-control" id="person_title">
          <option value="default">Kérem válasszon!</option>
          <option value="magyarorszag">Magyarország</option>
          <option value="ausztria">Ausztria</option>
          <option value="belgium">Belgium</option>
          <option value="ciptrus">Ciprus</option>
          <option value="csehorszag">Csehország</option>
          <option value="dania">Dánia</option>
          <option value="egyesult_kiralysag">Egyesült Királyság</option>
          <option value="esztorszag">Észtország</option>
          <option value="finnorszag">Finnország</option>
          <option value="franciaorszag">Franciaország</option>
          <option value="gorogorszag">Görögország</option>
          <option value="hollandia">Hollandia</option>
          <option value="horvatorszag">Horvátország</option>
          <option value="irorszag">Írország</option>
          <option value="izland">Izland</option>
          <option value="lengyelország">Lengyelország</option>
          <option value="lettorszag">Lettország</option>
          <option value="liechtenstein">Liechtenstein</option>
          <option value="litvania">Litvánia</option>
          <option value="luxemburg">Luxemburg</option>
          <option value="malta">Málta</option>
          <option value="nemetorszag">Németország</option>
          <option value="norvegia">Norvégia</option>
          <option value="olaszorszag">Olaszország</option>
          <option value="portugalia">Portugália</option>
          <option value="romania">Románia</option>
          <option value="spanyolország">Spanyolország</option>
          <option value="svedorszag">Svédország</option>
          <option value="szlovakia">Szlovákia</option>
          <option value="szlovenia">Szlovénia</option>
        </select>
      </div>
  </div>

  <div class="form-group">
    <label for="treatment_date" class="col-lg-4 control-label">A <strong>kezelési terv dátuma</strong>:</label>
      <div class="col-lg-2">
        <select class="form-control" id="treatment_year">
          <option value="default">év</option>
          <?php
            for ($i=date("Y") ; $i>date("Y")-5 ; $i--){
              echo "<option value='".$i."'>".$i."</option>\n";
            }
           ?>
        </select>
      </div>
      <div class="col-lg-2">
        <select class="form-control" id="treatment_month">
          <option value="default">hónap</option>
          <?php
            for ($i=1 ; $i<=12 ; $i++){
              echo "<option value='".$i."'>".$i."</option>\n";
            }
           ?>
        </select>
      </div>
      <div class="col-lg-2">
        <select class="form-control" id="treatment_day">
          <option value="default">nap</option>
          <?php
            for ($i=1 ; $i<=31 ; $i++){
              echo "<option value='".$i."'>".$i."</option>\n";
            }
           ?>
        </select>
      </div>
  </div>

  <div class="form-group">
    <label for="treatment_id" class="col-lg-4 control-label">A kezelési terv <strong>azonosító száma</strong>:</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" id="treatment_id" placeholder="Azonosítós szám">
      </div>
  </div>

  <div class="form-group">
    <label for="treatment_finish_date" class="col-lg-4 control-label">A kezelés <strong>befejezésének dátuma</strong>:</label>
      <div class="col-lg-2">
        <select class="form-control" id="treatment_finish_year">
          <option value="default">év</option>
          <?php
            for ($i=date("Y") ; $i>date("Y")-5 ; $i--){
              echo "<option value='".$i."'>".$i."</option>\n";
            }
           ?>
        </select>
      </div>
      <div class="col-lg-2">
        <select class="form-control" id="treatment_finish_month">
          <option value="default">hónap</option>
          <?php
            for ($i=1 ; $i<=12 ; $i++){
              echo "<option value='".$i."'>".$i."</option>\n";
            }
           ?>
        </select>
      </div>
      <div class="col-lg-2">
        <select class="form-control" id="treatment_finish_day">
          <option value="default">nap</option>
          <?php
            for ($i=1 ; $i<=31 ; $i++){
              echo "<option value='".$i."'>".$i."</option>\n";
            }
           ?>
        </select>
      </div>
  </div>

  </div>
</fieldset>
</form>
