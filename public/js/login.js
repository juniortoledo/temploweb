//btn register
let btnLogin = $('.btn-login')
btnLogin.text('Login')

//submit register form
$('.form').submit(async (e) => {
  e.preventDefault()

  let email = $('#email'), senha = $('#senha')

  await btnLogin.text('Aguarde ...')
  // await btnLogin.removeClass('bg-dark')
  // await btnLogin.addClass('bg-danger')

  //envia os dados via post
  await axios.post(`${url}login`, {
    email: email.val(),
    password: senha.val(),
  })
    .then(async e => {
      //se status for 200
      if (e.data.status === 200) {

        //redirecionar para a tela de login
        window.location.href = `${url}dashboard`
      } else {

        //se status for 401
        $('.toast').toast('show')

        await btnLogin.text('Login')
      }
    })
    .catch(error => console.log(error))
})