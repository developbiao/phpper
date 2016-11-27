var aDatas=[
	"快过年了，大家可以商量着去哪玩吧～",
	"精通JavaScript开发课程 - 结课标准 - 有十条标准可让大家修练成JS高手……",
	"HTML5开发课程，让你熟练掌握移动应用开发技术",
	"精通各种DOM类应用，熟练掌握面向对象编程思想（OOP）、熟悉JS面向对象开发方式 - 智能课堂 - www.zhinengshe.com",
	"熟练掌握AJAX技术及相关应用（例如：新浪微博级应用） - 智能课堂 - www.zhinengshe.com",
	"可以独立写出类似jQuery的小型库（支持各类选择符、事件类、DOM、自定义动画animate、AJAX……） - 智能课堂 - www.zhinengshe.com",
	"精通JS运动特效技术，能完整实现各类网站所有动画特效，如 智能课堂 官网 - 智能课堂 - www.zhinengshe.com",
	"掌握JS调试及优化技术、能兼容所有浏览器 - 智能课堂 - www.zhinengshe.com",
	"精通JS事件对象及事件的工作机制，并能完成各类跨平台应用模块的开发 - 智能课堂 - www.zhinengshe.com",
	"能独立开发表现和性能都很优秀的RIA应用 - 智能课堂 - www.zhinengshe.com",
	"了解后台编程的相关知识，能够和后台工程师配合完成大型交互应用 - 智能课堂 - www.zhinengshe.com",
	"熟悉正则表达式的编写、应用及高级表单验证技术 - 智能课堂 - www.zhinengshe.com"
];

window.onload=function ()
{
	var oDiv=document.getElementById('tab');
	var oUl=oDiv.getElementsByTagName('ul')[0];
	var aBtn=oUl.getElementsByTagName('li');
	var oTxt=oDiv.getElementsByTagName('div')[0];
	
	var i=0;
	
	for(i=0;i<aBtn.length;i++)
	{
		aBtn[i].index=i;
		aBtn[i].onmouseover=function ()
		{
			for(i=0;i<aBtn.length;i++)
			{
				aBtn[i].className='';
			}
			this.className='active';
			oTxt.innerHTML='<h2>'+(this.index+1)+'月活动</h2><p>'+aDatas[this.index]+'</p>';
		};
	}
};
