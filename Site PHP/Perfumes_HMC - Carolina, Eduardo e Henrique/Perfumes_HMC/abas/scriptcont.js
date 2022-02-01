$(document).ready(function() {
    validate();
    $('input').on('keyup', validate);
  });
  function validate() {
    var inputsWithValues = 0;
    console.log('input');
    // pega todos os inputs com exceção ao ='submit'
    var myInputs = $("input:not([type='submit reset'])");
  
    myInputs.each(function(e) {
      // se tiver um valor, incrementa no contador
      if ($(this).val()) {
        inputsWithValues += 1;
      }
    });
    console.log($("input[type=submit]"))
    if (inputsWithValues == myInputs.length) {
      $("input[type=submit]").prop("disabled", false);
    } else {
      $("input[type=submit]").prop("disabled", true);
    }
  }