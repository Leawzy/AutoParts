Email.send({
    Host : "smtp.yourisp.com",
    Username : "test@mail.com",
    Password : "passwordtest",
    To : 'them@website.com',
    From : "you@isp.com",
    Subject : "This is the subject",
    Body : "And this is the body"
}).then(
    message => alert(message)
);