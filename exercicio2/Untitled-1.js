   function teste(){
   var n1 = (document.getElementById('n1').value);
   var n2 = (document.getElementById('n2').value);
   var n3 = (document.getElementById('n3').value);
   var maior = document.getElementById('maior').checked;   
   var menor = document.getElementById('menor').checked;
  
   orden = [n1,n2,n3];
   


  //var ordenado = (orden.sort(sortfunction));
    
      if(maior === true){

       var ordenadomaior = Math.max(...orden);
        document.getElementById('resposta').value = document.getElementById('resposta').value +
         ' '+ ordenadomaior;

      }else{
        var ordenmenor = Math.min(...orden);
        document.getElementById('resposta').value = document.getElementById('resposta').value +
         ' '+ ordenmenor;
      }
  }
 





  

  function limpar(){
      document.getElementById('resposta').value = " ";
      document.getElementById('n1').value = " ";
      document.getElementById('n2').value = " ";
      document.getElementById('n3').value = " ";
  }






/*
function sortfunction(a, b){
  return (a - b) //faz com que o array seja ordenado numericamente e de ordem crescente.

}


*/

