/*
   biblioteca de usu�rio usada para validar os campos do formul�rio quando ele for enviado via fun��o $.ajax (evento submit)
*/

inputComErro="";  // cria vari�vel global

function validarDados(){

   if ( $("#nome").val().trim().length == 0 ){
      //  mensagem de erro em janela modal
      $("#modalErroTitulo").text("Erro de Digitação");
      $("#modalErro").text("O campo nome não pode ficar em branco!");
      $("#janelaModalErro").modal();      
      // guardar na vari�vel global inputComErro o id do campo que est� ativo (onde o cursor est�)
      inputComErro = "#nome";
      // cancela o envio do formulario
      return false;
   }
   if ( $("#endereco").val().trim().length == 0 ){
      //  mensagem de erro em janela modal
      $("#modalErroTitulo").text("Erro de Digitação");
      $("#modalErro").text("O campo endereço não pode ficar em branco!");
      $("#janelaModalErro").modal();      
      // guardar na vari�vel global inputComErro o id do campo que est� ativo (onde o cursor est�)
      inputComErro = "#endereco";
      // cancela o envio do formulario
      return false;
   }
   if ( $("#complemento").val().trim().length == 0 ){
      //  mensagem de erro em janela modal
      $("#modalErroTitulo").text("Erro de Digitação");
      $("#modalErro").text("O campo complemento não pode ficar em branco!");
      $("#janelaModalErro").modal();      
      // guardar na vari�vel global inputComErro o id do campo que est� ativo (onde o cursor est�)
      inputComErro = "#complemento";
      // cancela o envio do formulario
      return false;
   }
   if ( $("#bairro").val().trim().length == 0 ){
      //  mensagem de erro em janela modal
      $("#modalErroTitulo").text("Erro de Digitação");
      $("#modalErro").text("O campo bairro n�o pode ficar em branco!");
      $("#janelaModalErro").modal();      
      // guardar na vari�vel global inputComErro o id do campo que est� ativo (onde o cursor est�)
      inputComErro = "#bairro";
      // cancela o envio do formulario
      return false;
   }
   if ( $("#cidade").val().trim().length == 0 ){
      //  mensagem de erro em janela modal
      $("#modalErroTitulo").text("Erro de Digitação");
      $("#modalErro").text("O campo cidade não pode ficar em branco!");
      $("#janelaModalErro").modal();      
      // guardar na vari�vel global inputComErro o id do campo que est� ativo (onde o cursor est�)
      inputComErro = "#cidade";
      // cancela o envio do formulario
      return false;
   }
   if ( $("#cep").val().trim().length == 0 ){
      //  mensagem de erro em janela modal
      $("#modalErroTitulo").text("Erro de Digitação");
      $("#modalErro").text("O campo CEP não pode ficar em branco!");
      $("#janelaModalErro").modal();      
      // guardar na vari�vel global inputComErro o id do campo que est� ativo (onde o cursor est�)
      inputComErro = "#cep";
      // cancela o envio do formulario
      return false;
   }
   if ( $("#email").val().trim().length == 0 ){
      //  mensagem de erro em janela modal
      $("#modalErroTitulo").text("Erro de Digitação");
      $("#modalErro").text("O campo EMAIL não pode ficar em branco!");
      $("#janelaModalErro").modal();      
      // guardar na vari�vel global inputComErro o id do campo que est� ativo (onde o cursor est�)
      inputComErro = "#email";
      // cancela o envio do formulario
      return false;
   }
   /* Se nenhum erro ocorreu, retorna verdadeiro */
   return true;
}

