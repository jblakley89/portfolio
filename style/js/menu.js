$(function(){
    var pageLinks = document.getElementById("menu").getElementsByTagName("li");
    var page = document.baseURI;
    var isHome = true;

    for(var i=0; i<pageLinks.length; i++){
        var link = pageLinks[i];
        if(pageLinks[i].childNodes[0].href == page){
            pageLinks[i].classList.add("active");
            isHome = false;
        }else{
            pageLinks[i].classList.remove("active");   
        }
    }

    if(isHome){
        pageLinks[0].classList.add("active");
    }
});
