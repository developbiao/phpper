'use strict';

var fs = require('fs');

fs.stat('stream01.js', function(err, stat){
	if(err){
		console.log(err);
	}else{
		//是否是文件:
		console.log('isFils:' + stat.isFile());
		//是否是目录
		console.log('isDirectory:' + stat.isDirectory());
		if(stat.isFile()){
			//文件大小
			console.log('size:' + stat.size);
			//创建时间
			console.log('brith time:' + stat.birthtime);
			//修改时间
			console.log('modified time:' + stat.mtime);
		}
	}
});
