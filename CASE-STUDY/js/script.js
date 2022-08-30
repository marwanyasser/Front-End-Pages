function page1() {
    var page1 = document.getElementsByClassName("page1");
    var page2 = document.getElementsByClassName("page2");
    var page3 = document.getElementsByClassName("page3");
    page1[0].style.display = "block";
    page2[0].style.display = "none";
    page3[0].style.display = "none";
}
function page2() {
    var page1 = document.getElementsByClassName("page1");
    var page2 = document.getElementsByClassName("page2");
    var page3 = document.getElementsByClassName("page3");
    page1[0].style.display = "none";
    page2[0].style.display = "block";
    page3[0].style.display = "none";
}
function page3() {
    var page1 = document.getElementsByClassName("page1");
    var page2 = document.getElementsByClassName("page2");
    var page3 = document.getElementsByClassName("page3");
    page1[0].style.display = "none";
    page2[0].style.display = "none";
    page3[0].style.display = "block";
}