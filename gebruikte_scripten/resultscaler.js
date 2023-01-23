function difference(average, current)
{
    return average - current;
}

function percent(average, current)
{
    var percentage;
    percentage = (current / average) * 100;
    return percentage;
}

function animation_player()
{
    alert("button pressed");
    var targetElem = document.getElementById("target").children[0];
    targetElem.className = "animate";
}

function alert()
{
    alert("buttons");
}

// start

// var url_str = window.location;
var url_str = 'https://webtech-in16.webtech-uva.nl/?sum=50';
var string = new URL(url_str).searchParams;

console.log(string);

const params = new URLSearchParams(string);
const sum = params.get('sum');
console.log(sum);



let average = 80;
let current = sum;

let a = difference(average, current);
console.log(a);

let percentage = percent(average, current);
scale_img(percentage);

// https://linuxhint.com/change-css-variables-javascript/

var store = document.querySelector(':root');

store.setAttribute('--end_size', '600px');
// end