<!DOCTYPE html>
<html>
<head>  
               <title>  ATIVIDADE REFLEXIVA </title> 
                <meta charset="utf-8"/>     <!--ISSO É PARA APARECER CARACTER CORRETO--> 
                    <link rel="stylesheet" type="text/css" href="estilosar.css"
                    <script language="javascript" type="text/javascript">
<script language="javascript" type="text/javascript">
        function validacao () {
            var nome = reflexiva.nome.value;
            var email = reflexiva.email.value;
            var endereco =reflexiva.endereco.value;
            var bairro = reflexiva.bairro.value;
            var telefone=reflexiva.telefone.value;
            var cidade =reflexiva.cidade.value;

            if (nome =="" || email=="" || endereco=="" ||bairro=="" ||telefone==""||cidade==""){
                alert ("PREENCHA TODOS OS CAMPOS OBRIGATORIAMENTE");
                reflexiva.nome.focus();
                return false
                     
         }     
         
            }
</script>
</head>
 <body bgcolor=#3104B4 > 

                        <div class="cabecalho">
                                <img src="logo.jpg" alt="ANALISE DESENVOLVIMENTO SISTEMAS" title="LOGO" vspace="7px" 
                                hspace="30px" border="7px" align="left"> <br> 
                                 
                        <h2>  <STRONG> <center> FUNDAMENTOS DE PROGRAMAÇÃO INTERNET <BR> ATIVIDADE REFLEXIVA -
                                     FORMULÁRIO DE CADASTRO </h2> </center>
                                    
                        </div>
         
         <fieldset> 
            <img src="cursotela.jpg" alt="curso" title="LOGO" vspace="7px" 
                                hspace="30px" border="7px" align="left"> <br><Br>
 <strong> <h2> <center> <legend>PREENCHA O FORMULÁRIO <br> ABAIXO E CLIQUE EM ENVIAR</legend></h2></center>
           
           <form name="reflexiva" action="#" method="post" onsubmit= "return validacao( );">
               
                            <div class="grupo">
                                <div class="campo">
                                    Nome:<input type="text" id="nome" name="nome" style= "width: 90em"  placeholder="Digite seu nome">
                               <div class="campo">                 
                                Sexo:<br><input type="radio" name="sexo" value="masculino"> Masculino <br>
                                    <input type="radio" name="sexo" value="masculino"> Feminino   <br>           
                            </div> 
                                    <div class="campo">
                                    Endereço:<input type="text" id="endereco" name="endereco" style="width: 90em" value="" placeholder="Digite seu endereço completo">
                                </div> 
                                  
                                 <div class="campo">
                                    Bairro: <input type="text" id="Bairro" name="bairro" style="width: 90em" value="" placeholder="Digite aqui nome do seu bairro">  <br>
                                 </div>                 
                                <div class="campo">
                                    Email: <input type="text" id="email" name="email" style="width: 90em" value="" placeholder="Digite seu E-mail">
                                </div>
                            <div class="campo">
                                Telefone: <input type="text" id="telefone" name="telefone" style="width: 90em" value="" placeholder="Digite seu Telefone">
                            </div>  
                         <div class="grupo">
                            <div class="campo">
                                Cidade: <input type="text" id="cidade" name="cidade" style="width: 90em" value="" placeholder="SUA CIDADE E ESTADO">
                            </div>
                         </div>
                        <div class="campo">
                            Estado: <select name="estado" id="estado">
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
                       REFERÊNCIAS PESSOAIS: <br> <textarea rows="05" cols="20" maxlength="100"></textarea><Br> CASO DESEJE INSERIR MAIS INFORMAÇÕES CLIQUE ADICIONAR CAMPOS ANTES DE ENVIAR "OBRIGADO" <br>
                             
                   
</body>

</html>
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

<input type="button" value="Adicionar campos" onclick="AddCampos()">
<br>
<!--
Atenção!!! No código fonte, altere o "text" do campo abaixo para "hidden": -->
<br><input type="hidden" name="hidden1" id="hidden1">
<br> <!--Esse campo do tipo "hidden" irá passar a id dos campos que foram criados. Na página ASP ou PHP (ou outra linguagem server-side) você poderá dar um split para recuperar o valor dos campos que foram passados! -->
<input type="hidden" name="hidden2" id="hidden2">
</form>
<button type="submit" name="submit">Enviar</button>
</body>
</html>




