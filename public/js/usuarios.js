const getDados = async () => {
  try {

    //loading
    await $('#app').html(`
      <div class="d-flex align-items-center">
        <h6>Aguarde</h6>
        <div class="ms-4 spinner-border" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
    `)

    const res = await axios.get(`${url}dashboard/sistema/usuarios/listagem`)
    const data = await res.data

    //verifica se o array vem fazio
    if (data.length > 0) {
      //renderiza a tabela
      await $('#app').html(e => {
        return template(data.map((item, index) => itemTemplate(
          index + 1,
          item.nome,
          item.email,
          item.data_cadastro,
          item.telefone,
          item.id_user
        )).join(''))
      })

    } else {
      await $('#app').html('<p>Você ainda não tem usuários cadastrados</p>')
    }

  }
  catch { }
}

getDados()

let usuarios = []
//get usuarios
axios.get(`${url}dashboard/sistema/usuarios/listagem`)
  .then(async e => usuarios = await e.data)

//search
const search = () => {
  let input = $('#search').val()

  //verificaa quantidade de letras digitadas
  if (input.length > 0) {
    let filtro = usuarios.filter(item => item.nome.toLowerCase().includes(input.toLowerCase()))

    $('#app').html(e => {
      return template(filtro.map((item, index) => itemTemplate(
        index + 1,
        item.nome,
        item.email,
        item.data_cadastro,
        item.telefone,
        item.id_user
      )).join(''))
    })

  } else if (input.length < 1) {
    $('#app').html(e => {
      return template(usuarios.map((item, index) => itemTemplate(
        index + 1,
        item.nome,
        item.email,
        item.data_cadastro,
        item.telefone,
        item.id_user
      )).join(''))
    })
  }
}

const template = (item) => {
  let x = `
  <!-- lista de congregações -->
  <div style="overflow-x:auto">
    <table class="table" style="position: relative; min-width:800px;">
      <caption>Lista de usuários</caption>
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">E-mail</th>
          <th scope="col">Data cadastro</th>
          <th scope="col">celular</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        ${item}
      </tbody>
    </table>
    
  </div>
  `
  return x
}

const itemTemplate = (id, nome, email, data_cadastro, telefone, idUser) => {
  return `
  <tr>
    <th scope="row">${id}</th>
    <td>${nome}</td>
    <td>${email}</td>
    <td>${data_cadastro}</td>
    <td>${telefone}</td>
    <td><a href="${url}dashboard/sistema/usuarios/editar/${idUser}" class="btn btn-primary">
        <i class="material-icons">edit</i></a>
      <a href="${url}dashboard/sistema/usuarios/deletar/${idUser}" class="btn btn-danger">
        <i class="material-icons">delete</i></a>
    </td>
  </tr>
  `
}