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

    const res = await axios.get(`${url}dashboard/igrejas/listagem`)
    const data = await res.data

    //verifica se o array vem fazio
    if (data.length > 0) {
      //renderiza a tabela
      await $('#app').html(e => {
        return template(data.map((item, index) => itemTemplate(
          index + 1,
          item.nome_igreja,
          item.tipo,
          item.pastor,
          item.id
        )).join(''))
      })

    } else {
      await $('#app').html('<p>Você ainda não tem igrejas cadastradas</p>')
    }

  }
  catch { }
}

getDados()

let igrejas = []
//get igrejas
axios.get(`${url}dashboard/igrejas/listagem`)
  .then(async e => igrejas = await e.data)

//search
const search = () => {
  let input = $('#search').val()

  //verificaa quantidade de letras digitadas
  if (input.length > 0) {
    let filtro = igrejas.filter(item => item.nome_igreja.toLowerCase().includes(input.toLowerCase()))

    $('#app').html(e => {
      return template(filtro.map((item, index) => itemTemplate(
        index + 1,
        item.nome_igreja,
        item.tipo,
        item.pastor,
        item.id
      )).join(''))
    })

  } else if (input.length < 1) {
    $('#app').html(e => {
      return template(igrejas.map((item, index) => itemTemplate(
        index + 1,
        item.nome_igreja,
        item.tipo,
        item.pastor,
        item.id
      )).join(''))
    })
  }
}

const template = (item) => {
  let x = `
  <!-- lista de congregações -->
  <div style="overflow-x:auto">
    <table class="table" style="position: relative; min-width:800px;">
      <caption>Lista de igrejas</caption>
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Tipo</th>
          <th scope="col">Liderança</th>
          <th scope="col">Pessoas</th>
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

const itemTemplate = (id, nome_igreja, tipo, pastor, idUser) => {
  return `
  <tr>
    <th scope="row">${id}</th>
    <td>${nome_igreja}</td>
    <td>${tipo}</td>
    <td>${pastor}</td>
    <td>0</td>
    <td><a href="${url}dashboard/igrejas/editar/${idUser}" class="btn btn-primary">
        <i class="material-icons">edit</i></a>
      <a href="${url}dashboard/igrejas/deletar/${idUser}" class="btn btn-danger">
        <i class="material-icons">delete</i></a>
    </td>
  </tr>
  `
}