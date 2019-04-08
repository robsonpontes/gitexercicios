<html>
 <head>
<title>Exercicio 3</title>


<link rel="stylesheet" type="text/css" href="css.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

    <script>
    function enviar(){
        $.ajax({
            url: "recebimento.php", 
            data: {
                n1 : $("#n1").val(),
                n2 : $("#n2").val(),
                n3 : $("#n3").val()
                
            },
            success: function(result){
                $ ("#retorno").val(result);  
                
            },
        });
        
    }
     



    function limpar(){
      document.getElementById('retorno').value = " ";
      document.getElementById('n1').value = " ";
      document.getElementById('n2').value = " ";
      document.getElementById('n3').value = " ";
       
    }




    </script>
 <body>
       <div class="vitrine">
            <center><h2 style="color: white">Teste lógico de PHP e JavaScript</h2></center>
        </div>

    <div class="vitrine2">
         <form>
             <label style="font-size: larger">Informe os 3 numeros abaixo: </label>
              <br>
              <input id= n1 type="number">
              <input id= n2 type="number">  
              <input id= n3 type="number">
              <input id="salvar" type="button" onclick="enviar()" value="Salvar "/> 
                
                <div>
                    <input type="radio"  value="maior" id="maior" name="alternar" checked=""> Exibir os maiores valores                    <br>
                    <input  type="radio"   value="menor" id="menor"  name="alternar"> Exibir os menores valores
                </div>
         </form>
  
 <label style="font-size: larger" id="result">Resultado</label>
 <input class="resposta" type="text" id="retorno" value=""/>
 <input id="limpar" type="button" onclick="limpar()" value="limpar "/>

    </div>


 </body>
</html>