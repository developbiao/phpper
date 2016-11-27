'use strict';

//导入http模块
var http = require('http');

//创建http server，并传入回调函数:
var server = http.createServer(function (request, response){
	//回调函数接收request 和response对象
	//获得http请求的method和url:
	console.log(request.method + ':' + request.url);	
	//将HTTP响应200写入response,同时设置Content-Type:text/html;
	response.writeHead(200, {'Content-Type' : 'text/html'});
	response.end('<h1>Hello World Nodejs!</h1>');
});

//让服务器监听在8080端口
server.listen(8080);

console.log('Server is runing at http://127.0.0.1:8080/');