function exibirCategoria(categoria) {
   
    let elementos = document.getElementsByClassName("cadaProduto");
    console.log(elementos);
    for (var i=0; i<elementos.length; i++) {
        console.log(elementos[i].id);
        if (categoria == elementos[i].id)
            elementos[i].style = "display: inline-block";
        else
            elementos[i].style = "display: none";
    }
}


let exibirTodos = () => {
    let elementos = document.getElementsByClassName("cadaProduto");

    for (var i=0; i<elementos.length; i++) {
        elementos[i].style = "display: inline-block";
    }
    
};

let destaque = (imagem) => {
    console.log(imagem);
    if (imagem.width == 240)
        imagem.width = 120;
    else 
        imagem.width = 240;
};
