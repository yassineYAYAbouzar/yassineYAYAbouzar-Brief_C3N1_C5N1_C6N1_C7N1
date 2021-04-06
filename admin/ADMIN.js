var FormationS = document.querySelectorAll('#FormationS');
var technosE = document.querySelectorAll('#technosE');
var validations = document.querySelectorAll('#validation');
var niveux = document.querySelectorAll('#niveux');
var navbarToggler = document.querySelector('.navbar-toggler');
var navbarLg = document.querySelector('.navbar-expand-lg');
var Suprime = document.querySelectorAll('.Suprime');
Suprime.forEach(Suprim => {
    Suprim.addEventListener('click',function(event){
        
            var txt;
            var r = confirm("Etes-vous sûr que vous voulez supprimer");
            if (r == true) {
              txt = "success";
            } else {
                event.preventDefault();
            }
    })
});
FormationS.forEach(Formatio => {
    Formatio.addEventListener('click' , function () {
            this.nextElementSibling.classList.toggle('d-none');
    });
});
technosE.forEach(techno => {
    techno.addEventListener('click' , function () {
            this.nextElementSibling.classList.toggle('d-none');
    });
});
niveux.forEach(niveu => {
    niveu.addEventListener('click' , function () {
            this.nextElementSibling.classList.toggle('d-none');
    });
});

validations.forEach(validation => {
    if (validation.className==="btn btn-danger col-lg-12 Yes") {
      validation.classList.remove('btn-danger');
      validation.classList.add('btn-success');
      validation.innerText="active"; 
}});
navbarToggler.addEventListener('click',function(){
    navbarLg.classList.toggle('TogelNav');
        
})

var progress = document.querySelectorAll('.progress-bar ');

progress.forEach(progres => {
    if(progres.style.width == "25%"){progres.classList.add('bg-danger')}
    if(progres.style.width == "50%"){progres.classList.add('bg-warning')}
    if(progres.style.width == "75%"){progres.classList.add('bg-success')}
    
});
