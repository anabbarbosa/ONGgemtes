 function copiarConteudo(elementId) {
    
    var card = document.getElementById(elementId); // Obter o elemento card pelo ID
    var tempElement = document.createElement('textarea'); // Criar um elemento de texto temporário
    tempElement.value = card.innerText; // Definir o valor do elemento temporário como o conteúdo do card
    document.body.appendChild(tempElement); // Adicionar o elemento temporário ao body
    tempElement.select(); // Selecionar o conteúdo do elemento temporário
    tempElement.setSelectionRange(0, 99999); // Para dispositivos móveis
    document.execCommand('copy'); // Copiar o conteúdo selecionado para a área de transferência
    document.body.removeChild(tempElement); // Remover o elemento temporário do body
    var x = document.getElementById("toast");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
} 
