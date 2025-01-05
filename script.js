$(document).ready(function()
{

  $('#veg-filter').on('click',function()
  {

    $('.menu-item').each(function()
  {
    if ($(this).find('.category').text() === 'Veg') {
      $(this).show();
    } else {
      $(this).hide();
    }
  });



  });


  $('#non-veg-filter').on('click',function()
  {

    $('.menu-item').each(function()
  {
    if ($(this).find('.category').text() === 'Non-Veg') {
      $(this).show();
    } else {
      $(this).hide();
    }
  });



  });

  $('#all-filter').on('click',function()
  {

    $('.menu-item').each(function()
  {
    
      $(this).show();
     
  });



  });





});