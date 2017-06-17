$(".nav li").hover(function(){
	$(this).find('ul').stop().slideDown(200);
},function(){
	$(this).find('ul').stop().slideUp(100);
})

$(".nav>ul>li>ul>li").hover(function(){
	$(this).css('background','#ccc');
},function(){
	$(this).css('background','none');
});

