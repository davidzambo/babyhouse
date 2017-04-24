<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="refresh" content="900" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link type="image/x-icon" rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico"/>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet" type="text/css"/>
  <title></title>
  <script>
  var base_url = "<?php echo base_url(); ?>";
  var user_phone_number = "<?php echo $this->session->userdata('phone_number'); ?>";
  var insurance_offer_code = "<?php echo $this->session->userdata('insurance_offer_code'); ?>";

  $(document).ready(function(){
    $('#email_send').click(function(event){
      event.preventDefault();
      $.ajax({
        type: "POST",
        url: base_url+"clinics/send_insurance_offer_code_by_email",
        data: {}
      }).done(function(){
        alert("A biztosítás ajánlatszámát sikeresen elküldtük az ön email címére!");
      });
    });

    $('#sms_send').click(function(event){
      event.preventDefault();
      $.ajax({
        type: "POST",
        url: "https://seeme.hu/gateway?key=eaholayi10m47w73zkuw5rng33jzyhs6515e&message=Aj%C3%A1nlatsz%C3%A1m%3A+"+insurance_offer_code+"&number="+user_phone_number+"&callback=4,5,6",
        data: {}
      }).done(function(){
        alert("A biztosítás ajánlatszámát sikeresen elküldtük az ön telefonszámára címére!");
      });
    });

    });

  </script>
</head>
<body>
