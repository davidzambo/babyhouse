<div class="row">
  <div class="col-lg-2"></div>
    <div class="col-lg-8 all-insurances">
      <table>
      <?php foreach ($insurances as $insurance): ?>
          <tr>
            <td>Megszólítás:</td>
            <td><?php echo $insurance->personal_title; ?></td>
            <td>Kezelés kezdete:</td>
            <td><?php echo $insurance->treatment_date; ?></td>
          </tr>
          <tr>
            <td>Vezetéknév:</td>
            <td><?php echo $insurance->last_name; ?></td>
            <td>Kezelés vége:</td>
            <td><?php echo $insurance->treatment_finish_date; ?></td>
          </tr>
          <tr>
            <td>Keresztnév:</td>
            <td><?php echo $insurance->first_name; ?></td>
            <td>Kezelt kvadráns(ok)</td>
            <td><?php echo $insurance->quadrants; ?></td>
          </tr>
          <tr>
            <td>Ország:</td>
            <td><?php echo $insurance->country; ?></td>
            <td>Kezelés típusa:</td>
            <td><?php echo $insurance->treatment_type; ?></td>
          </tr>
          <tr>
            <td>Kezelés azonosítója:</td>
            <td><?php echo $insurance->treatment_id_number; ?></td>
            <td>Biztosítás ajánlatszáma:</td>
            <td><?php echo $insurance->insurance_offer_code; ?></td>
          </tr>
      <?php endforeach; ?>
    </table>
    </div>
  </div>
</div>
