//btn register
let btnCadastro = $('.btn-cadastro')
btnCadastro.text('Cadastrar')

//submit register form
$('.form').submit(async (e) => {
  e.preventDefault()

  let nome = $('#nome'), email = $('#email'), senha = $('#senha')

  await btnCadastro.text('Aguarde ...')
  // await btnCadastro.removeClass('bg-dark')
  // await btnCadastro.addClass('bg-danger')

  //envia os dados via post
  await axios.post(`${url}cadastro`, {
    nome: nome.val(),
    email: email.val(),
    password: senha.val(),
  })
    .then(async e => {
      //se status for 200
      if (e.data.status === 200) {

        //redirecionar para a tela de login
        window.location.href = `${url}login`
      } else {

        //se status for 401
        $('.toast').toast('show')

        await btnCadastro.text('Cadastrar')
      }
    })
    .catch(error => console.log(error))
})