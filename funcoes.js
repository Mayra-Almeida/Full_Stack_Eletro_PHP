function exibirCategoria(categoria) {
    let elementos = document.getElementsByClassName("box_produto");
    for (i = 0; i < elementos.length; i++) {
        if (categoria == elementos[i].id)
            elementos[i].style = "display:inline-block";
        else
            elementos[i].style = "display:none";
    }
}

function exibirTodos() {
    let elementos = document.getElementsByClassName("box_produto");
    for (i = 0; i < elementos.length; i++) {
        elementos[i].style = "display:inline-block";
    }
}

// Está sendo buscada uma solução para refatorar o código, sem a necessidade de tantas funções.
//As fotos foram salvas de tamanhos diferentes.

function destaque(img) {
    img.style.width = "210px";
}

function tamNormal(img) {
    img.style.width = "120px";
}

function destaque2(img) {
    img.style.width = "190px";
}

function tamNormal2(img) {
    img.style.width = "110px";
}

function destaque3(img) {
    img.style.width = "290px";
}

function tamNormal3(img) {
    img.style.width = "180px";
}

function destaque4(img) {
    img.style.width = "295px";
}

function tamNormal4(img) {
    img.style.width = "160px";
}

function destaque5(img) {
    img.style.width = "380px";
}

function tamNormal5(img) {
    img.style.width = "275px";
}

function destaque6(img) {
    img.style.width = "300px";
}

function tamNormal6(img) {
    img.style.width = "215px";
}

function destaque7(img) {
    img.style.width = "350px";
}

function tamNormal7(img) {
    img.style.width = "230px";
}

function destaque8(img) {
    img.style.width = "290px";
}

function tamNormal8(img) {
    img.style.width = "175px";
}

function destaque9(img) {
    img.style.width = "290px";
}

function tamNormal9(img) {
    img.style.width = "185px";
}

function destaque10(img) {
    img.style.width = "250px";
}

function tamNormal10(img) {
    img.style.width = "150px";
}

function destaque11(img) {
    img.style.width = "280px";
}

function tamNormal11(img) {
    img.style.width = "170px";
}