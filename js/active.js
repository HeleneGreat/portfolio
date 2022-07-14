let linksFlex = document.getElementById("menuprincipal").getElementsByTagName("a"); 

for(let i=0; i<linksFlex.length; i++){
    if(linksFlex[i].href == location.href){
        linksFlex[1].classList.remove('isactive');
        linksFlex[i].classList.add('isactive');
    }
    else if(window.location.toString().includes("detail-portfolio")){
        linksFlex[3].classList.add('isactive');
    }
}
