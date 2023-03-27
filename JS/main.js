/* if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
      navigator.serviceWorker.register('/Service_Workers.js').then(function(registration) {
        // Registration was successful
        console.log('Le service Workers à été enregistrer avec succès: ', registration.scope);
      }, function(err) {
        // registration failed :(
        console.error('Echec de l\'enregistrement du service workers: ', err);
      });
    });
  } */