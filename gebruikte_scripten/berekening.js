function som_co2(shoppinglist)
{
    var result = 0;
    var length = shoppinglist.length;

    for (let index = 0; index < length; index++) {
        // const element = array[index];
        result = result + shoppinglist[index].product.value;

    }
    return result;
}

function som_shoppinglist(shoppinglist)
{
    console.log("list = " + shoppinglist);
}

// start

var shoppinglist = new Array(10);
var product = {};
product['name'] = 'naam';
product['amount'] = 0;
product['value'] = 50;
shoppinglist.push(product);

let b = som_co2(shoppinglist);
console.log(b);

var url = new URL('https://webtech-in16.webtech-uva.nl/');
url.searchParams.append('sum', b);
var url_str = url.href;
console.log(url_str);

// window.location.href = "url";

// end