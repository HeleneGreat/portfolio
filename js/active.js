let linksFlex = document.getElementById("menuprincipal").getElementsByTagName("a"); 

for(let i=0; i<linksFlex.length; i++){
    if(linksFlex[i].href == location.href){
        linksFlex[0].classList.remove('isactive');
        linksFlex[i].classList.add('isactive');
    }
}
