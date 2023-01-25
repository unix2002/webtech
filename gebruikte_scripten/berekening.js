function som_co2(value)
{
    return value;
}

function som_shoppinglist(shoppinglist)
{
    console.log("list = " + shoppinglist);
}


function add_to_sum(value)
{
    // alert("addsum called: " + value);
    var querystring = window.location.search;
    var parameters = new URLSearchParams(querystring);
    var current_sum = parameters.get('sum');

    new_sum = current_sum + value;
    var current_url = window.location.href;
    current_url.searchParams.delete('sum');
    current_url.searchParams.append('sum', new_sum);
}

(function start_sum()
{
    // alert("startsum called");
    var current_url = window.location.href;
    current_url.searchParams.append('sum', 0);
})()

// start

/*
var shoppinglist = new Array(10);
var product = {};
product['name'] = 'naam';
product['amount'] = 0;
product['value'] = 50;
shoppinglist.push(product);

let b = som_co2(product.value);
console.log(b);

var url = new URL('https://webtech-in16.webtech-uva.nl/');
url.searchParams.append('sum', b);
var url_str = url.href;
console.log(url_str);
*/
// window.location.href = "url";

// end