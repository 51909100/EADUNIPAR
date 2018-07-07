<!DOCTYPE html>
<html>
<head>  
           <title>  ATIVIDADE REFLEXIVA </title> 
            <meta charset="utf-8"/>     <!--ISSO É PARA APARECER CARACTER CORRETO--> 
      <link rel="stylesheet" type="text/css" href="estilosar.css">
      <link rel="stylesheet" type="text/css" href=" .css">
      
   </head>

 <body bgcolor="#0000FF">  
            
            <div class="cabecalho">
                
            <img src="logo.jpg" alt="ANALISE DESENVOLVIMENTO SISTEMAS" title="LOGO" vspace="2px" hspace="3px" border="3px" align="left"> 

        <h2>  <STRONG> <center>  FUNDAMENTOS DE PROGRAMAÇÃO INTERNET <BR> ATIVIDADE REFLEXIVA -
                             FORMULÁRIO DE CADASTRO </h2> 
</center>
                            
            </div>
       <form action="#" method="post">
    <fieldset bgcolor="#22222" <strong> 

            <h4> <center> <legend>PREENCHA O FORMULÁRIO ABAIXO E CLIQUE EM ENVIAR</legend></h4></center>
                    <div class="grupo">
                    <div class="campo">
                     <label for="nome">Nome Completo</label> 
                        <input type="text" id="nome" name="nome" style= "width: 40em" value="" placeholder="Digite seu nome">          
                        
                    </label>
                        <div class="campo">  <br>                
                     <label>Sexo</label>
                     <input type="radio" name="sexo" value="masculino"> Masculino <br>
                        <input type="radio" name="sexo" value="masculino"> Feminino   <br>           
                    </div>  
                    </label>
                <div class="campo">
                    <label for="nome">Endereço</label>
                    <input type="text" id="Endereço" name="Endereço" style="width: 60em" value="" placeholder="Digite seu endereço completo">
                </div> 
                </div>  
                    </label>
                <div class="campo">
                    <label for="nome">Bairro</label>
                    <input type="text" id="Endereço" name="Endereço" style="width: 60em" value="" placeholder="Digite aqui nome do seu bairro">  <br>
                </div>                 
                </div>
                <div class="campo">
                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" style="width: 60em" value="" placeholder="Digite seu E-mail">
                </div>
                <div class="campo">
                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" style="width: 20em" value="" placeholder="Digite seu Telefone">
                </div>            
                 <div class="grupo">
                <div class="campo">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" name="cidade" style="width: 20em" value="" placeholder="SUA CIDADE E ESTADO">
                </div>
                <div class="campo">
                    <label for="estado">Estado</label>
                    <select name="estado" id="estado">
                        <option value="">--</option>
                        <option value="MS,">MS</option>
                        <option value="SC,">SC</option>
                        <option value="MG,">MG</option>
                        <option value="PR,">PR</option>
                        <option value="SP,">SP</option>
                        <option value="GO,">GO</option>
                        <option value="RJ,">RJ</option>
                        </select>
                     </div>
        
<center>        <div class="campo"><br>
            <label for="mensagem">REFERÊNCIAS</label>
            <input type="text" id="nome" name="nome" style= "width: 60em" value="" placeholder="DIGITE AQUI- CASO DESEJE INSERIR MAIS INFORMAÇÕES CLIQUE NA BARRA ABAIXO">
           
             <div class="botao"><br>
            <button type="submit" name="submit">Enviar</button>
         </div>
    </fieldset>
</form>

</body>

</html>
</center>


<div class="adicionarcampo"> <center>
<html>
<head>
<script type="text/javascript">
//Total máximo de campos que você permitirá criar em seu site:
var totalCampos = 3;

//Não altere os valores abaixo, pois são variáveis controle;
var iLoop = 1;
var iCount = 0;
var linhaAtual;


