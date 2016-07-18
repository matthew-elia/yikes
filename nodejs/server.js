var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io')(server);
var redis = require('redis');
 
server.listen(3000);

io.on('connection', function (socket) {
  
  var client = redis.createClient();

  socket.on('handshake', function (handshake) {
    console.log(handshake);
    client.subscribe('message');
  
  })

  client.on("message", function(channel, data) {
    console.log("mew message add in queue "+ data['message'] + " channel");
    socket.emit(channel, data);
  });
  // console.log(redisClient.stream._events);
  // console.log(socket.conn.server.ws.options.verify);
  // console.log(socket.handshake.headers.connection);
 
 
  socket.on('disconnect', function() {
    client.quit();
  });
 
});