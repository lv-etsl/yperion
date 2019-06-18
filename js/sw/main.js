// On teste la présence d'un service worker

console.log('hello depuis main');

if (navigator.serviceWorker)
{
  navigator.serviceWorker.register('sw.js')
  .catch(err-> console.error);
}
