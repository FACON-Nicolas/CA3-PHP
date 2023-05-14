function display(id){
    var likes = document.getElementById("likes"+id);
    likes.style.display = "block";
    window.onclick = function (event){
        if(event.target === likes){
            likes.style.display = "none";
        }
    }
}

function hide(id){
    var likes = document.getElementById("likes"+id);
    likes.style.display = "none";
}
