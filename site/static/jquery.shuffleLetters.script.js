$(function(){
	
	// container is the DOM element;
	// userText is the textbox
	
	var container = $(".container")
		container2 = $(".container2")
		header_sub = $(".header_sub")
		header_load = $(".header_load");
		marq = $(".marq_parent")
		canvas_basic = $(".canvas-basic")
		userText = $('#userText'); 

	// Bind events
	userText.click(function () {
		
	  userText.val("");
	  
	}).bind('keypress',function(e){
		
		if(e.keyCode == 13){
			
			// The return key was pressed
			
			container.shuffleLetters({
				"text": userText.val()
			});
			
			userText.val("");
		}

	}).hide();

	// Leave a 4 second pause

	setTimeout(function(){
		
		// Shuffle the container with custom text

		header_load.fadeOut();
		// Shuffle the contents of container
		container.shuffleLetters({
			"text": "IIMURA LABORATORY"
		});

		container2.shuffleLetters({
			"text": "RECRUIT 2018"
		});
		
		//userText.val("type anything and hit return..").fadeIn();
		
	},1500);

	setTimeout(function(){
		

		$(".header_top").animate({
			fontSize: '3vw'
		}, 1000);
		$(".header_year").animate({
			fontSize: '5vw'
		}, 1000);

		
		//userText.val("type anything and hit return..").fadeIn();
		
	},3000);

	setTimeout(function(){
		canvas_basic.css("visibility","visible");
		
	},3500);

	setTimeout(function(){
		
		header_sub.fadeIn(); // MAKE USE OF...
		//userText.val("type anything and hit return..").fadeIn();

	},4000);

	setTimeout(function(){

		marq.fadeIn(); // ロゴ
		//userText.val("type anything and hit return..").fadeIn();
		
	},4500);
	
});

