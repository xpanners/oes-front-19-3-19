const StaticCacheName = 'OES-Static-Assets';
const DynamicCacheName = 'OES-Dynamic-Assets';
const MyDynamic=[
  '/ajax/home',
  '/ajax/about',
  '/ajax/register',
  '/ajax/login'
];
const MyStatics = [
  '/',
  'mainifest.json',
  '/lib/js/app.js',
  '/lib/js/sw.js',
  '/lib/js/script.js',
  '/lib/js/alertify.js',
  '/lib/js/alertify.min.js',
  '/lib/plugins/jQuery/jquery.min.js',
  '/lib/plugins/bootstrap/bootstrap.min.js"',
  '/lib/plugins/slick/slick.min.js',
  '/lib/plugins/aos/aos.js',
  '/lib/plugins/venobox/venobox.min.js',
  '/lib/plugins/mixitup/mixitup.min.js',

  '/lib/plugins/bootstrap/bootstrap.min.css',
  '/lib/plugins/slick/slick.css',
  '/lib/plugins/themify-icons/themify-icons.css',
  '/lib/plugins/animate/animate.css',
  '/lib/plugins/aos/aos.css',
  '/lib/plugins/venobox/venobox.css',
  '/lib/css/alertify.core.css',
  '/lib/css/alertify.default.css',
  '/lib/css/style.css'

];


self.addEventListener('install',async e=>{
  console.log("sw installed");

  const StaticCache = await caches.open(StaticCacheName);
  await StaticCache.addAll(MyStatics); 

  const DynamicCache = await caches.open(DynamicCacheName);
  await DynamicCache.addAll(MyDynamic); 

  return self.skipWaiting();

})


self.addEventListener('activate', e=>{
console.log("sw activated");

})

self.addEventListener('fetch', async e => {
  alert("sw fatched");
  const req = e.request;
  const url = new URL(req.url);
  const StaticCache = await caches.open(StaticCacheName);
  const DynamicCache = await caches.open(DynamicCacheName);
  // if (url.origin == location.origin) {
  //   e.responseWith(cacheFirst(req));
  // } else {
  //   e.responseWith(networkAndChache(req));
  // }
  if (StaticCache.match(req)) {
    console.log("req is from static cache");
    alert("req is from static cache");

    
  } else if(DynamicCache.match(req)){
    console.log("req is from dynamic cache");
  }else{
    console.log("req is not from dynamic nor from static cache");
  }



})


// async function cacheFirst(req)
// {
//   const cache = await caches.open(cacheName);
//   const cached = await cache.match(req);
//   return cached || fetch(req);
// }


// async function networkAndChache(req)
// {
//   const cache = await caches.open(cacheName);
//   try {
//     const fresh = await fetch(req);
//     await caches.put(req,fresh.clone());
//     return fresh;
//   } catch (e) {
//     const cached = await cache.match(req);
//     return cached;
//   }
// }