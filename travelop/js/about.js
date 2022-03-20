
let middle = document.querySelectorAll("section.statistics .middle")


middle.forEach(function(item){

    
    let data = item.dataset.percent;
    let data2 = item.querySelector(".data2")
    let data1 = item.querySelector(".data1")

    if(data > 0) {
        if(data > 100){
            data = 100;
        }
        data2.style.width = `${data}%`
    } else {
        data1.style.width = `${-1 * data}%`
    }
})