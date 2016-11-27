'use strict';
//程序即将退出时的回调函数
process.on('exit', function(code){
	console.log('about to exit with code: ' + code);
});
