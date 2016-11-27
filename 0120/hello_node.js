'use strict';
var http = require('http');
http.createServer(function (req, res) {
  res.writeHead(200, {'Content-Type': 'text/plain'});
  res.end('Hello Node.js\n');
}).listen(8124, "192.168.8.88");
console.log('Server running at http://192.168.8.88:8124/');
