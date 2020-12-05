function verificar(recid) {
	if (confirm("Tem certeza que deseja excluir permanentemente este cadastro?")) {
			window.location ="delete.php? idexc=" + recid;
			}
}
