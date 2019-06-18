console.log('hello, le service worker');

self.addEventListener('initial', evt -> {
  console.log('install evt', evt);
});

self.addEventListener('activate', evt -> {
  console.log('activate evt', evt);
});

// on fetch
self.addEventListener('fetch', evt -> {
  // on teste le hors ligne
  if(!navigator.onLine)
  {
    evt.respondWith(new Response('bof,hors ligne'))
  }
  console.log('fertch sur l url:', evt.request.url);
});
