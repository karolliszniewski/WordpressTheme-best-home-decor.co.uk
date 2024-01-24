
const affiliateElements = document.querySelectorAll('.card__affiliate');


affiliateElements.forEach(element => {
  
    element.addEventListener('click', function() {
        
        const dataIdValue = this.getAttribute('data-id');
        const tconst =  this.getAttribute('data-tconst');
        const postid =  this.getAttribute('data-postid');


        const data = {
            dataIdValue: dataIdValue,
            tconst: tconst,
            postid: postid,
            action: 2

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


        const newDiv = document.createElement('div');
        newDiv.classList.add("card__ad")
        newDiv.innerHTML = `
        <div class="card__ad">
        <h3>Optimize your streaming with<br> the Best VPN for changing location</h3>
        <p>Enjoy unrestricted access to your favorite shows<br> by easily changing your location with a new IP.</p>
        <p><a href="https://go.nordvpn.net/aff_c?offer_id=15&aff_id=100271&url_id=902" target="_blank" class="card__nordvpn">Get NordVPN</a></p>
    </div>
    
    `;


        element.parentNode.insertBefore(newDiv, element.nextSibling);
        element.remove();
    });
});
