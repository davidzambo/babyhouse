<script src="<?php echo base_url(); ?>assets/js/formvalidation.js"></script>

<div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-8">
<form class="form-horizontal">
<fieldset>
  <legend>Új biztosítási ajánlat rögzítése</legend>

  <div class="form-group row personal_title">
    <label for="person_title" class="col-lg-5 control-label">Biztosított <strong>megszólítása</strong>:</label>
    <div class="col-lg-3">
      <select class="form-control" id="personal_title">
        <option value="default">Kérem válasszon!</option>
        <option value="holgyem">Hölgyem</option>
        <option value="uram">Uram</option>
      </select>
    </div>
    <div class="col-lg-4"></div>
  </div>

  <div class="form-group row last_name">
    <label for="last_name" class="col-lg-5 control-label">Biztosított <strong>vezetékneve</strong>:</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" id="last_name" placeholder="Vezetéknév" disabled="true">
      </div>
      <div class="col-lg-3"></div>
  </div>

  <div class="form-group row first_name">
    <label for="first_name" class="col-lg-5 control-label">Biztosított <strong>keresztneve</strong>:</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" id="first_name" placeholder="Keresztnév" disabled="true">
      </div>
      <div class="col-lg-3"></div>
  </div>

  <div class="form-group row birth_date">
    <label for="birth_date" class="col-lg-5 control-label">Biztosított <strong>születési ideje</strong></label>
      <div class="col-lg-7">
        <input type="text" class="form-control" id="birth_date_year" placeholder="Év" maxlength="4" size="4" disabled="true">
        <input type="text" class="form-control" id="birth_date_month" placeholder="Hónap" maxlength="2" size="2" disabled="true">
        <input type="text" class="form-control" id="birth_date_day" placeholder="Nap" maxlength="2" size="2" disabled="true">
      </div>
  </div>

  <div class="form-group row country_select">
    <label for="country_select" class="col-lg-5 control-label">A biztosított
      <strong>tartózkodás szerinti országa</strong>:</label>
      <div class="col-lg-4">
        <select class="form-control" id="country_select" disabled="true">
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
      <div class="col-lg-3"></div>
  </div>

  <div class="form-group row treatment_date">
    <label for="treatment_date" class="col-lg-5 control-label">A <strong>kezelési terv dátuma</strong>:</label>
      <div class="col-lg-7">
        <input type="text" class="form-control" id="treatment_date_year" placeholder="Év" maxlength="4" size="4" disabled="true">
        <input type="text" class="form-control" id="treatment_date_month" placeholder="Hónap" maxlength="2" size="4" disabled="true">
        <input type="text" class="form-control" id="treatment_date_day" placeholder="Nap" maxlength="2" size="2" disabled="true">
      </div>
  </div>

  <div class="form-group row treatment_id_number">
    <label for="treatment_id" class="col-lg-5 control-label">A kezelési terv <strong>azonosító száma</strong>:</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" id="treatment_id_number" placeholder="Azonosítós szám" disabled="true">
      </div>
      <div class="col-lg-3"></div>
  </div>

  <div class="form-group row treatment_finish_date">
    <label for="treatment_finish_date" class="col-lg-5 control-label">A kezelés <strong>befejezésének dátuma</strong>:</label>
    <div class="col-lg-7">
      <input type="text" class="form-control" id="treatment_finish_date_year" placeholder="Év" maxlength="4" size="4" disabled="true">
      <input type="text" class="form-control" id="treatment_finish_date_month" placeholder="Hónap" maxlength="2" size="4" disabled="true">
      <input type="text" class="form-control" id="treatment_finish_date_day" placeholder="Nap" maxlength="2" size="2" disabled="true">
    </div>
