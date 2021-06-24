const sidenav = $('.sidenav')
const sidenavOpen = $('.btn-menu')
const sidenavClose = $('.sidenav-close')
const bgSidenav = $('.bg-sidenav')

//open sidenav
sidenavOpen.click(e => { sidenav.addClass('open'); bgSidenav.addClass('open-bg') })

//close sidenav
sidenavClose.click(e => { sidenav.removeClass('open'); bgSidenav.removeClass('open-bg') })