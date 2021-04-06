//CONTACT FORM
    var user = document.getElementById('username'),
    mail = document.getElementById('email'),
    password = document.getElementById('password');
//VALAIDET USER
user.addEventListener('blur', function () {
    if (this.value.length < 4) {
        this.nextElementSibling.style.display="block";
    } else {
        this.nextElementSibling.style.display="none";
    }
})
mail.addEventListener('blur', function () {
    if (this.value.length < 4) {
        this.nextElementSibling.style.display="block";
    } else {
        this.nextElementSibling.style.display="none";
    }
})
password.addEventListener('blur', function () {
    if (this.value.length < 4) {
        this.nextElementSibling.style.display="block";
    } else {
        this.nextElementSibling.style.display="none";
    }
})