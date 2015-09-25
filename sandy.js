$(document).ready(function(){
	odd= {"background":"#ffffff"}; //奇数
	even={"background":"#efefef"}; //偶数
	odd_even("#table",odd,even);
});

	function odd_even(id,odd,even){
		$(id).find("tr").each(function(index){
			if(index%2==1){
				$(this).css(odd);
			}else{$(this).css(even);}
		});

	}