function AddCampos() {
var hidden1 = document.getElementById("hidden1");
var hidden2 = document.getElementById("hidden2");

//Executar apenas se houver possibilidade de inserção de novos campos:
if (iCount < totalCampos) {

//Limpar hidden1, para atualizar a lista dos campos que ainda estão vazios:
hidden2.value = "";

//Atualizando a lista dos campos que estão ocultos.
//Essa lista ficará armazenada temporiariamente em hidden2;
for (iLoop = 1; iLoop <= totalCampos; iLoop++) {
        if (document.getElementById("linha"+iLoop).style.display == "none") {
                if (hidden2.value == "") {
                        hidden2.value = "linha"+iLoop;
                }else{
                        hidden2.value += ",linha"+iLoop;
                }
        }
}
//Quebrando a lista que foi armazenada em hidden2 em array:

linhasOcultas = hidden2.value.split(",");


        if (linhasOcultas.length > 0) {
                //Tornar visível o primeiro elemento de linhasOcultas:
                document.getElementById(linhasOcultas[0]).style.display = "block"; iCount++;
                
                //Acrescentando o índice zero a hidden1:
                if (hidden1.value == "") {
                        hidden1.value = linhasOcultas[0];
                }else{
                        hidden1.value += ","+linhasOcultas[0];
                }
                
                /*Retirar a opção acima da lista de itens ocultos: <-------- OPCIONAL!!!
                if (hidden2.value.indexOf(","+linhasOcultas[0]) != -1) {
                        hidden2.value = hidden2.value.replace(linhasOcultas[0]+",","");
                }else if (hidden2.indexOf(linhasOcultas[0]+",") == 0) {
                        hidden2.value = hidden2.value.replace(linhasOcultas[0]+",","");
                }else{
                        hidden2.value = "";
                }
                */
        }
}
}

function RemoverCampos(id) {
//Criando ponteiro para hidden1:        
var hidden1 = document.getElementById("hidden1");

//Pegar o valor do campo que será excluído:
var campoValor = document.getElementById("arq"+id).value;
        //Se o campo não tiver nenhum valor, atribuir a string: vazio:
        if (campoValor == "") {
                campoValor = "vazio";
        }

        if(confirm("O campo que contém o valor:\n» "+campoValor+"\nserá excluído!\n\nDeseja prosseguir?")){
                document.getElementById("linha"+id).style.display = "none"; iCount--;
                
                //Removendo o valor de hidden1:
                if (hidden1.value.indexOf(",linha"+id) != -1) {
                        hidden1.value = hidden1.value.replace(",linha"+id,"");
                }else if (hidden1.value.indexOf("linha"+id+",") == 0) {
                        hidden1.value = hidden1.value.replace("linha"+id+",","");
                }else{
                        hidden1.value = "";
                }
        }
}
</script>
</head>
<body>
<form name="form1" action="paginaPHPouASP" method="post">

<script type="text/javascript">
//Escrevendo o código-fonte HTML e ocultando os campos criados:
for (iLoop = 1; iLoop <= totalCampos; iLoop++) {
        document.write("<span id='linha"+iLoop+"' style='display:none'> INFORMAÇÕES ADCIONAIS "+iLoop+": <input type='text' id='arq"+iLoop+"' name='arq"+iLoop+"'> <input type='button' value='Remover' onclick='RemoverCampos(\""+iLoop+"\")'></span>");
}


</script>
<input type="button" value="Se deseja enviar mais informações clique aqui" onclick="AddCampos()">
<br>
<!--
Atenção!!! No código fonte, altere o "text" do campo abaixo para "hidden": -->
<br><br><input type="hidden" name="hidden1" id="hidden1">
<br> <!--Esse campo do tipo "hidden" irá passar a id dos campos que foram criados. Na página ASP ou PHP (ou outra linguagem server-side) você poderá dar um split para recuperar o valor dos campos que foram passados! -->


<input type="hidden" name="hidden2" id="hidden2">
</form>

</body>
</html>
</fieldset>

</form>
</body>
</div>
</center>
</html>