let submitarray = document.querySelectorAll(".update");
let markarray = document.querySelectorAll(".mark");

submitarray.forEach(element => element.addEventListener("click", function () {
    let number = element.classList[1];
    let span = document.getElementById("span" + number);
    let button = document.getElementById("submit");
    let ubutton = document.getElementById(number);
    let stext = document.getElementById("s" + number);
    let mark = document.getElementById("done" + number);

    if (stext.classList[0] === "none") {
        ubutton.classList.add("none");
        stext.classList.remove("none");
        span.classList.add("none");
        mark.classList.add("none");
    }

    button.addEventListener("click", function () {
        ubutton.classList.remove("none");
        stext.classList.add("none");
        span.classList.remove("none");
        mark.classList.remove("none");
        let updated_text = stext.value;
        span.innerHTML = updated_text;

    })
}));

markarray.forEach(element => element.addEventListener("click", function () {

    if (element.value === "done"){
        element.value = "undone"
    } else {
        element.value = "done";
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    // let number = element.classList[1];
    // let update = document.getElementById("u" + number);
    // let span = document.getElementById("spanu" + number);
    // let undone = document.getElementById("undoneu" + number);

    // if (element.classList[2] === "done") {
    //     element.classList.remove("done");
    //     element.classList.add("none")
    //     span.classList.add("line")
    //     update.classList.add("none");
    //     undone.classList.remove("none")
    // } 

}))


