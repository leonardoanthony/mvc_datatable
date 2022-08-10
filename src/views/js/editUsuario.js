fetchData('cargo');
fetchData('perfil');

async function editUsuario(id) {
    const promiseUser = await fetch(`/usuarios/edit?id=${id}`);
    const jsonUser = await promiseUser.json();

    let jsonCargo = getData('cargo');
    let jsonPerfil = getData('perfil');

    if (jsonUser["status"]) {
        const editModal = new bootstrap.Modal(
            document.getElementById("editModal")
        );

        let cargoOptions;
        let perfilOptions;

        jsonCargo.forEach(({ idcargo, nomecargo }) => {
            if (jsonUser["data"].idcargo == idcargo) {
                cargoOptions += `<option selected value="${idcargo}, ${nomecargo}">${nomecargo}</option>`;
            } else {
                cargoOptions += `<option value="${idcargo}, ${nomecargo}">${nomecargo}</option>`;
            }
        });
        jsonPerfil.forEach(({ idperfil, nomeperfil }) => {
            if (jsonUser["data"].idperfil == idperfil) {
                perfilOptions += `<option selected value="${idperfil}">${nomeperfil}</option>`;
            } else {
                perfilOptions += `<option value="${idperfil}">${nomeperfil}</option>`;
            }
        });

        document.forms.editModal.elements.editId.value =
            jsonUser["data"].id_usuario;
        document.forms.editModal.elements.editNome.value =
            jsonUser["data"].nome;
        document.forms.editModal.elements.editLogin.value =
            jsonUser["data"].login;
        document.forms.editModal.elements.editSenha.value =
            jsonUser["data"].senha;
        document.forms.editModal.elements.editCargo.innerHTML = cargoOptions;
        document.forms.editModal.elements.editPerfil.innerHTML = perfilOptions;
        document.forms.editModal.elements.editEndereco.value =
            jsonUser["data"].end;
        document.forms.editModal.elements.editBairro.value =
            jsonUser["data"].bairro;
        document.forms.editModal.elements.editCidade.value =
            jsonUser["data"].cidade;
        document.forms.editModal.elements.editEstado.value =
            jsonUser["data"].estado;
        document.forms.editModal.elements.editTelefone.value =
            jsonUser["data"].fone;
        document.forms.editModal.elements.editTelefone2.value =
            jsonUser["data"].fone2;
        document.forms.editModal.elements.editEmail.value =
            jsonUser["data"].email;

        editModal.show();
    } else {
        document.getElementById(
            "response-alert"
        ).innerHTML = `<div class="alert alert-danger" role="alert">${jsonUser["message"]}</div>`;
    }
}

function fetchData(tabela) {
    const url = `/usuarios/edit?table=${tabela}`;
    if(!sessionStorage.getItem(tabela)) {    
        fetch(url)
        .then(response => response.json())
        .then(json => sessionStorage.setItem(tabela, JSON.stringify(json)));
    }
}

function getData(tabela) {
    return JSON.parse(sessionStorage.getItem(tabela));
}