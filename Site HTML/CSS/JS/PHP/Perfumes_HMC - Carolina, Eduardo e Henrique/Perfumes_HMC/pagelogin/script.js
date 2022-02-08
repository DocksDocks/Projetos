//ver se a senha está igual a senha confirmada
function checkPassword(){
    let password = document.getElementById
    ("senha1").value;
    let cnfrmPassword = document.getElementById
    ("senha2").value;
    let sub = document.getElementById
    ("sub");
    console.log(password,cnfrmPassword,sub);
    let message = document.getElementById
    ("message");
    if(password.length != 0 && cnfrmPassword.length != 0){
        if(password == cnfrmPassword){
        message.innerHTML = "Senhas correspondem <br>";
        message.style.backgroundColor = "#3ae374";
        $('#sub').prop('disabled', false);
        $('#sub').removeClass('btn-disabled');
    }
    else{
        message.innerHTML = "Senhas não correspondem <br>";
        message.style.backgroundColor = "#ff4d4d";
        $('#sub').prop('disabled', 'disabled');
        $('#sub').addClass('btn-disabled');
    }
}
else{
  $('#sub').prop('disabled', 'disabled');
        $('#sub').addClass('btn-disabled');
    message.textContent="";
}
}
//fim da verificação



$(document).ready(function() {
    validate();
    $('input').on('keyup', validate);
  });
  function validate() {
    var inputsWithValues = 0;
    
    // pega todos os inputs com exceção ao ='submit'
    var myInputs = $("input:not([type='submit'])");
  
    myInputs.each(function(e) {
      // se tiver um valor, incrementa no contador
      if ($(this).val()) {
        inputsWithValues += 1;
      }
    });
  
    if (inputsWithValues == myInputs.length) {
      $("input[type=submit]").prop("disabled", false);
    } else {
      $("input[type=submit]").prop("disabled", true);
    }
  }
