function readMoreLess(item){
    let dots = document.querySelector(`.container-item[data-item="${item}"] .dots`);
    let moreText = document.querySelector(`.container-item[data-item="${item}"] .more`);
    let buttonText = document.querySelector(`.container-item[data-item="${item}"] .read`);

    if (dots.style.display ==="none"){
        dots.style.display = "inline";
        buttonText.innerHTML = "Lees meer";
        moreText.style.display = "none";
    } else{
        dots.style.display = "none";
        buttonText.innerHTML = "Lees minder";
        moreText.style.display = "inline"
    }

}