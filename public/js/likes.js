var likes = document.getElementById("likes");
var btnLikes = document.getElementById("btn-likes");
var closeLikes = likes.getElementsByClassName("close")[0];

btnLikes.onclick = function(){
    likes.style.display="block";
}
closeLikes.onclick = function(){
    likes.style.display = "none";
}

window.onclick = function(event){
    if(event.target === likes){
        likes.style.display = "none";
    }

}
