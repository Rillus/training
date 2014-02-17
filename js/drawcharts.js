function drawChart(){
	var dataArray = new Array();

	$('.chartdata li').each(function(){
		dataArray.push($(this).html());
	});
	console.log(dataArray);

	var data = {
		labels : ["January","February","March","April","May","June","July"],
		datasets : [
			{
				fillColor : "rgba(220,220,220,0.5)",
				strokeColor : "rgba(220,220,220,1)",
				pointColor : "rgba(220,220,220,1)",
				pointStrokeColor : "#fff",
				data : dataArray
			}
		]
	}

	var ctx = $(".chart").get(0).getContext("2d");
	var myNewChart = new Chart(ctx);

	new Chart(ctx).Line(data);

};