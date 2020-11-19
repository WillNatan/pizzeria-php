window.onscroll = () =>{
    if(document.documentElement.scrollTop >= 200){
        document.querySelector('.navbar').classList.add('bg-white')
    }else{
        document.querySelector('.navbar').classList.remove('bg-white')
    }
}