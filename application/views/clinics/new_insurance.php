<script src="<?php echo base_url(); ?>assets/js/formvalidation.js"></script>

<div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-8">
<?php echo validation_errors(); ?>
<?php $attributes = array( 'class' => 'form-horizontal');
      echo form_open('new_patient', $attributes); ?>
<fieldset>
  <legend>Új biztosítási ajánlat rögzítése</legend>

  <div class="form-group row personal_title">
    <label for="person_title" class="col-lg-5 control-label">Biztosított <strong>megszólítása</strong>:</label>
    <div class="col-lg-3">
      <select class="form-control" id="personal_title" name="personal_title" required="true">
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
        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Vezetéknév" disabled="true" required="true">
      </div>
      <div class="col-lg-3"></div>
  </div>

  <div class="form-group row first_name">
    <label for="first_name" class="col-lg-5 control-label">Biztosított <strong>keresztneve</strong>:</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Keresztnév" disabled="true" required="true">
      </div>
      <div class="col-lg-3"></div>
  </div>

  <div class="form-group row birth_date">
    <label for="birth_date" class="col-lg-5 control-label">Biztosított <strong>születési ideje</strong></label>
      <div class="col-lg-7">
        <input type="text" class="form-control" id="birth_date_year" name="birth_date_year" placeholder="Év" maxlength="4" size="4" disabled="true" required="true">
        <input type="text" class="form-control" id="birth_date_month" name="birth_date_month" placeholder="Hónap" maxlength="2" size="4" disabled="true" required="true">
        <input type="text" class="form-control" id="birth_date_day" name="birth_date_day" placeholder="Nap" maxlength="2" size="2" disabled="true" required="true">
      </div>
  </div>

  <div class="form-group row country_select">
    <label for="country_select" class="col-lg-5 control-label">A biztosított
      <strong>tartózkodás szerinti országa</strong>:</label>
      <div class="col-lg-4">
        <select class="form-control" id="country_select" name="country_select" disabled="true" required="true">
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
        <input type="text" class="form-control" id="treatment_date_year" name="treatment_date_year" placeholder="Év" maxlength="4" size="4" disabled="true" value="<?php echo date("Y"); ?>" required="true">
        <input type="text" class="form-control" id="treatment_date_month" name="treatment_date_month" placeholder="Hónap" maxlength="2" size="4" disabled="true" value="<?php echo date("m"); ?>" required="true">
        <input type="text" class="form-control" id="treatment_date_day" name="treatment_date_day" placeholder="Nap" maxlength="2" size="2" disabled="true" value="<?php echo date("d"); ?>" required="true">
      </div>
  </div>

  <div class="form-group row treatment_id_number">
    <label for="treatment_id" class="col-lg-5 control-label">A kezelési terv <strong>azonosító száma</strong>:</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" id="treatment_id_number" name="treatment_id_number" placeholder="Azonosítós szám" disabled="true" required="true">
      </div>
      <div class="col-lg-3"></div>
  </div>

  <div class="form-group row treatment_finish_date">
    <label for="treatment_finish_date" class="col-lg-5 control-label">A kezelés <strong>befejezésének dátuma</strong>:</label>
    <div class="col-lg-7">
      <input type="text" class="form-control" id="treatment_finish_date_year" name="treatment_finish_date_year" placeholder="Év" maxlength="4" size="4" disabled="true"  value="<?php echo date("Y"); ?>" required="true">
      <input type="text" class="form-control" id="treatment_finish_date_month" name="treatment_finish_date_month" placeholder="Hónap" maxlength="2" size="4" disabled="true" value="<?php echo date("m"); ?>" required="true">
      <input type="text" class="form-control" id="treatment_finish_date_day" name="treatment_finish_date_day" placeholder="Nap" maxlength="2" size="2" disabled="true" value="<?php echo date("d"); ?>" required="true">
    </div>
