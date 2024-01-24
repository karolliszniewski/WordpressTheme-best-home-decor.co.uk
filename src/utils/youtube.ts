let screenWidth2 = window.innerWidth;
window.addEventListener('resize', () => {
    screenWidth2 = window.innerWidth;
  });

const youtubeArray = Array.from(document.querySelectorAll('.youtube'));


youtubeArray.forEach(element => {
    element.addEventListener('click', function() {

        const dataIdValue = this.getAttribute('data-id');
        const tconst =  this.getAttribute('data-tconst');
        const postid =  this.getAttribute('data-postid');


        const data = {
            dataIdValue: dataIdValue,
            tconst: tconst,
            postid: postid,
            action: 1

        };

           fetch('https://api.best-home-decor.co.uk/', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
            .then(response => response.json())
            .then(data => console.log(data))
            .catch(error => console.error('Błąd:', error));
        



        // clean
        this.innerHTML = "";

        //create
        const iframe = document.createElement('iframe');

        
        iframe.src = 'https://www.youtube.com/embed/' + dataIdValue + "?autoplay=1";
if(screenWidth2 < 700){
        iframe.height = '240';
        
}
else{
    iframe.height = '320';
}
iframe.width = '100%';
        iframe.allowFullscreen = true;
        this.appendChild(iframe);

    });
});
