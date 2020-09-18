var CACHE_NAME = 'cache_site';
var urlsToCache = [
    'css/bootstrap.css',
    'js/bootstrap.js',
    'js/jquery-3.5.1.js'
];

self.addEventListener('install', function(event){
    event.waitUntil(
        caches.open(CACHE_NAME).then(function(cache){
            console.log('cache aberto')
            return cache.addAll(urlsToCache)
        })
    )
})


self.addEventListener('fetch',function(event){
    event.respondWith(
        caches.match(event.request).then(function(response){
            if(response){
                return response;
            }
            return fetch(event.request)
        })
    )
})