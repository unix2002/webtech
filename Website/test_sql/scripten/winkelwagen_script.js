//var currentPage = 1;
function toon(data) {
    verwijder_divs();
    var products = data.split(";");
    var divs = document.createElement("div");
    divs.setAttribute("id", "products-grid");
    for (var i = 0; i < products.length-1; i++) {
        var product = products[i].split("}{");
        var name = product[0].replace("{", "") || "Unknown";
        var co2 = product[1] || "Unknown";
        var img = product[2] ? product[2].replace("}", "") : "https://via.placeholder.com/200x200.png?text=No+Image+Available"

        var productDiv = document.createElement("div");
        productDiv.setAttribute("class", "products-grid");

        var productImg = document.createElement("img");
        productImg.src = img;
        productDiv.appendChild(productImg);

        var productName = document.createElement("p");
        productName.innerHTML = name;
        productDiv.appendChild(productName);

        var productCo2 = document.createElement("p");
        productCo2.innerHTML = "CO2 Emission: " + co2 + "kg";
        productDiv.appendChild(productCo2);

	productDiv.addEventListener("click", voeg_toe.bind(null, name, "selectie", co2));
        divs.appendChild(productDiv);
    }
    document.body.appendChild(divs);
}

function verwijder_divs() {
    var grid = document.getElementById("products-grid");
    if (grid) {
        grid.parentNode.removeChild(grid);
    }
}

function voeg_toe(item, listId, co2) {
    var list = document.getElementById(listId);
    var items = list.getElementsByTagName("li");
    var itemExists = false;
    for (var i = 0; i < items.length; i++) {
        if (items[i].innerHTML === item) {
            itemExists = true;
            break;
        }
    }
    if (!itemExists) {
        var newItem = document.createElement("li");
        newItem.innerHTML = item;
	newItem.setAttribute("data-value", co2);
        
        // Delete button
        var deleteButton = document.createElement("button");
        deleteButton.innerHTML = "Delete";
	deleteButton.className = "del_button";
        deleteButton.onclick = function() {
            list.removeChild(newItem);
        };
        newItem.appendChild(deleteButton);

        list.appendChild(newItem);
    }
}

document.getElementById("done-button").addEventListener("click", function(){
    var listItems = document.getElementsById("listId");
    var total = 0;
    for (var i = 0; i < listItems.length; i++) {
        var hiddenValue = listItems[i].getElementsByTagName("input")[0].value;
        total += parseInt(hiddenValue);
    }
    console.log("Total value of all items: " + total);
});
