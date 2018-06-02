importScripts("https://storage.googleapis.com/workbox-cdn/releases/3.2.0/workbox-sw.js");

workbox.routing.registerRoute(
    // Cache CSS files
    /.*\.js/,
    // Use cache but update in the background ASAP
    workbox.strategies.staleWhileRevalidate({
        // Use a custom cache name
        cacheName: 'js-cache',
    })
);

workbox.routing.registerRoute(
    // Cache CSS files
    /.*\.css/,
    // Use cache but update in the background ASAP
    workbox.strategies.staleWhileRevalidate({
        // Use a custom cache name
        cacheName: 'css-cache',
    })
);
workbox.routing.registerRoute(
    // Cache image files
    /.*\.(?:png|jpg|jpeg|svg|gif)/,
    // Use the cache if it's available
    workbox.strategies.cacheFirst({
        // Use a custom cache name
        cacheName: 'image-cache',
        plugins: [
            new workbox.expiration.Plugin({
                // Cache only 20 images
                maxEntries: 50,
                // Cache for a maximum of a week
                maxAgeSeconds: 7 * 24 * 60 * 60,
            })
        ],
    })
);

workbox.routing.registerRoute(
    new RegExp('^https://fonts.googleapis.com/'),
    workbox.strategies.cacheFirst({
        cacheName: 'third-cache',
        plugins: [
            new workbox.cacheableResponse.Plugin({
                statuses: [0, 200],
            })
        ]
    })
);

// /**
//  * Welcome to your Workbox-powered service worker!
//  *
//  * You'll need to register this file in your web app and you should
//  * disable HTTP caching for this file too.
//  * See https://goo.gl/nhQhGp
//  *
//  * The rest of the code is auto-generated. Please don't update this file
//  * directly; instead, make changes to your Workbox build configuration
//  * and re-run your build process.
//  * See https://goo.gl/2aRDsh
//  */
//
// importScripts("https://storage.googleapis.com/workbox-cdn/releases/3.2.0/workbox-sw.js");
//
// workbox.routing.registerRoute(
//     new RegExp("^https://third-party.example.com/images/"),
//     workbox.strategies.cacheFirst({
//         cacheName: "image-cache",
//         plugins: [
//             new workbox.cacheableResponse.Plugin({
//                 statuses: [0, 200]
//             })
//         ]
//     })
// );
//
// workbox.routing.registerRoute(
//     // Cache CSS files
//     /.*\.js/,
//     // Use cache but update in the background ASAP
//     workbox.strategies.staleWhileRevalidate({
//         // Use a custom cache name
//         cacheName: 'js-cache',
//     })
// );
//
// workbox.routing.registerRoute(
//     // Cache CSS files
//     /.*\.css/,
//     // Use cache but update in the background ASAP
//     workbox.strategies.staleWhileRevalidate({
//         // Use a custom cache name
//         cacheName: 'css-cache',
//     })
// );
// workbox.routing.registerRoute(
//     // Cache image files
//     /.*\.(?:png|jpg|jpeg|svg|gif)/,
//     // Use the cache if it's available
//     workbox.strategies.cacheFirst({
//         // Use a custom cache name
//         cacheName: 'image-cache',
//         plugins: [
//             new workbox.expiration.Plugin({
//                 // Cache only 20 images
//                 maxEntries: 20,
//                 // Cache for a maximum of a week
//                 maxAgeSeconds: 7 * 24 * 60 * 60,
//             })
//         ],
//     })
// );
//
// workbox.routing.registerRoute(
//     new RegExp('^https://fonts.googleapis.com/'),
//     workbox.strategies.cacheFirst({
//         cacheName: 'third-cache',
//         plugins: [
//             new workbox.cacheableResponse.Plugin({
//                 statuses: [0, 200],
//             })
//         ]
//     })
// );
//
//
// workbox.precaching.precacheAndRoute(self.__precacheManifest || []);
// self.addEventListener("install", function(e) {
//     e.waitUntil(
//         caches.open("myapp").then(function(cache) {
//             return cache.addAll([
//                 "/",
//             ]);
//         })
//     );
// });
//
// self.addEventListener("fetch", function(event) {
//     console.log(event.request.url);
//
//     event.respondWith(
//         caches.match(event.request).then(function(response) {
//             return response || fetch(event.request);
//         })
//     );
// });