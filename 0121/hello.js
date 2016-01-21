'use strict';
var str = 'Hello';

function sayHello(name)
{
	console.log(str + ' , ' + name);
}

//把方法暴露给外面
module.exports = sayHello;
