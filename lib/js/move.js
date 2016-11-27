/*
@Describe:运动框架
@Sutdent:GongBiao
@Date:2016/03/16
*/

/**
 * @Describe: 计算DOM对象的style兼容IE FF Chrome
 * @parame obj: DOM对象
 * @parame name: 要获取的style
 * @return 返回计算后的样式
*/
function getStyle(obj, name)rclk
{
	if(obj.currentStyle)
	{
		return obj.currentStyle[name];
	}
	else
	{
		return getComputedStyle(obj, false)[name];
	}
}


/**
 *@Describe:多物体运动框架,任意运动框架
 *@parame obj: DOM对象
 *@parame attr: 要操作运动的属性
 *@parame iTarget: 运动到的目标位置
 */
function startMove(obj, attr, iTarget)
{
	clearInterval(obj.timer);
	obj.timer=setInterval(function (){
		var cur=0;
		
		if(attr=='opacity')
		{
			cur=Math.round(parseFloat(getStyle(obj, attr))*100);
		}
		else
		{
			cur=parseInt(getStyle(obj, attr));
		}
		
		var speed=(iTarget-cur)/6;
		speed=speed>0?Math.ceil(speed):Math.floor(speed);
		
		if(cur==iTarget)
		{
			clearInterval(obj.timer);
		}
		else
		{
			if(attr=='opacity')
			{
				obj.style.filter='alpha(opacity:'+(cur+speed)+')';
				obj.style.opacity=(cur+speed)/100;
			}
			else
			{
				obj.style[attr]=cur+speed+'px';
			}
		}
	}, 30);
}

