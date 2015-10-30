<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	<title><?php echo $this->config->item('title');?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>" rel="stylesheet">

     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('jquery/jquery-1.11.3.min.js'); ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>

	<script src="<?php echo base_url('Highcharts-4.0.1/js/highcharts.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('Highcharts-4.0.1/js/highcharts.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('Highcharts-4.0.1/js/modules/exporting.js'); ?>" type="text/javascript"></script>

	<script type="text/javascript">
	$(function () {
	    $('#container').highcharts({
	        chart: {
	            type: 'area'
	        },
	        title: {
	            text: 'Historic and Estimated Worldwide Population Distribution by Region'
	        },
	        subtitle: {
	            text: 'Source: Wikipedia.org'
	        },
	        xAxis: {
	            categories: ['1750', '1800', '1850', '1900', '1950', '1999', '2050'],
	            tickmarkPlacement: 'on',
	            title: {
	                enabled: false
	            }
	        },
	        yAxis: {
	            title: {
	                text: 'Percent'
	            }
	        },
	        tooltip: {
	            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.percentage:.1f}%</b> ({point.y:,.0f} millions)<br/>',
	            shared: true
	        },
	        plotOptions: {
	            area: {
	                stacking: 'percent',
	                lineColor: '#ffffff',
	                lineWidth: 1,
	                marker: {
	                    lineWidth: 1,
	                    lineColor: '#ffffff'
	                }
	            }
	        },
	        series: [{
	            name: 'Asia',
	            data: [502, 635, 809, 947, 1402, 3634, 5268]
	        }, {
	            name: 'Africa',
	            data: [106, 107, 111, 133, 221, 767, 1766]
	        }]
	    });
	});		
	</script>
</head>
<body>
  <div id="container" style="min-width:700px;height:400px"></div>
</body>
</html>