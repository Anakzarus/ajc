(function($){
	$.fn.ajc = function(){
		return this.each(function(){
			var element = $(this);
			var submit = element.find('input[type="submit"]');
			var allinputs = element.find('input:not([type="submit"])');
			submit.on('click', function(event){
				event.preventDefault();
				var values = 'url("' + (element.attr('action') || 'index.php') + '?';
				for(let i = 0; i < allinputs.length; i++){
					let id = allinputs[i].name;
					let val = allinputs[i].value;
					values += `${i>0?'&':''}${id}=${val}`;
				}
				values += '")';
				window.requestAnimationFrame(function(){
					element.css("background", values);
					window.requestAnimationFrame(function(){
						element.css("background", '');
					});
				});
				allinputs.val('');
			});
		});
	}
}(jQuery));