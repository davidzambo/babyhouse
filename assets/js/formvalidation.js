$(document).ready(function(){

  $("#personal_title").on("change", function(){
    if ($(this).val() === "default") {
      $('.personal_title').addClass('form-error').removeClass('form-success');
      $("#last_name").prop('disabled', true);
    } else {
      $('.personal_title').addClass('form-success').removeClass('form-error');
      $("#last_name").prop('disabled', false);
    };
  });

  $('#last_name').on("keyup", function(){
    if (/^[a-zA-Z\-\.\sáÁéÉíÍóÓöÖőŐúÚüÜűŰ]{2,20}$/.test($(this).val())){
      $('.last_name').addClass('form-success').removeClass('form-error');
      $("#first_name").prop('disabled', false);
    } else {
      $('.last_name').addClass('form-error').removeClass('form-success');
      $("#first_name").prop('disabled', true);
    };
  });

  $('#first_name').on("keyup", function(){
    if (/^[a-zA-Z\-\.\sáÁéÉíÍóÓöÖőŐúÚüÜűŰ]{2,20}$/.test($(this).val())){
      $('.first_name').addClass('form-success').removeClass('form-error');
      $("#birth_date_year").prop('disabled', false);
      $("#birth_date_month").prop('disabled', false);
      $("#birth_date_day").prop('disabled', false);
    } else {
      $('.first_name').addClass('form-error').removeClass('form-success');
      $("#birth_date_year").prop('disabled', true);
      $("#birth_date_month").prop('disabled', true);
      $("#birth_date_day").prop('disabled', true);
    };
  });


/*  $('#birth_date_year').on("keyup", function(){
    var currentTime = new Date();
    if ($(this).val() < currentTime.getFullYear() - 10 && $(this).val() > currentTime.getFullYear() - 90){
      $(this).addClass('form-success').removeClass('form-error');
    } else {
      $(this).addClass('form-error').removeClass('form-success');
    };
  });

  $('#birth_date_month').on("keyup", function(){
    if ($(this).val() <= 12 && $(this).val() > 0){
      $(this).addClass('form-success').removeClass('form-error');
    } else {
      $(this).addClass('form-error').removeClass('form-success');
    };
  });
*/

  $('#birth_date_day').on("keyup", function(){
    var maxDaysInMonth = 0;
    var currentTime = new Date();
    var year = parseInt($('#birth_date_year').val());
    var month = parseInt($('#birth_date_month').val());
    var day = $('#birth_date_day').val();

    switch (month) {
      case 4:
      case 6:
      case 9:
      case 11:
          maxDaysInMonth = 30;
          break;
      case 2:
            if (year % 4 == 0) {
              maxDaysInMonth = 29;
            } else {
              maxDaysInMonth = 28;
            }
              break;
      default:
          maxDaysInMonth = 31;
    };

    if (day > 0 &&
        day <= maxDaysInMonth &&
        month > 0 &&
        month <= 12 &&
        year < currentTime.getFullYear() - 10 &&
        year > currentTime.getFullYear() - 90
      ){
      $('.birth_date').addClass('form-success').removeClass('form-error');
      $("#country_select").prop('disabled', false);
    } else {
      $('.birth_date').addClass('form-error').removeClass('form-success');
      $("#country_select").prop('disabled', true);
    };
  });


  $("#country_select").on("change", function(){
    if ($(this).val() === "default") {
      $('.country_select').addClass('form-error').removeClass('form-success');
      $("#treatment_date_year").prop('disabled', true);
      $("#treatment_date_month").prop('disabled', true);
      $("#treatment_date_day").prop('disabled', true);
    } else {
      $('.country_select').addClass('form-success').removeClass('form-error');
      $("#treatment_date_year").prop('disabled', false);
      $("#treatment_date_month").prop('disabled', false);
      $("#treatment_date_day").prop('disabled', false);
    };
  });

/*
  $('#treatment_date_year').on("keyup", function(){
    var currentTime = new Date();
    if ($(this).val() <= currentTime.getFullYear() && $(this).val() >= currentTime.getFullYear() - 5){
      $(this).addClass('form-success').removeClass('form-error');
      $("#treatment_date_month").prop('disabled', false);
    } else {
      $(this).addClass('form-error').removeClass('form-success');
      $("#birth_date_month").prop('disabled', true);
    };
  });


  $('#treatment_date_month').on("keyup", function(){
    if ($(this).val() <= 12 && $(this).val() > 0){
      $(this).addClass('form-success').removeClass('form-error');
      $("#treatment_date_day").prop('disabled', false);
    } else {
      $(this).addClass('form-error').removeClass('form-success');
      $("#treatment_date_day").prop('disabled', true);
    };
  });

*/

  $('#treatment_date_day').on("keyup", function(){
    var maxDaysInMonth = 0;
    var year = parseInt($('#treatment_date_year').val());
    var month = parseInt($('#treatment_date_month').val());
    var day = parseInt($('#treatment_date_day').val());
    var userGivenDate = new Date(year, month, day);
    var fiveYearsBeforeDate = new Date(new Date().setYear(new Date().getFullYear() - 5));

    switch (month) {
      case 4:
      case 6:
      case 9:
      case 11:
          maxDaysInMonth = 30;
          break;
      case 2:
            if (year % 4 == 0) {
              maxDaysInMonth = 29;
            } else {
              maxDaysInMonth = 28;
            }
              break;
      default:
          maxDaysInMonth = 31;
    };

//CHECKING IF THE TREATMENT DATE IS MAX 5 YEARS BEFORE THE CURRENT DATE
    if (day > 0 &&
        day <= maxDaysInMonth &&
        userGivenDate.getTime() > fiveYearsBeforeDate.getTime()
      ){
      $('.treatment_date').addClass('form-success').removeClass('form-error');
//      $("#treatment_date_month").addClass('form-success').removeClass('form-error');
//      $("#treatment_date_year").addClass('form-success').removeClass('form-error');
      $("#treatment_id_number").prop('disabled', false);
    } else {
      $('.treatment_date').addClass('form-error').removeClass('form-success');
//      $("#treatment_date_month").addClass('form-error').removeClass('form-success');
//      $("#treatment_date_year").addClass('form-error').removeClass('form-success');
      $("#treatment_id_number").prop('disabled', true);
    };
  });

  $('#treatment_id_number').on("keyup", function(){
    if (/^[\d]{5,20}$/.test($(this).val())){
      $('.treatment_id_number').addClass('form-success').removeClass('form-error');
      $("#treatment_finish_date_year").prop('disabled', false);
      $("#treatment_finish_date_month").prop('disabled', false);
      $("#treatment_finish_date_day").prop('disabled', false);
    } else {
      $('.treatment_id_number').addClass('form-error').removeClass('form-success');
      $("#treatment_finish_date_year").prop('disabled', true);
      $("#treatment_finish_date_month").prop('disabled', true);
      $("#treatment_finish_date_day").prop('disabled', true);
    };
  });

/*  $('#treatment_finish_date_year').on("keyup", function(){
    var currentTime = new Date();
    if ($(this).val() >= currentTime.getFullYear()) {
      $(this).addClass('form-success').removeClass('form-error');
    } else {
      $(this).addClass('form-error').removeClass('form-success');
    };
  });


  $('#treatment_finish_date_month').on("keyup", function(){
    if ($(this).val() <= 12 && $(this).val() > 0){
      $(this).addClass('form-success').removeClass('form-error');
    } else {
      $(this).addClass('form-error').removeClass('form-success');
    };
  });

*/
  $('#treatment_finish_date_day').on("keyup", function(){
    var currentTime = new Date();
    var maxDaysInMonth = 0;
    var year = parseInt($('#treatment_finish_date_year').val());
    var month = parseInt($('#treatment_finish_date_month').val());
    var day = parseInt($(this).val());
    var userGivenDate = new Date(new Date(year, month-1, day));
    var thirtyDaysFromNow = new Date(new Date().setDate(new Date().getDate() + 30));

    switch (month) {
      case 4:
      case 6:
      case 9:
      case 11:
          maxDaysInMonth = 30;
          break;
      case 2:
            if (year % 4 == 0) {
              maxDaysInMonth = 29;
            } else {
              maxDaysInMonth = 28;
            }
              break;
      default:
          maxDaysInMonth = 31;
    };

//CHECKING IF THE TREATMENT FINISH DATE IS MAX 30 DAYS AFTER THE CURRENT DATE
    if (day > 0 &&
        day <= maxDaysInMonth &&
        userGivenDate.getTime() <= thirtyDaysFromNow.getTime() &&
        userGivenDate.getTime() > currentTime.getTime()
      ){
      $('.treatment_finish_date').addClass('form-success').removeClass('form-error');
//      $("#treatment_finish_date_month").addClass('form-success').removeClass('form-error');
//      $("#treatment_finish_date_year").addClass('form-success').removeClass('form-error');
      $(".tooth_quadrant").prop('disabled', false);
    } else {
      $('.treatment_finish_date').addClass('form-error').removeClass('form-success');
//      $("#treatment_finish_date_month").addClass('form-error').removeClass('form-success');
//      $("#treatment_finish_date_year").addClass('form-error').removeClass('form-success');
      $(".tooth_quadrant").prop('disabled', true);
    };
  });

  $('.tooth_quadrant').on('change', function(){
    if ($('.tooth_quadrant:input:checkbox:checked').length > 0) {
      $(this).addClass('form-success').removeClass('form-error');
      $('.treatment_type').prop('disabled', false);
    } else {
      $(this).removeClass('form-success').addClass('form-error');
      $('.treatment_type').prop('disabled', true);
    };
  });

  $('.treatment_type').on('change', function(){
    if ($('.treatment_type:input:checkbox:checked').length > 0) {
      $(this).addClass('form-success').removeClass('form-error');
      $('#data_check_button').prop('disabled', false);
    } else {
      $(this).removeClass('form-success').addClass('form-error');
      $('#data_check_button').prop('disabled', true);
    };
  });


});
