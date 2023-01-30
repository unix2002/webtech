function get_cookie(cookie_name)
{
    let cookie_val = document.cookie;
    var current_name = "";
    var current_pair = "";
    var current_val = "";
    var index = 0;
    let cookie_array = cookie_val.split(";")
    while(current_name != cookie_name)
    {
        current_pair = cookie_array[index].split("=");
        current_val = current_pair[1];
        current_name = current_pair[0];
        index++;
    }

    return current_val;
}

var num_of_questions = 9;
let i = 1;
while(i != num_of_questions + 1)
{
    var cookie_name = `q$i`;
    var id = `tips_q$i`;

    var answer = document.getElementById(id).children;
    answer.item[(get_cookie(cookie_name))].style.display = "block";
    i = i + 1;
}