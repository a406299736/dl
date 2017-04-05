// JavaScript Document

    	$(function(){
			$(".nav li").hover(
			function()
			{
				$(".nav01",this).stop(false,true);
				$(".nav01",this).slideDown(400);
				},
				
			function()
			{
				$(".nav01",this).stop(false,true);
				$(".nav01",this).slideUp(400);
				}
			)
			})




























