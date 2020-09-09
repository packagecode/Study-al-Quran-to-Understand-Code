self.addEventListener('push', function(event) {
    if (event.data) {
        var data = event.data.json();

        // var notification =  self.registration.showNotification(data.title,{
        //     body: data.body,
        //     icon: data.icon,
        //     image: data.image,
        //     actions: data.actions
        // });

        // var notification = new Notification('Notification title', {
        //     icon: 'http://cdn.sstatic.net/stackexchange/img/logos/so/so-icon.png',
        //     body: 'Hey there! You\'ve been notified!',
        //     image: 'http://127.0.0.1:8000/storage/logo/1502932820191117015135.jpg',
        // });
        // notification.onclick = function () {
        //     window.open('http://stackoverflow.com/a/13328397/1269037');
        // };
        console.log("This push event has data: ", event.data.text());
    } else {
        console.log("This push event has no data.");
    }
});
