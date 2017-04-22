<div class="row">
  <div class="col-lg-2"></div>
    <div class="col-lg-8">
      <p>Felhasználónév: <?php echo $this->session->userdata('username'); ?></p>
      <p>Felhasználó e-mail címe: <?php echo $this->session->userdata('email'); ?></p>
      <p>Felhasználó telefonszáma: <?php echo $this->session->userdata('phone_number'); ?></p>
      <p>Felhasználó vezetékneve: <?php echo $this->session->userdata('last_name'); ?></p>
      <p>Felhasználó keresztneve: <?php echo $this->session->userdata('first_name'); ?></p>
    </div>
  <div class="col-lg-2"></div>
</div>
