let idchapa = 0;

function secao(c) {
	
}

function login(verifica) {
let mensagem = "";
    mensagem += document.forms["form"]["crm"].value;
    mensagem += document.forms["form"]["senha"].value;

    if (mensagem != "123abc") {
        alert("Erro ao verificar login:\n" + mensagem);
		document.getElementById("erroLogin").style.display = inline;
    } else {
        location.replace("telas/chapa.php");
    }
	return false;
}

function nome(eleicao1) {
	alert("Você selecionou " + eleicao1);
	document.cookie = "eleicao1=" + eleicao1 + "; path=./;";
	location.replace("confirmar.php");
}

function telaConfirma(cand) {
	let x = getCookie("eleicao1");
	document.getElementById("imagemC").innerHTML = x;
	document.getElementById("nomeC").innerHTML = x;
}

function confirma() {
    location.replace("sucesso.php");
}

function volta() {
    location.replace("chapa.php");
}
