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
    // alert("button pressed");

    var targetElem = document.getElementById("target").children[0];
    targetElem.className = "animate";
}

function alert()
{
    alert("buttons");
}

function get_cookie(cookie_name)
{
    // let cookie_val = document.cookie;
    let cookie_val = "test=1;sum=2;test2=4";
    // let name = cookie_name + "=";
    var current_name = "";
    var current_pair = "";
    var current_val = "";
    var index = 0;
    let cookie_array = cookie_val.split(";")
    while(current_name != cookie_name)
    {
        // console.log("loop");
        current_pair = cookie_array[index].split("=");
        current_val = current_pair[1];
        current_name = current_pair[0];
        index++;
    }

    // console.log(current_name + " + " + current_val);

    return current_val;

}

// start

// var url_str = window.location;
/*
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
*/
// https://linuxhint.com/change-css-variables-javascript/

get_cookie("sum");

// var store = document.querySelector(':root');

// store.setAttribute('--end_size', '600px');
// end