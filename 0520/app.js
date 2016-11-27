/**
 * @Describe  HTML5 的内部拖拽
 * Created by GongBiao on 2016/5/20 0020.
 */
var box1Div,box2Div, msgDiv, img1;

window.onload = function (){
    box1Div = document.getElementById('box1');
    box2Div = document.getElementById('box2');
    msgDiv = document.getElementById('msg');
    img1 = document.getElementById('img1');
   
   /*
   box1Div.ondragenter = function (e){
      showObj(e); 
   }
   */
    //阻止系统默认事件
    box1Div.ondragover = function (e){
        e.preventDefault();
    };
    box2Div.ondragover = function (e){
        e.preventDefault();
    };

    img1.ondragstart = function (e){
        e.dataTransfer.setData('imgId', 'img1');
    };
    
    box1.ondrop = dropImghandler;
    box2.ondrop = dropImghandler;
    
    
    function dropImghandler(e){
        showObj(e.dataTransfer);
        e.preventDefault();
        var img = document.getElementById(e.dataTransfer.getData("imgId"));
        e.target.appendChild(img); 
        
    }
   
   function showObj(obj){
      var s = "";
      for(var k in obj){
         s += k + ":" + obj[k] + "<br />";
      }
      
      msgDiv.innerHTML = s;
   }
};
