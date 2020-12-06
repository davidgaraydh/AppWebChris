    function error_msg(id,mensaje,animation){
      $("#"+id).removeClass("d-none");
                 $("#"+id).addClass(animation);
$("#"+id).html("<b><label>"+mensaje+"</label></b>");
 setTimeout(
  function(){
   $("#"+id).addClass("d-none");
 }, 3000); 
}




var error_mostra="";
var notNumber = /^[a-z A-Z]+$/;
var notNumberLight = /^[a-z A-Z0-9]*$/;
var reg = /^\d+$/;
var patt = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
// should contain at least one digit
 // should contain at least one lower case
// should contain at least one upper case
 // should contain at least 8 from the mentioned characters
var pass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
function  Fill_Estructura(Estructura,form_data){
  var bandera=true;
var All=[];
Estructura.forEach( function(valor, indice, array) {
   var Values=[];
    for (var i=0;i<valor.length;i++){
      if(i>0){
          if(valor[i]=="No se permiten numeros en este campo"){
             if(notNumber.test(form_data.get(valor[0]))==false){
                     bandera=false;
                     error_mostra=valor[i];
             }
          }else if (valor[i]=="En este campo no se permiten letras, unicamente numeros"){
       if(reg.test(form_data.get(valor[0]))==false){
                     bandera=false;
                      error_mostra=valor[i];
             }
          }
          else if (valor[i]=="Maximo 10000"){
       if(form_data.get(valor[0])>10000){
                     bandera=false;
                      error_mostra=valor[i];
             }
          }else if (valor[i]=="El formato del email es incorrecto"){
       if(patt.test(form_data.get(valor[0]))==false){
                     bandera=false;
                      error_mostra=valor[i];
             }
          }
          else if (valor[i]=="Mayor a 0"){
       if(form_data.get(valor[0])<=0){
                     bandera=false;
                      error_mostra=valor[i];
             }
          }
          else if (valor[i]=="La clave no cumple con las especificaciones necesarias"){
       if(pass.test(form_data.get(valor[0]))==false){
                     bandera=false;
                      error_mostra=valor[i];
             }
          }else if (valor[i]=="En este campo unicamente se permiten 10 caractereses"){
       if(form_data.get(valor[0]).length!=10){
                     bandera=false;
                      error_mostra=valor[i];
             }
          }
          else if (valor[i]=="En este campo se requieren minimo 8 caracteres"){
       if(form_data.get(valor[0]).length<8){
                     bandera=false;
                      error_mostra=valor[i];
             }
          }
          else if (valor[i]=="Este campo tiene como maximo la entrada de 20 caracteres"){
       if(form_data.get(valor[0]).length>20){
                     bandera=false;
                      error_mostra=valor[i];
             }
          }
                    else if (valor[i]=="Este campo permite letras y numeros pero no caracteres especiales"){
       if(notNumberLight.test(form_data.get(valor[0]))==false){
                     bandera=false;
                      error_mostra=valor[i];
             }
          }
                  else if (valor[i]=="Este campo permite como maximo la cantidad de 60, favor de poner un numero entre 1 y 60"){
       if(form_data.get(valor[0])>60){
                     bandera=false;
                      error_mostra=valor[i];
             }
          }
                else if (valor[i]=="Este campo no puede ir Vacio"){

       if(form_data.get(valor[0])==="" || form_data.get(valor[0]).replace(/\s/g, '').length===0){
                     bandera=false;
                      error_mostra=valor[i];
             }
          }
          
          
          Values[i-1]=bandera;
          bandera=true;
      }

}
All[indice]=Values;
});



return All;

}


function validacion(form_data,Validar,ids){



var resultado=Fill_Estructura(Validar,form_data);

var bandera=true;
for (var x=0;x<resultado.length;x++){

for(var i=0;i<resultado.length;i++){

  if(resultado[x][i]==false){

$("#"+ids[x]).addClass("error_color");
  error_msg("error","Error en el campo de "+ids[x]+" ya que el error es: "+error_mostra,"animation-msg");
  return  bandera=false;
}

}


}

return bandera;

}