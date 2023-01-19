function som_co2(value)
{
    return value;
}

function som_shoppinglist(shoppinglist)
{
    console.log(shoppinglist)
}

// start

var shoppinglist = new Array(10);
var product = {};
product['name'] = 'naam';
product['value'] = 50;
shoppinglist.push(product);

let b = som_co2(product.value);
console.log(b);

// end