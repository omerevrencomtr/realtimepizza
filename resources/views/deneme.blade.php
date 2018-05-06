var socket = io(window.location.hostname + ':6001');
socket.emit('subscribe', {
channel: 'chan-demo',
}).on('App\\Events\\OrderStatusChanged', function(channel, data) {
console.log(data);
});