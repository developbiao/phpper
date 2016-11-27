'use strict'
//process.nextTick()将在下一轮事件打循环中调用
process.nextTick(function (){
	console.log('nextTick callback!');
});
console.log('nextTick was set!');
