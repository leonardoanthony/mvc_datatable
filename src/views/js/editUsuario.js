async function editUsuario(id){
    const dados = await fetch(`/usuarios/edit?id=${id}`);
    const resposta = await dados.json();
    console.log(resposta);
}