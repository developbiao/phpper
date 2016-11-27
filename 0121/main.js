'use strict';
var foreignFunc = require('./hello.js');

var name = 'Marray';

foreignFunc(name); // Hello, Marray!

var checkSum = require('./secondFun.js');

checkSum(100);
