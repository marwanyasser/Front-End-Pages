var list_of_lists = [];
var selected = null;
var number = 0;
function addtodo() {
   if(document.getElementById("l1").value != "") {
        var input = document.getElementById("l1").value;
        list_of_lists.push([]);
        selected = number;
        if(number == 0) {document.getElementById("primary_list").innerHTML = "";}
        document.getElementById("primary_list").innerHTML = document.getElementById("primary_list").innerHTML + `<li><a onclick="clickfunction(${number})" id="${number}"> - ${input} </a> <button id="${number}btn" class="delete-btn" onclick="delete_fun(${number})">X</button></li>`;
        if(number == 0) {document.getElementById(`${number}`).style.color = "yellow";}
        number++;
   }
}
function addlist () {
    if(document.getElementById("l2").value != "" && selected != null) {
        var input = document.getElementById("l2").value;
        console.log(list_of_lists[selected]);
        list_of_lists[selected].push(input);    
        document.getElementById("secondary_list").innerHTML = document.getElementById("secondary_list").innerHTML + `<li> - ${input} </li>`;
    }
}
function clickfunction(element) {
    input = element;
    console.log(input);
    element = document.getElementById(element);
    console.log(element);
    selected = input;
    resetAllColors();
    element.style.color = "yellow";
    document.getElementById("secondary_list").innerHTML = "";
    showcaseItems(list_of_lists[input]);
    console.log(list_of_lists);
}

function resetAllColors() {
    var ul = document.getElementById("primary_list");
    var all_items = ul.querySelectorAll("li");
    for(var i = 0; i < all_items.length; i++) {
        console.log(all_items[i].querySelector("a"));
        all_items[i].querySelector("a").style.color = "black" ;
    }
}
function showcaseItems(Arr) {
    if(Arr != undefined) {
        for(var i = 0; i < Arr.length; i++) {
            document.getElementById("secondary_list").innerHTML = document.getElementById("secondary_list").innerHTML + `<li> - ${Arr[i]}</li>`;
        }
    }
}
function delete_fun(element) {
    var btn = document.getElementById(`${element}btn`);
    var item = document.getElementById(`${element}`);
    document.getElementById("secondary_list").innerHTML = "";
    btn.style.display = "none";
    item.style.display = "none";
}