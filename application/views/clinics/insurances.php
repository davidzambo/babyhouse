<div class="row">
  <div class="col-lg-2"></div>
    <div class="col-lg-8 all-insurances">
      <?php foreach ($insurances as $insurance): ?>
        <div class="col-lg-6">
          <p>Megszólítás: <?php echo $insurance->personal_title; ?></p>
          <p>Vezetéknév: <?php echo $insurance->last_name; ?></p>
          <p>Keresztnév: <?php echo $insurance->first_name; ?></p>
          <p>Születési idő: <?php echo $insurance->birth_date; ?></p>
          <p>Ország: <?php echo $insurance->country; ?></p>
          <hr/>
        </div>
        <div class="col-lg-6">
          <p>Kezelés azonosítója: <?php echo $insurance->treatment_id_number; ?></p>
          <p>Kezelés kezdete: <?php echo $insurance->treatment_date; ?></p>
          <p>Kezelés vége: <?php echo $insurance->treatment_finish_date; ?></p>
          <p>Kvadránsok: <?php echo $insurance->quadrants; ?></p>
          <p>Kezelés típusa: <?php echo $insurance->treatment_type; ?></p>
          <hr/>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
