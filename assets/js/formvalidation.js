$(document).ready(function(){
  $("#personal_title").change(function(){
    if ($(this).val() === "default") {
      $(this).addClass('form-error').removeClass('form-success');
      $("#last_name").prop('disabled', true);
    } else {
      $(this).addClass('form-success').removeClass('form-error');
      $("#last_name").prop('disabled', false);
    };
  });

  $('#last_name').on("change", function(){
    if (/^[a-zA-Z\-áÁéÉíÍóÓöÖőŐúÚüÜűŰ]{2,20}$/.test($(this).val())){
      $(this).addClass('form-success').removeClass('form-error');
      $("#first_name").prop('disabled', false);
    } else {
      $(this).addClass('form-error').removeClass('form-success');
      $("#first_name").prop('disabled', true);
    };
  });

  $('#first_name').on("change", function(){
    if (/^[a-zA-Z\-áÁéÉíÍóÓöÖőŐúÚüÜűŰ]{2,20}$/.test($(this).val())){
      $(this).addClass('form-success').removeClass('form-error');
      $("#birth_date_year").prop('disabled', false);
    } else {
      $(this).addClass('form-error').removeClass('form-success');
      $("#birth_date_year").prop('disabled', true);
    };
  });


  $('#birth_date_year').on("change", function(){
    var currentTime = new Date();
    if ($(this).val() < currentTime.getFullYear() - 10 && $(this).val() > currentTime.getFullYear() - 90){
      $(this).addClass('form-success').removeClass('form-error');
      $("#birth_date_month").prop('disabled', false);
    } else {
      $(this).addClass('form-error').removeClass('form-success');
      $("#birth_date_month").prop('disabled', true);
    };
  });

  $('#birth_date_month').on("change", function(){
    if ($(this).val() <= 12 && $(this).val() > 0){
      $(this).addClass('form-success').removeClass('form-error');
      $("#birth_date_day").prop('disabled', false);
    } else {
      $(this).addClass('form-error').removeClass('form-success');
      $("#birth_date_day").prop('disabled', true);
    };
  });

  $('#birth_date_day').on("change", function(){
    var maxDaysInMonth = 0;
    var year = $('#birth_date_year').val();
    var month = $('#birth_date_month').val();
    var day = $('#birth_date_day').val();

    switch (month) {
      case '4':
      case '6':
      case '9':
      case '11':
          maxDaysInMonth = 30;
          break;
      case '2':
            if (year % 4 == 0) {
              maxDaysInMonth = 29;
            } else {
              maxDaysInMonth = 28;
            }
              break;
      default:
          maxDaysInMonth = 31;

    };

    if (day > 0 && day <= maxDaysInMonth){
      $(this).addClass('form-success').removeClass('form-error');
      $("#country_select").prop('disabled', false);
    } else {
      $(this).addClass('form-error').removeClass('form-success');
      $("#country_select").prop('disabled', true);
    };
  });


});
