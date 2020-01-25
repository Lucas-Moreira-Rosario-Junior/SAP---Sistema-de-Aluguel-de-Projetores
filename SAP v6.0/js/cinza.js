var dark = document.getElementById('btnDark');
var light = document.getElementById('btnLight');
var initial = document.getElementById('btnInitial');
var body = document.querySelector('body');
dark.onclick = function(){
 body.className = "filler:grayscale(100%)";
}

light.onclick = function(){
 body.className = "light";
}

initial.onclick = function(){
 body.className = "";
}
