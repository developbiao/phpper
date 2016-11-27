/**
 * @Describe 拖拽本地文件
 * Created by GongBiao on 2016/5/20 0020.
 */

var imgContainer, msgDiv;

window.onload = function (){
    imgContainer = document.getElementById('imgContainer'); 
    msgDiv = document.getElementById('msg');
    
    imgContainer.ondragover = function (e){
        e.preventDefault(); 
    }
    imgContainer.ondrop = function (e){
        e.preventDefault();
        var f  = e.dataTransfer.files[0];
        var fileReader = new FileReader();
        fileReader.onload = function (e){
            showObj(e.target);
        };
        fileReader.readAsDataURL(f);

    };
};

//打印日志
function showObj(obj){
    var s = "";
    for(var k in obj){
        s += k + ":" + obj[k] + "<br />";
    }

    msgDiv.innerHTML = s;
}

