'use strict'
var fs = require('fs');

var ws1 = fs.createWriteStream('output1.txt', 'utf-8');
ws1.write('Nodejs is JavaScritp!');
ws1.write('END.\n');
ws1.end();

var ws2 = fs.createWriteStream('output2.txt', 'utf-8');
ws2.write(new Buffer('使用Stream写入二进制数据...\n', 'utf-8'));
ws2.write(new Buffer('END', 'utf-8'));
ws2.end();
