<button>
    onclick="two()"2
    onclick="four()"4
</button>
//get the elements with class rows
var elements = document.getElementsByClassName("rows");

//declaring a loop variable
var i;

//two images side by side
function two(){
    for (i = 0; i < elements.length; i++) {
        elements[i].getElementsByClassName.flex = "50%"
    }
}
//four images side by side
function four(){
    for (i = 0; i < elements.length; i++) {
        elements[i].getElementsByClassName.flex = "25%"
    }
}