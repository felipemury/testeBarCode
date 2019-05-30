$.validator.addMethod("email",function(value){
  return value == "devmedia";
});
 
$.validator.addMethod("equal",function(value,element,param){
  return value == param;
});
 
$().ready(function(){
  var validator = $("#form").bind("invalid-form.validate",function(){
    $("#msg").html("Este formulari tem "+ validator.numberOfInvalids()+" erro(s)");
   
  }).validate(
    {
      errorElement:"el",  
      errorPlacement: function(error,element){
        element.parent("td").next("td").html(error);
      },
      success: function (label){
         
        label.text("Ok").removeClass("error").addClass("ok");
      },
      submitHandler: function(form){
        form.submit();
      },
      rules:{
        nome:{
          required:true,
          character: true,
          maxlength:15          
        },
        email:{
          required:true,
          password:true       
        },
        menssagem:{
          required:true,
          equal: "comentario"
        }
         
      },
      messages:{
        nome:{
          required:"Esse campo não pode ser vazio",
        },
        email:{
          required:"Esse campo não pode ser vazio",
          password: "digite o email"
        },
        menssagem:{
          required:"Esse campo não pode ser vazio",
          equal: "digite um comentario"
        }
           
      }
         
     
    }
   
  )
 
});