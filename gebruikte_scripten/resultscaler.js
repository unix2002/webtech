function difference(average, current)
{
    return average - current;
}

function percent(average, current)
{
    var percentage;
    return percentage;
}

function scale_img(percentage)
{
    // doe dit
    console.log("scaling...");
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

// end