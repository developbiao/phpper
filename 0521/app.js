/**
 * @Describe:使用JavaScript创建一个canvas
 * Created by GongBiao on 2016/5/21 0021.
 */

var CANVAS_WIDTH = 200, CANVAS_HEIGHT = 200;
window.onload = function (){
    createCanvas();
};
function createCanvas(){
    document.body.innerHTML = "<canvas id=\"mycanvas\" width=\""+CANVAS_WIDTH+"\" height=\""+CANVAS_HEIGHT+"\" style='background-color:red'></canvas>";
    var oCanvas = document.getElementById('mycanvas');
    oCanvas.style.BackgroundColor="#ABCDEF";
    
}
