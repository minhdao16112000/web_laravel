$().ready(function() {
	$("#demoForm").validate({
		onfocusout: false,
		onkeyup: false,
		onclick: false,
		rules: {
			"product_name": {
				required: true,
				minlength: 8
			},
			"product_price": {
				required: true,
				number: true,
			},
			"admin_account":{
				required: true,
			},
			"admin_password":{
				required: true,
			},
		},
		messages: {
			"product_name": {
				required: "Bắt buộc nhập tên sản phẩm",
				maxlength: "Hãy nhập ít nhất 8 ký tự"
			},
			"product_price": {
				required: "Bắt buộc nhập giá tiền",
				number: "Hãy nhập chữ số"
			},
			"admin_account": {
				required: "Tài khoản không được để trống",
			},
			"admin_password": {
				required: "Mật khẩu không được để trống",
			},
		}
	});
});