function Cerrarvideo(){
    const trailer = document.querySelector('.trailer');
    const video = document.querySelector('iframe');

    trailer.classList.toggle('active');
}


function changeBgl(bg, title){
    const banner = document.querySelector('.banner');
    const contents = document.querySelectorAll('.content');
    banner.style.background=`url("${bg}")`;
    banner.style.backgroundSize='cover';
    banner.style.backgroundPosition='center';


    contents.forEach(content => {
        content.classList.remove('active');
        if(content.classList.contains(title)){
            content.classList.add('active');
        }
    });
}