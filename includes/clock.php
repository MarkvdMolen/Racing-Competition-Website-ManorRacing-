<script> 
/* Make a var or load from db */
var deadline = new Date("1 september, 2019 20:30:00").getTime(); 
    
var x = setInterval(function() { 
    
var now = new Date().getTime(); 
var t = deadline - now; 
var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
var seconds = Math.floor((t % (1000 * 60)) / 1000); 
document.getElementById("day").innerHTML =days ; 
document.getElementById("hour").innerHTML =hours; 
document.getElementById("minute").innerHTML = minutes;  
document.getElementById("second").innerHTML =seconds;

if (days < 10) {
    document.getElementById("day").innerHTML = "0" + Math.floor(t / (1000 * 60 * 60 * 24)); 
}

if (hours < 10) {
    document.getElementById("hour").innerHTML = "0" + Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
}

if (minutes < 10) {
    document.getElementById("minute").innerHTML = "0" + Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
}

if (seconds < 10) {
    document.getElementById("second").innerHTML = "0" + Math.floor((t % (1000 * 60)) / 1000); 
}

if (t < 0) { 
        clearInterval(x); 
        document.getElementById("demo").innerHTML = "Race Started"; 
        document.getElementById("day").innerHTML ='00'; 
        document.getElementById("hour").innerHTML ='00'; 
        document.getElementById("minute").innerHTML ='00' ;  
        document.getElementById("second").innerHTML = '00'; } 
}, 1000); 
</script> 