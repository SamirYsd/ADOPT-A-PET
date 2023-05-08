
function getCurrentDate(){
    let options = { weekday : "long", month : "short", day : "numeric", year : "numeric", hour : "numeric", minute : "numeric", second : "numeric"};
    let currentDate = new Date();

    return currentDate.toLocaleDateString("en-US", options);
   


}
function date(){
    document.getElementById("date").innerHTML = getCurrentDate();
}
// Call the function everytime we load the page
window.onload = function(){
    date();
}