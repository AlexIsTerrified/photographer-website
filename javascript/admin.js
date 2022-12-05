
const del = document.querySelectorAll('.admin .photoup .list .image .info a');

del.forEach((item)=>{
    item.addEventListener('click',(e)=>{
        if(confirm('Do you want to delete this post?')){
            return true
        }else{
            e.preventDefault()
        }
    })
})

const pass = document.getElementById("password")
const login = document.getElementById("login")

login.addEventListener('click',async()=>{

    const formData = new FormData()
    formData.append('pass', pass.value);

    const rawResponse = await fetch('./login.php', {
        method: 'POST',
        body: formData
    });
    const response = await rawResponse.json()
    console.log(response)
   const log = document.querySelector('.admin .login');
    if(response.pass){
        log.style.display = 'none'
    }else{
        const prompt = document.getElementById("prompt")
        prompt.innerHTML = 'Password is incorrect'
    }
})