var CACHE_NAME = 'my-site-cache-v1';
var urlsToCache = [
  'https://liedekerke.github.io/projet/index.html',
  'https://liedekerke.github.io/projet/TinkyWinky.html',
  'https://liedekerke.github.io/projet/LaaLaa.html',
  'https://liedekerke.github.io/projet/plat.html',
  'https://liedekerke.github.io/projet/dessert.html',
  'https://liedekerke.github.io/projet/Dipsy.html',
  'https://liedekerke.github.io/projet/Po.html'
];

self.addEventListener('install', function(event) {
  // Perform install steps
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        console.log('Opened cache');
        return cache.addAll(urlsToCache);
      })
  );
});
