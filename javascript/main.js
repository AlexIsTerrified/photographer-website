window.addEventListener("resize",()=>{
    getGrid()
})
getGrid()
 function getGrid(){
    const grid = document.getElementById("grid")
    grid.innerHTML = ''
    if(window.innerWidth < 720){
        const col1 = document.createElement('div')
        const col2 = document.createElement('div')
        col1.classList.add('col')
        col2.classList.add('col')

        imageList.forEach((i,n)=>{
            const item = document.createElement('a')
            item.classList.add('image')
            item.href = './image.php?id='+i.ID
            item.innerHTML = '<img src="'+i.Image+'"><div class="info"><div>'+i.Name+'</div></div></img>'
            if(n%2==0)col1.appendChild(item)
            else col2.appendChild(item)
        })
        grid.appendChild(col1)
        grid.appendChild(col2)
    }else{
        const col1 = document.createElement('div')
        const col2 = document.createElement('div')
        const col3 = document.createElement('div')
        col1.classList.add('col')
        col2.classList.add('col')
        col3.classList.add('col')

        imageList.forEach((i,n)=>{
            const item = document.createElement('a')
            item.classList.add('image')
            item.href = './image.php?id='+i.ID
            item.innerHTML = '<img src="'+i.Image+'"><div class="info"><div>'+i.Name+'</div></div></img>'
            if(n%3==0)col1.appendChild(item)
            else if(n%3==1)col2.appendChild(item)
            else col3.appendChild(item)
        })
        grid.appendChild(col1)
        grid.appendChild(col2)
        grid.appendChild(col3)
    }
}

