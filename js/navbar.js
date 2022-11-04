//var newURL = window.location.pathname + window.location.search;
var monURL = window.location.pathname;
// console.log(monURL);
lesProjets = document.getElementById('lesProjets');
lesUtilisateurs = document.getElementById('lesUtilisateurs');

//Atribution de la class active pour avoir les nom de page ecrit en gras sur la navbar
switch(monURL){
    case '/':
        lesProjets.classList.add("active");
        break;
    case '/les_users':
        lesUtilisateurs.classList.add("active");
        break;
}



