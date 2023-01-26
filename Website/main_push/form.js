const form = document.querySelector(".form");
const last = document.querySelector(".last");

const Q1 = document.querySelector(".Q1");
const Q2 = document.querySelector(".Q2");
const Q3 = document.querySelector(".Q3");
const Q4 = document.querySelector(".Q4");
const Q5 = document.querySelector(".Q5");
const Q6 = document.querySelector(".Q6");
const Q7 = document.querySelector(".Q7");
const Q8 = document.querySelector(".Q8");
const Q9 = document.querySelector(".Q9");

const list1 = document.querySelector(".options1");
const list2 = document.querySelector(".options2");
const list3 = document.querySelector(".options3");
const list4 = document.querySelector(".options4");
const list5 = document.querySelector(".options5");
const list6 = document.querySelector(".options6");
const list7 = document.querySelector(".options7");
const list8 = document.querySelector(".options8");
const list9 = document.querySelector(".options9");

// Question 1
list1.addEventListener("click", function() {
    Q1.style.display = "none";
    Q2.style.display = "block";
})

// Question 2
list2.addEventListener("click", function() {
    Q2.style.display = "none";
    Q3.style.display = "block";
})

// Question 3
list3.addEventListener("click", function() {
    Q3.style.display = "none";
    Q4.style.display = "block";
})

// Question 4
list4.addEventListener("click", function() {
    Q4.style.display = "none";
    Q5.style.display = "block";
})

// Question 5
list5.addEventListener("click", function() {
    Q5.style.display = "none";
    Q6.style.display = "block";
})

// Question 6
list6.addEventListener("click", function() {
    Q6.style.display = "none";
    Q7.style.display = "block";
})

// Question 7
list7.addEventListener("click", function() {
    Q7.style.display = "none";
    Q8.style.display = "block";
})

// Question 8
list8.addEventListener("click", function() {
    Q8.style.display = "none";
    Q9.style.display = "block";
})

// Ending
list9.addEventListener("click", function() {
    Q9.style.display = "none";
    form.style.display = "none"
    last.style.display = "block";
})
