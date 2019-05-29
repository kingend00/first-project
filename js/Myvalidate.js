$(document).ready(function(){
	var str = $('#username').val();
	if(/^[a-zA-Z0-9]*$/.test(str) == false){
		alert('Tên tài khoản chứa kí tự đặc biệt !');
	}
});
$(function(){
		$("#formRegister").validate({
				rules:{
					 username:'required',
					 password:{
					 	required :true,
					 	minlength:6
					 },
					 repass:{
					 	required:true,
					 	equalTo:"#password"
					 },
					 name:'required',
					 phone:{
					 	required:true,
					 	number:true
					 },
					 email:{
					 	required:true,
					 	email:true
					 },
					 address:'required'

				},
				messages:{
					username:"Bạn phải nhập tên tài khoản !",
					password:{
						required:"Bạn phải nhập mật khẩu !",
						minlength:"Mật khẩu tối thiểu 6 kí tự"
					},
					repass:{
						required:"Bạn phải nhập lại mật khẩu",
						equalTo :"2 mật khẩu phải trùng khớp với nhau !"
					},
					name:"Hãy nhập tên người dùng !",
					phone:{
						required:"Hãy nhập số điện thoại",
						number:"Đây không phải là số điện thoại"
					},
					email:{
						required:"Hãy nhập Email !!!",
						email:"Đây không phải là Email , mời nhập lại !"
					},
					address: "Hãy điền địa chỉ đầy đủ !"
				}
			});
});
$(function(){
		$("#formBuyProduct").validate({

			rules:{
				name:'required',
				phone:{
					required:true,
					number:true
				},
				address:'required',
				email : 'email'

			},
			messages:{
				name :"Hãy nhập họ tên bạn !!!",
				phone:{
					required:"Hãy nhập số điện thoại",
					number:"Đây không phải là số điện thoại"					
				},
				address:"Mời nhập địa chỉ.",
				email:"Đây không phải là Email"
			}
		});
});