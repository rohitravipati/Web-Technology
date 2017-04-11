function submitform()
{
  document.myform.submit();
}

$("#success-alert").fadeTo(4000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
});