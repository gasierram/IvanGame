$(function () {
    $('.control-radio-personalizado').click(function () {
      let input_radio = $(this).prev('.radio-personalizado');
      
      if (input_radio.not(':checked')) {
        input_radio.prop('checked', true);
      }
    });
    
    $('.control-radio-personalizado-imagen').click(function () {
      let input_radio = $(this).prev('.radio-personalizado');
      
      if (input_radio.not(':checked')) {
        input_radio.prop('checked', true);
      }
    });
  });