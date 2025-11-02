
const user = localStorage.getItem("user")
const chave = localStorage.getItem("chave")

function enviarMensagem() {
    if (user == null || chave == null)
        window.open('./../paginas/login.php', '_self');
    // alert(user + "  " + chave)
}


const form = document.getElementById('suporte')

form.addEventListener('submit', (e) => {
    e.preventDefault();
    enviarMensagem();
})