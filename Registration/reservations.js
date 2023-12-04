const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navLinks = document.getElementsByClassName('navlinks')[0]

toggleButton.addEventListener('click', () => {
    navLinks.classList.toggle('active')
})


var email = document.form['form']['email']
var password = document.form['form']['password']

var email_error = document.getElementById('email_error')
var pass_error = document.getElementById('pass_error')

