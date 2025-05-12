window.onload = function(){
	try {
		document.body.style.userSelect = 'none';
		$('img').each(function(){
			$(this).attr('draggable', 'false');
		})
	} catch (error) {
		console.log(error);
	}
	
	document.onkeydown = function (){
		var e = window.event || arguments[0];
		if(e.keyCode == 123){
			return false;
		}else if((e.ctrlKey) && (e.shiftKey) && (e.keyCode == 73)){
			return false;
		}else if((e.shiftKey) && (e.keyCode == 121)){
			return false;
		}else if((e.ctrlKey) && (e.keyCode == 85)){
			return false;
		}else if((e.ctrlKey) && (e.keyCode == 67)){
			return false;
		}else if((e.ctrlKey) && (e.keyCode == 83)){
			return false;
		}
	};
	document.oncontextmenu = function (){
		return false;
	}
};