angular.module("myApp", [])
	.controller("SignUpController", function($scope)
	{
		$scope.text = "hello";
		$scope.userdata = {};	

		$scope.submitForm = function ()
		{
				console.log($scope.userdata)
				if($scope.signUpForm.$invalid){
					alert("请检查您的信息");
				}else{
					alert("表单提交成功了");
				}
		};
	})

	//自定义指令效验两次密码
	.directive("compare", function (){
		var o = {};
		o.strict = 'AE';
		o.scope = {
			orgText: '=compare'
		}
		o.require = 'ngModel';

		o.link = function (sco, ele, att, con){
			con.$validators.compare = function (v){
				return v == sco.orgText;
			}	

			sco.$watch('orgText', function (){
				con.$validate();
			})
		}

		return o;
	});
