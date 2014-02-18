function drawChart(){
	var dataArray = new Array(),
		date = $('.date').html(),
		end = $('.end').html(),
		start = $('.start').html(),
		goal1 = $('.val1-target').html(),
		goal2 = $('.val2-target').html();
		

	end = new Date(end);
	start = new Date(start);
	
	dateDiff = getDayDifference(start, end);
	var dayLabels = new Array(dateDiff);
	console.log(dateDiff);

	$('.chartdata li ul').each(function(){
		var date = new Date($(this).find('.date').html()),
			thisdateDiff = dateDiff - getDayDifference(date, end);

		dataArray[thisdateDiff] = parseFloat($(this).find('.val1').html()/$(this).find('.val2').html());
		console.log(thisdateDiff, date);
	});


	for(var i=0;i<dayLabels.length;i++){
	  	dayLabels[i] = i+1;
	}

	var goalLine = new Array(dateDiff);

	goalLine[0] = 0;
	goalLine[dateDiff] = goal1;

	var data = {
		labels : dayLabels,
		datasets : [
			{
				fillColor : "rgba(220,220,220,0.5)",
				strokeColor : "rgba(220,220,220,1)",
				pointColor : "rgba(220,220,220,1)",
				pointStrokeColor : "#fff",
				data : dataArray
			},
			{
				fillColor : "rgba(220,220,220,0.5)",
				strokeColor : "rgba(0,0,0,1)",
				pointColor : "rgba(0,0,0,1)",
				pointStrokeColor : "#ccc",
				data : goalLine
			}
		]
	}

	var options = {
				
		//Boolean - If we show the scale above the chart data			
		scaleOverlay : false,
		
		//Boolean - If we want to override with a hard coded scale
		scaleOverride : false,
		
		//** Required if scaleOverride is true **
		//Number - The number of steps in a hard coded scale
		scaleSteps : null,
		//Number - The value jump in the hard coded scale
		scaleStepWidth : null,
		//Number - The scale starting value
		scaleStartValue : null,

		//String - Colour of the scale line	
		scaleLineColor : "rgba(0,0,0,.1)",
		
		//Number - Pixel width of the scale line	
		scaleLineWidth : 1,

		//Boolean - Whether to show labels on the scale	
		scaleShowLabels : true,
		
		//Interpolated JS string - can access value
		scaleLabel : "<%=value%>",
		
		//String - Scale label font declaration for the scale label
		scaleFontFamily : "'Arial'",
		
		//Number - Scale label font size in pixels	
		scaleFontSize : 6,
		
		//String - Scale label font weight style	
		scaleFontStyle : "normal",
		
		//String - Scale label font colour	
		scaleFontColor : "#666",	
		
		///Boolean - Whether grid lines are shown across the chart
		scaleShowGridLines : true,
		
		//String - Colour of the grid lines
		scaleGridLineColor : "rgba(0,0,0,.05)",
		
		//Number - Width of the grid lines
		scaleGridLineWidth : 1,	
		
		//Boolean - Whether the line is curved between points
		bezierCurve : false,
		
		//Boolean - Whether to show a dot for each point
		pointDot : true,
		
		//Number - Radius of each point dot in pixels
		pointDotRadius : 3,
		
		//Number - Pixel width of point dot stroke
		pointDotStrokeWidth : 1,
		
		//Boolean - Whether to show a stroke for datasets
		datasetStroke : true,
		
		//Number - Pixel width of dataset stroke
		datasetStrokeWidth : 2,
		
		//Boolean - Whether to fill the dataset with a colour
		datasetFill : true,
		
		//Boolean - Whether to animate the chart
		animation : true,

		//Number - Number of animation steps
		animationSteps : 60,
		
		//String - Animation easing effect
		animationEasing : "easeOutQuart",

		//Function - Fires when the animation is complete
		onAnimationComplete : null
		
	}

	var ctx = $(".chart").get(0).getContext("2d");
	var myNewChart = new Chart(ctx);

	new Chart(ctx).Line(data);

};

function getDayDifference(start, end){
	var oneDay = 24*60*60*1000;

	return Math.round(Math.abs((end.getTime() - start.getTime())/(oneDay)));
}