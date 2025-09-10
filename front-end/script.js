// Captura o formulário e mensagem de status
const form = document.getElementById("formContato");
const msgStatus = document.getElementById("msgStatus");

form.addEventListener("submit", function(e) {
  e.preventDefault();

  const nome = document.getElementById("nome").value.trim();
  const email = document.getElementById("email").value.trim();
  const mensagem = document.getElementById("mensagem").value.trim();

  if(nome && email && mensagem) {
    msgStatus.style.color = "green";
    msgStatus.textContent = "Mensagem enviada com sucesso! (em breve isso será salvo no banco de dados)";
    form.reset();
  } else {
    msgStatus.style.color = "red";
    msgStatus.textContent = "Por favor, preencha todos os campos.";
  }
});
