'use strict';

const applicationServerPublicKey = 'BAHeIWISSS0gF2oFHK4cctQCGBzRswIrC8kHBJOiQYBOp5wwQNsqmNVHG5u6phTNbo5/N4gipbsDbUNp9N2aarI=';

const pushButton = document.querySelector('.js-push-btn');

let isSubscribed = false;
let swRegistration = null;
let disabled = true;

function urlB64ToUint8Array(base64String) {
    const padding = '='.repeat((4 - base64String.length % 4) % 4);
    const base64 = (base64String + padding)
        .replace(/\-/g, '+')
        .replace(/_/g, '/');

    const rawData = window.atob(base64);
    const outputArray = new Uint8Array(rawData.length);

    for (let i = 0; i < rawData.length; ++i) {
        outputArray[i] = rawData.charCodeAt(i);
    }
    return outputArray;
}

if ('serviceWorker' in navigator && 'PushManager' in window) {
    console.log('Service Worker and Push is supported');

    navigator.serviceWorker.register('/sw.js')
        .then(function(swReg) {
            console.log('Service Worker is registered', swReg);

            swRegistration = swReg;
            initializeUI();
        })
        .catch(function(error) {
            console.error('Service Worker Error', error);
        });
} else {
    console.warn('Push messaging is not supported');
    console.log('Push Not Supported');
}

function updateSubscriptionOnServer(subscription) {
    // TODO: Send subscription to application server

    let endpoint = JSON.stringify(subscription);
    console.log('SUB: ' + endpoint);

    if (!isSubscribed) {
        $.ajax({
            type: 'POST',
            data: {
                endpoint: endpoint,
            },
            dataType: 'json',
            url: '/submit-endpoint',
            success: function (response) {
                if (response.status === 0) {
                    console.log('INSERT FAILED');
                } else {
                    console.log('INSERT SUCCESS');
                }
            }
        });
    }
}

function subscribeUser() {
    const applicationServerKey = urlB64ToUint8Array(applicationServerPublicKey);
    swRegistration.pushManager.subscribe({
        userVisibleOnly: true,
        applicationServerKey: applicationServerKey
    })
        .then(function(subscription) {
            console.log('User is subscribed.');

            updateSubscriptionOnServer(subscription);

            isSubscribed = true;

            updateBtn();
        })
        .catch(function(err) {
            console.log('Failed to subscribe the user: ', err);
            updateBtn();
        });
}

function unsubscribeUser() {
    swRegistration.pushManager.getSubscription()
        .then(function(subscription) {
            if (subscription) {
                return subscription.unsubscribe();
            }
        })
        .catch(function(error) {
            console.log('Error unsubscribing', error);
        })
        .then(function() {
            updateSubscriptionOnServer(null);

            console.log('User is unsubscribed.');
            isSubscribed = false;

            updateBtn();
        });
}

function initializeUI() {
    disabled = true;

    if (isSubscribed) {
        unsubscribeUser();
    } else {
        subscribeUser();
    }

    // Set the initial subscription value
    swRegistration.pushManager.getSubscription()
        .then(function(subscription) {
            isSubscribed = !(subscription === null);

            if (isSubscribed) {
                console.log('User IS subscribed.');
            } else {
                console.log('User is NOT subscribed.');
            }

            updateBtn();
        });
}

function updateBtn() {
    if (Notification.permission === 'denied') {
        console.log('Push Messaging Blocked.');
        disabled = true;
        updateSubscriptionOnServer(null);
        return;
    }

    if (isSubscribed) {
        console.log('Disable Push Messaging');
    } else {
        console.log('Enable Push Messaging');
    }

    disabled = false;
}
