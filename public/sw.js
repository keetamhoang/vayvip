'use strict';

self.addEventListener('push', function(event) {
    console.log('[Service Worker] Push Received.');
    console.log(`[Service Worker] Push had this data: "${event.data}"`);

    const title = 'Cập nhật giảm giá, khuyến mãi';
    const options = {
        body: 'Rất nhiều mã giảm giá, khuyến mãi HOT đang chờ bạn',
        icon: '/assets/image/party.png',
        image: '/assets/image/khuyenmai.png',
        badge: '/assets/image/khuyenmai.png'
    };

    event.waitUntil(self.registration.showNotification(title, options));
});

self.addEventListener('notificationclick', function(event) {
    console.log('[Service Worker] Notification click Received.');

    event.notification.close();

    let randomArray = [
        'https://taichinhsmart.vn/ma-giam-gia/ma-giam-gia-shopee',
        'https://taichinhsmart.vn/ma-giam-gia/ma-giam-gia-lazada',
        'https://taichinhsmart.vn/ma-giam-gia/ma-giam-gia-adayroi',
        'https://taichinhsmart.vn/ma-giam-gia/ma-giam-gia-adayroi',
        'https://taichinhsmart.vn/ma-giam-gia/ma-giam-gia-tiki',
    ];

    let rand = Math.floor(Math.random() * randomArray.length);

    event.waitUntil(
        clients.openWindow(randomArray[rand])
    );
});