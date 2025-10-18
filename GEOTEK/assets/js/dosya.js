var listele=document.getElementById("album")
let data=fetch("./assets/image/galeri")
.then(response=>response.json())
.then(veri=>{
    veri.forEach(element => {
        if(element.id<=10)
        {
            listele.innerHTML+= `<img src="${element.url}"/>`
        }
    })
})