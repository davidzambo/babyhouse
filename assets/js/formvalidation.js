$(document).ready(function(){
  $("#personal_title").change(function(){
    if ($(this).val() === "default") {
      $(this).addClass('form-error').removeClass('form-success');
    } else {
      $(this).addClass('form-success').removeClass('form-error');
    };
  });
});
