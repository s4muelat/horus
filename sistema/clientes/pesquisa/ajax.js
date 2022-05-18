/**
  * Função para criar um objeto XMLHTTPRequest
  */
function CriaRequest() {
    try{
        request = new XMLHttpRequest();
    }catch (IEAtual){

        try{
            request = new ActiveXObject("Msxml2.XMLHTTP");
        }catch(IEAntigo){

            try{
                request = new ActiveXObject("Microsoft.XMLHTTP");
            }catch(falha){
                request = false;
            }
        }
    }

    if (!request)
        alert("Seu Navegador não suporta Ajax.");
    else
        return request;
}

/**
 * Função para enviar os dados
 */

function buscaCliente() {

    setTimeout( () => {

    var atributo = "&tipoDado=";
    var tipoDado = atributo + document.getElementById("tipoDado").value;
    var dado     = document.getElementById("buscaCliente").value;
    var result   = document.getElementById("container2");
    var xmlreq   = CriaRequest();

    if(dado.length < 4) {
        windows.stop();
    }
    
    xmlreq.open("GET", "clientes/pesquisa/buscaCliente.php?dado=" + dado + tipoDado, true);

    // Atribui uma função para ser executada sempre que houver uma mudança de ado
    xmlreq.onreadystatechange = function() {
        // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
        if (xmlreq.readyState == 4) {
            // Verifica se o arquivo foi encontrado com sucesso
            if (xmlreq.status == 200) {
                result.innerHTML = xmlreq.responseText;
            } else{
                result.innerHTML = "Erro: " + xmlreq.statusText;
            }
        }
    };
    xmlreq.send(null);
    }, 1500 );

}
