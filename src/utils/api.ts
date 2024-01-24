const data = {
    message: 'test'
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




    