</div>


  <div class="form-group row tooth_quadrant">
    <label for="tooth_quadrant" class="col-lg-5 control-label">Kérem adja meg a <strong>fogazott kvadránst</strong>:</label>
    <div class="checkbox col-lg-3">
      <label><input type="checkbox" class="tooth_quadrant" id="quadrant_top_right" name="quadrants[]" disabled="true" value="jobb felső">Jobb felső</label><br/>
      <label><input type="checkbox" class="tooth_quadrant" id="quadrant_bottom_right" name="quadrants[]" disabled="true" value="jobb alsó">Jobb alsó</label>
    </div>
    <div class="checkbox col-lg-3">
      <label><input type="checkbox" class="tooth_quadrant" id="quadrant_top_left" name="quadrants[]" disabled="true" value="bal felső">Bal felső</label><br/>
      <label><input type="checkbox" class="tooth_quadrant" id="quadrant_bottom_left" name="quadrants[]" disabled="true" value="bal alsó">Bal alsó</label>
    </div>
    <div class="col-lg-1"></div>
  </div>

  <div class="form-group row treatment_type">
    <label for="treatment_type" class="col-lg-5 control-label">Kérem adja meg a <strong>kezelés típusát</strong>:</label>
    <div class="checkbox col-lg-5">
      <label><input type="checkbox" class="treatment_type" id="treatment_implant" name="treatment_type[]" value="implantátumok" disabled="true">Implantátumok</label><br/>
      <label><input type="checkbox" class="treatment_type" id="treatment_crowns" name="treatment_type[]" value="koronák és hidak" disabled="true">Koronák és hidak</label><br/>
      <label><input type="checkbox" class="treatment_type" id="treatment_inlay" name="treatment_type[]" value="inlay/onlay" disabled="true">Inlay/onlay</label><br/>
      <label><input type="checkbox" class="treatment_type" id="treatment_veneers" name="treatment_type[]" value="kerámia héjak" disabled="true">Kerámia héjak</label><br/>
      <label><input type="checkbox" class="treatment_type" id="treatment_partial_dentures" name="treatment_type[]" value="részleges fogsor és műforgsor" disabled="true">Részleges fogsor és műfogsorok</label><br/>
      <label><input type="checkbox" class="treatment_type" id="treatment_removable_dentures" name="treatment_type[]" value="kivehető műfogsor" disabled="true">Kivehető műfogsor</label><br/>
      <label><input type="checkbox" class="treatment_type" id="treatment_complete_dentures" name="treatment_type[]" value="teljes fogsor, fix fogszabályzós" disabled="true">Teljes fogsor, fix fogszabályzós</label><br/>
      <label><input type="checkbox" class="treatment_type" id="treatment_composite_fillings" name="treatment_type[]" value="kompozit tömések" disabled="true">Kompozit tömések</label><br/>
      <label><input type="checkbox" class="treatment_type" id="treatment_ot_cap" name="treatment_type[]" value="ot-cap, preci, és egyéb összekötő elemek" disabled="true">Ot-Cap, Preci, és egyéb összekötő elem</label><br/>
      <label><input type="checkbox" class="treatment_type" id="treatment_other" name="treatment_type[]" value="egyéb módon történő kezelés" disabled="true">Egyéb módon történő kezelés</label><br/>
    </div>
    <div class="col-lg-2"></div>
  </div>

  <div class="form-group row data_check">
    <label for="data_check" class="col-lg-5 control-label">Kérem <strong>ellenőrizze az adatokat</strong>:</label>
    <div class="col-lg-6">
        <div class="data-check">
          <span><strong>Megszólítás: </strong></span><span id="data_check_personal_title"></span><br/>
          <span><strong>Vezetéknév: </strong></span><span id="data_check_last_name"></span><br/>
          <span><strong>Keresztnév: </strong></span><span id="data_check_first_name"></span><br/>
          <span><strong>Születési dátum: </strong></span><span id="data_check_birth_date"></span><br/>
          <span><strong>Tartózkodási ország: </strong></span><span id="data_check_country"></span><br/>
          <span><strong>Kezelés tervezett dátuma: </strong></span><span id="data_check_treatment_date"></span><br/>
          <span><strong>Kezelés azonosítószáma: </strong></span><span id="data_check_treatment_id_number"></span><br/>
          <span><strong>Kezelés befejezésének időpontja: </strong></span><span id="data_check_treatment_finish_date"></span><br/>
          <span><strong>Fogazat kvadráns: </strong></span><span id="data_check_tooth_quadrant"></span><br/>
          <span><strong>Kezelés típusa: </strong></span><span id="data_check_treatment_type"></span><br/>
        </div>
        <br/>
        <button type="button" class="button" id="data_check_button" name="submit" disabled="true">A bevitt adatok helyesek</button>
    </div>
    <div class="col-lg-1"></div>
  </div>

  <div class="form-group row">
    <div class="col-lg-5"></div>
    <div class="col-lg-7">
    <label><input type="checkbox" id="accept_insurance_conditions" disabled="true" required="true">
        Elfogadom a biztosítási feltételeket, és szeretném megkötni a biztosítást!</label>
      </div>
  </div>

  <div class="form-group row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
      <p>Kérem válassza ki az ajánlatszám kézbesítési módját:</p>
        <div class="col-lg-1"></div>
        <div class="col-lg-4">
          <button type="button" class="button" id="sms_send" name="sms_send" disabled="true">SMS küldése</button>
        </div>
        <div class="col-lg-2"></div>
        <div class="col-lg-4">
          <button type="button" class="button" id="email_send" name="email_send" disabled="true">E-mail küldése</button>
        </div>
        <div class="col-lg-1"></div>
    </div>
    <div class="col-lg-1"></div>
  </div>

  <div class="form-group row insurance_id_code">
    <label for="insurance_id_code" class="col-lg-5 control-label">Adja meg a biztosítás <strong>ajánlatszámát</strong>:</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" id="insurance_id_code" name="insurance_id_code" placeholder="XY-123456" disabled="true" required="true">
      </div>
      <div class="col-lg-3"></div>
  </div>

  <div class="form-group row">
    <div class="col-lg-2"></div>
    <div class="col-lg-3">
        <button type="button" class="button" id="generate_pdf" name="generate_pdf" disabled="true">PDF generálása</button>
    </div>
    <div class="col-lg-2"></div>
    <div class="col-lg-3">
        <button type="submit" class="button" id="save_insurance" name="save_insurance" disabled="true">Biztosítási ajánlat beküldése</button>
    </div>
    <div class="col-lg-2"></div>
  </div>


</fieldset>
</form>
</div>
<div class="col-lg-2"></div>
</div>
