'use strict'
var fs = require('fs');

fs.readFile('0001.png', function(err, data){
	if(err){
		console.log(err);
	}else{
		console.log(data);
		console.log(data.length + ' bytes');
	}
});
