$(document).ready(function(){
	odd= {"background":"#ffffff"}; //奇数
	even={"background":"#efefef"}; //偶数
	odd_even("#table",odd,even);
	dialog(".mask",".dialog");//弹窗
	// $(".form :input.required").each(function(){
	// 	var $required = $("<strong class='required_icon'>*&nbsp;</strong>"); //创建* 必填项
	// 	$(this).prev().prepend($required);
	// });
	//文本框失去焦点
	// $(".form :input").blur(function(){
	// 	var $parent = $(this).parent();
	// 	$parent.find(".tips").remove();//将tips移除
	// 	var errorMsg = "请输入内容";
	// 	if($(this).find("required").value==""){
	// 		$parent.append('<span class="tips">'+errorMsg+'</span>');
	// 	}
	// }).;
});

	function odd_even(id,odd,even){
		$(id).find("tr").each(function(index){
			if(index%2==1){
				$(this).css(odd);
			}else{$(this).css(even);}
		});

	};
	function dialog(mask,dialog){
		//$(mask).hide();
		//$(dialog).hide();
		$(dialog).animate({top:'20%'},'swing');
		$("#btn_red").bind("click",function(){
			$(mask).show();
			$(dialog).show().animate({top:'20%'},'swing');
		});
		$("#btn_close").bind("click",function(){
			$(mask,dialog).hide();
		});
	};

