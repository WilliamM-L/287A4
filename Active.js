var time = document.getElementById("time");
time.innerHTML = "Welcome!";

function validateUsername() {

}

function validatePassword() {
//validatex will call validatey to see if the submit button is visible
}
function search() {
    var priceRange = document.getElementById("cost").value;
    var downTown = document.getElementById("Downtown").checked;
    if (priceRange == "<50" ||priceRange == "<100" && downTown){
        document.getElementById("advice").style.visibility = 'visible';
    } else {
        document.getElementById("advice").style.visibility = 'hidden';
    }
}

function displayDisclaimer() {
    alert("Your information will not be misused or sold!");
}
function active(){
    now = new Date();
    time.innerHTML = now.getHours() +" : " + now.getMinutes() + " : " + now.getSeconds();
}
setInterval(active, 1000);

