var followed = document.getElementById("followed");
var btnFollowed = document.getElementById("btn-followed");
var closeFollowed = followed.getElementsByClassName("close")[0];

var follower = document.getElementById("follower");
var btnFollower = document.getElementById("btn-follower");
var closeFollower = follower.getElementsByClassName("close")[0];

var posts = document.getElementById("posts");
var btnPosts = document.getElementById("btn-posts");
var closePosts = posts.getElementsByClassName("close")[0];

btnFollowed.onclick = function (){
    followed.style.display = "block";
    follower.style.display = "none";
    posts.style.display = "none";
}
closeFollowed.onclick = function(){
    followed.style.display = "none";
}

btnFollower.onclick = function (){
    follower.style.display = "block";
    followed.style.display = "none";
    posts.style.display = "none";
}
closeFollower.onclick = function(){
    follower.style.display = "none";
}

btnPosts.onclick = function (){
    posts.style.display = "block";
    follower.style.display = "none";
    followed.style.display = "none";
}
closePosts.onclick = function(){
    posts.style.display = "none";
}

window.onclick = function(event){
    if(event.target === follower){
        follower.style.display = "none";
    }
    if(event.target === followed){
        followed.style.display = "none";
    }
    if(event.target === posts){
        posts.style.display = "none";
    }

}