</div>


  <div class="form-group row tooth_quadrant">
    <label for="tooth_quadrant" class="col-lg-5 control-label">Kérem adja meg a <strong>fogazott kvadránst</strong>:</label>
    <div class="checkbox col-lg-2">
       <label><input type="checkbox" class="tooth_quadrant" id="quadrant_top_left" disabled="true" value="bal felső">Bal felső</label><br/>
       <label><input type="checkbox" class="tooth_quadrant" id="quadrant_bottom_left" disabled="true" value="bal alsó">Bal alsó</label>
    </div>
    <div class="checkbox col-lg-2">
       <label><input type="checkbox" class="tooth_quadrant" id="quadrant_top_right" disabled="true" value="jobb felső">Jobb felső</label><br/>
       <label><input type="checkbox" class="tooth_quadrant" id="quadrant_bottom_right" disabled="true" value="jobb alsó">Jobb alsó</label>
    </div>
    <div class="col-lg-3"></div>
  </div>

  <div class="form-group row treatment_type">
    <label for="treatment_type" class="col-lg-5 control-label">Kérem adja meg a <strong>kezelés típusát</strong>:</label>
    <div class="checkbox col-lg-5">
      <label><input type="checkbox" class="treatment_type" id="treatment_implant" disabled="true">Implantátumok</label><br/>
      <label><input type="checkbox" class="treatment_type" id="treatment_crowns" disabled="true">Koronák és hidak</label><br/>
      <label><input type="checkbox" class="treatment_type" id="treatment_inlay" disabled="true">Inlay/onlay</label><br/>
      <label><input type="checkbox" class="treatment_type" id="treatment_veneers" disabled="true">Kerámia héjak</label><br/>
      <label><input type="checkbox" class="treatment_type" id="treatment_partial_dentures" disabled="true">Részleges fogsor és műfogsorok</label><br/>
      <label><input type="checkbox" class="treatment_type" id="treatment_removable_dentures" disabled="true">Kivehető műfogsor</label><br/>
      <label><input type="checkbox" class="treatment_type" id="treatment_complete_dentures" disabled="true">Teljes fogsor, fix fogszabályzós</label><br/>
      <label><input type="checkbox" class="treatment_type" id="treatment_composite_fillings" disabled="true">Kompozit tömések</label><br/>
      <label><input type="checkbox" class="treatment_type" id="treatment_ot_cap" disabled="true">Ot-Cap, Preci, és egyéb összekötő elem</label><br/>
      <label><input type="checkbox" class="treatment_type" id="treatment_other" disabled="true">Egyéb módon történő kezelés</label><br/>
    </div>
    <div class="col-lg-2"></div>
  </div>

  <div class="form-group row data_check">
    <label for="data_check" class="col-lg-5 control-label">Kérem <strong>ellenőrizze az adatokat</strong>:</label>
    <div class="col-lg-6 data-check">
        <span>Megszólítás: </span><span id="data_check_personal_title"></span><br/>
        <span>Vezetéknév: </span><span id="data_check_last_name"></span><br/>
        <span>Keresztnév: </span><span id="data_check_first_name"></span><br/>
        <span>Születési dátum: </span><span id="data_check_birth_date"></span><br/>
        <span>Tartózkodási ország: </span><span id="data_check_country"></span><br/>
        <span>Kezelés tervezett dátuma: </span><span id="data_check_treatment_date"></span><br/>
        <span>Kezelés azonosítószáma: </span><span id="data_check_treatment_id_number"></span><br/>
        <span>Kezelés befejezésének időpontja: </span><span id="data_check_treatment_finish_date"></span><br/>
        <span>Fogazat kvadráns: </span><span id="data_check_tooth_quadrant"></span><br/>
        <span>Kezelés típusa: </span><span id="data_check_treatment_type"></span><br/>
    </div>
    <button type="submit" class="button" id="data_check_button" disabled="true">A bevitt adatok helyesek</button>
    <div class="col-lg-1"></div>
  </div>

  <div class="form-group row">
    <div class="col-lg-5"></div>
    <div class="col-lg-7">
    <label><input type="checkbox" id="accept_insurance_conditions">
        Elfogadom a biztosítási feltételeket, és szeretném megkötni a biztosítást!</label>
      </div>
  </div>

  <div class="form-group row">
    <label for="email" class="col-lg-5 control-label">Biztosított <strong>e-mail címe</strong>:</label>
      <div class="col-lg-4">
        <input type="email" class="form-control" id="email" placeholder="E-mail cím">
      </div>
      <div class="col-lg-3"></div>
  </div>

  <div class="form-group row">
    <label for="phone_number" class="col-lg-5 control-label">Biztosított <strong>telefonszáma</strong>:</label>
      <div class="col-lg-4">
        <input type="tel" class="form-control" id="phone_number" placeholder="Telefonszám">
      </div>
      <div class="col-lg-3"></div>
  </div>


  <div class="form-group row">
    <div class="col-lg-1"></div>
    <div class="col-lg-11">
      <p>A rendszer most megküldi Önnek a biztosítási ajánlatszámát!<p>
      <p>Kérem válassza ki a kézbesítés módját:<p>
        <button type="button" class="button" id="sms_send">SMS Küldése</button>
        <button type="button" class="button" id="email_send">E-mail küldése</button>
        <button type="button" class="button" id="email_send">Adatok rögzítése</button>
        <button type="button" class="button" id="email_send">PDF generálása</button>

    </div>
  </div>

  <div class="col-lg-2"></div>
  </div>
</div>
</div>
</fieldset>
</form>
