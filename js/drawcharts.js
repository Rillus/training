function drawChart(){
	var dataArray = new Array(),
		action = $('.action').html(),
		date = $('.date').html(),
		end = $('.end').html(),
		start = $('.start').html(),
		goal1 = parseFloat($('.val1-target').html()),
		goal1Unit = $('.val1-unit').html(),
		goal2 = parseFloat($('.val2-target').html());
		goal2Unit = $('.val2-unit').html();
		

	end = new Date(end);
	start = new Date(start);
	
	dateDiff = getDayDifference(start, end);
	var dayLabels = new Array(dateDiff);
	console.log(dateDiff);

	for(var i=0;i<dayLabels.length;i++){
	  	dayLabels[i] = i+1;
	}

	var goalLine = new Array(),
		yAxisTitle = "";

	if (action == "run"){
		$('.chartdata li ul').each(function(){
			var date = new Date($(this).find('.date').html()),
				date = date.getTime(),
				value = parseFloat($(this).find('.val1').html()/$(this).find('.val2').html());

			dataArray.push([date, value]);
			console.log(date, value);
		});

		goalLine[0] = [start.getTime(), 0];
		goalLine[1] = [end.getTime(), goal1/goal2];

		yAxisTitle = goal1Unit+'/'+goal2Unit
	} else if (action == "lose"){
		$('.chartdata li ul').each(function(){
			var date = new Date($(this).find('.date').html()),
				date = date.getTime(),
				value = parseFloat($(this).find('.val1').html());

			dataArray.push([date, value]);
			console.log(date, value);
		});

		goalLine[0] = [start.getTime(), goal2];
		goalLine[1] = [end.getTime(), goal2 - goal1];

		yAxisTitle = "kg"
	} else {
		$('.chartdata li ul').each(function(){
			var date = new Date($(this).find('.date').html()),
				date = date.getTime(),
				value = parseFloat($(this).find('.val1').html());

			dataArray.push([date, value]);
			console.log(date, value);
		});

		goalLine[0] = [start.getTime(), goal2];
		goalLine[1] = [end.getTime(), goal2 + goal1];

		yAxisTitle = "kg"
	}
	console.log(goalLine);
	console.log(dataArray);

	$('#chart').highcharts({
        chart: {
            type: 'spline'
        },
        title: {
            text: 'My progress'
        },
        xAxis: {
            type: 'datetime',
            dateTimeLabelFormats: { // don't display the dummy year
                month: '%e. %b',
                year: '%b'
            }
        },
        yAxis: {
            title: {
                text: yAxisTitle
            },
            min: 0
        },
        series: [{
            name: 'Goal',
            data: goalLine
        }, {
            name: 'Actual',
            data: dataArray
        }],
        tooltip: {
            formatter: function() {
                    return '<b>'+ this.series.name +'</b><br/>'+
                    Highcharts.dateFormat('%e. %b', this.x) +': '+ this.y + goal1Unit+'/'+goal2Unit;
            }
        },
    });

};

function getDayDifference(start, end){
	var oneDay = 24*60*60*1000;

	return Math.round(Math.abs((end.getTime() - start.getTime())/(oneDay)));
}