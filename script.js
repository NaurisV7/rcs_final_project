let submitarray = document.querySelectorAll('.update');



submitarray.forEach(element => element.addEventListener("click", function () {

    let number = element.classList[1];
    let span = document.getElementById("span" + number);

    let ubutton = document.getElementById(number);
    let sbutton = document.getElementById("s" + number);

    console.log(sbutton.classList);
    if (sbutton.classList[1] === "none") {
        ubutton.classList.add("none");
        sbutton.classList.remove("none");
        let text =  span.innerText;
        span.innerHTML = "<textarea for='s" + number + "' name='text' id='input'>" + text + "</textarea>";
    }

    sbutton.addEventListener("click", function () {
        ubutton.classList.remove("none");
        sbutton.classList.add("none");
        let updated_text = document.getElementById("input").value;
        span.innerHTML = updated_text;
        console.log(updated_text);

    })

}));


