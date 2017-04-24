<div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-8">
<?php echo validation_errors(); ?>
<?php $attributes = array( 'class' => 'form-horizontal');
      echo form_open('new_clinic', $attributes); ?>
<fieldset>
  <legend>Új fogázati klinika rögzítése</legend>

  <div class="form-group row clinic_name">
    <label for="clinic_name" class="col-lg-5 control-label">A klinika <strong>teljes cégneve</strong>:</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" id="clinic_name" name="clinic_name" placeholder="Dental Imperial Kft" disabled="false" required="true" size="40">
      </div>
      <div class="col-lg-1"></div>
  </div>

  <div class="form-group row registration_number">
    <label for="registration_number" class="col-lg-5 control-label">A klinika <strong>cégjegyzékszáma</strong>:</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" id="registration_number" name="registration_number" placeholder="01-23-456789" disabled="false" required="true" size="12" maxlength="12">
      </div>
      <div class="col-lg-1"></div>
  </div>

  <div class="form-group row tax_number">
    <label for="tax_number" class="col-lg-5 control-label">A klinika <strong>adószáma</strong>:</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" id="tax_number" name="tax_number" placeholder="12345678-9-12" disabled="false" required="true" size="13" maxlength="13">
      </div>
      <div class="col-lg-1"></div>
  </div>

  <div class="form-group row partner_code">
    <label for="partner_code" class="col-lg-5 control-label">A klinika <strong>partner kódja</strong>:</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" id="partner_code" name="partner_code" placeholder="A0145621" disabled="false" required="true" size="8" maxlength="8">
      </div>
      <div class="col-lg-1"></div>
  </div>

  <div class="form-group row clinic_superuser_username">
    <label for="clinic_superuser_username" class="col-lg-5 control-label">A klinika fő felhasználójának <strong>felhasználóneve</strong>:</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" id="clinic_superuser_username" name="clinic_superuser_username" placeholder="nagy.tamas" disabled="false" required="true" size="20" maxlength="20">
      </div>
      <div class="col-lg-1"></div>
  </div>

  <div class="form-group row clinic_superuser_password">
    <label for="clinic_superuser_password" class="col-lg-5 control-label">A klinika fő felhasználójának <strong>jelszava</strong>:</label>
      <div class="col-lg-6">
        <input type="password" class="form-control" id="clinic_superuser_password" name="clinic_superuser_password" placeholder="********" disabled="false" required="true" size="20" maxlength="20">
      </div>
      <div class="col-lg-1"></div>
  </div>

  <div class="form-group row report_sending_frequency">
    <label for="report_sending_frequency" class="col-lg-5 control-label">Az új biztosítások továbbításának<strong>gyakorisága</strong>:</label>
    <div class="col-lg-3">
      <select class="form-control" id="report_sending_frequency" name="report_sending_frequency" required="true">
        <option value="azonnal">hetente</option>
        <option value="azonnal">azonnal</option>
        <option value="naponta">naponta</option>
        <option value="kéthetente">kéthetente</option>
        <option value="havonta">havonta</option>
        <option value="soha">soha</option>
      </select>
    </div>
    <div class="col-lg-4"></div>
  </div>

  <div class="form-group row">
    <div class="col-lg-2"></div>
    <div class="col-lg-3"></div>
    <div class="col-lg-2"></div>
    <div class="col-lg-3">
        <button type="submit" class="button" id="save_new_partner" name="save_new_partner" disabled="true">Partner rögzítése</button>
    </div>
    <div class="col-lg-2"></div>
  </div>


</fieldset>
</form>
</div>
<div class="col-lg-2"></div>
</div>
