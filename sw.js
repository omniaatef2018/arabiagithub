const cacheName = 'news-v1';
const staticAssets = [
    '/',
    '/index.php',
//   '404.php',
//   'about.php',
//   'account-settings.php',
//   'activities.php',
//   'business-travel.php',
//   'career.php',
//   'cart.php',
//   'category.php',
//   'checkout-details.php',
//   'checkout.php',
//   'contact.php',
//   'cookie-policy.php',
//   'corporate-travel.php',
//   'corporate.php',
//   'details.php',
//   'experience-dubai.php',
//   'help-details.php',
//   'help.php',
//   'landing.php',
//   'mice.php',
//   'newsearch.php',
//   'sitemap.php',
//   'travel-from-dubai.php',
//   'vip-travel.php',
//   'visa-apply.php',
//   'visa-details.php',
//   'visa.php',
  'assets/css/style.css',
  'assets/js/main.js'
];

self.addEventListener('install', async e => {
  const cache = await caches.open(cacheName);
  await cache.addAll(staticAssets);
  return self.skipWaiting();
});

self.addEventListener('activate', e => {
  self.clients.claim();
});

self.addEventListener('fetch', async e => {
  const req = e.request;
  const url = new URL(req.url);

  if (url.origin === location.origin) {
    e.respondWith(cacheFirst(req));
  } else {
    e.respondWith(networkAndCache(req));
  }
});

async function cacheFirst(req) {
  const cache = await caches.open(cacheName);
  const cached = await cache.match(req);
  return cached || fetch(req);
}

async function networkAndCache(req) {
  const cache = await caches.open(cacheName);
  try {
    const fresh = await fetch(req);
    await cache.put(req, fresh.clone());
    return fresh;
  } catch (e) {
    const cached = await cache.match(req);
    return cached;
  }
}