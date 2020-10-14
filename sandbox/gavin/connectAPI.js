function getEmail()
{
var email = parseInt( document.getElementById('email').value);
fetch('https://repl.it/@cmorningstar79/mailgun-testing#main.py/email?email=' + email)
}