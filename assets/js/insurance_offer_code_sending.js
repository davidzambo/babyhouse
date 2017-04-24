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
      url: "https://seeme.hu/gateway?key=eaholayi10m47w73zkuw5rng33jzyhs6515e&message=Ez%20az%20%C3%BCzenetem"+insurance_offer_code+"&number="+user_phone_number+"&callback=4,6,7",
      data: {}
    }).done(function(){
      alert("A biztosítás ajánlatszámát sikeresen elküldtük az ön telefonszámára címére!");
    });
  });

  });
