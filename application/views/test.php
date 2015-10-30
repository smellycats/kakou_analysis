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

    <link href="<?php echo base_url('bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css'); ?>" rel="stylesheet" media="screen">

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
		var title = [];
		var empty = [];
		var contain = [];
    	$(document).ready(function() {  
		 	$.getJSON("<?php echo site_url('index/load_data'); ?>", function(result){
				title = result.name;
	            empty = result.empty;
	            contain  = result.contain;
	            loadchart();
		  	});
        });

		function loadchart(){
		    $('#container').highcharts({
		        chart: {
		            type: 'column'
		        },
		        title: {
		            text: '车流量分析'
		        },
		        xAxis: {
		            categories: title
		        },
		        yAxis: {
		            min: 0,
		            title: {
		                text: '车流量'
		            },
		            stackLabels: {
		                enabled: true,
		                style: {
		                    fontWeight: 'bold',
		                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
		                }
		            }
		        },
		        legend: {
		            align: 'right',
		            x: -70,
		            verticalAlign: 'top',
		            y: 20,
		            floating: true,
		            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColorSolid) || 'white',
		            borderColor: '#CCC',
		            borderWidth: 1,
		            shadow: false
		        },
		        tooltip: {
		            formatter: function() {
		                return '<b>'+ this.x +'</b><br/>'+
		                    this.series.name +': '+ this.y +'<br/>'+
		                    'Total: '+ this.point.stackTotal;
		            }
		        },
		        plotOptions: {
		            column: {
		                stacking: 'normal',
		                dataLabels: {
		                    enabled: true,
		                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
		                }
		            }
		        },
		        series: [{
		            name: '有车牌',
		            data: contain
		        }, {
		            name: '无车牌',
		            data: empty
		        }]
		    });
		}

	</script>
  </head>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2">
          <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#">柱状图</a></li>
            <li><a href="#">堆栈面积图</a></li>
          </ul>
        </div>
        <div class="col-md-10">
          <h1 class="page-header">Dashboard</h1>
		  <form class="form-inline">
		  	<div class="form-group">
                <label for="dtp_input1" class="col-md-2 control-label">开始时间</label>
                <div class="input-group date form_datetime col-md-6" data-date="" data-date-format="yyyy-mm-dd hh:ii" data-link-field="dtp_input1">
                    <input class="form-control" size="32" type="text" value="" readonly>
					<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
				<input type="hidden" id="dtp_input1" value="" /><br/>
            </div>
		  	<div class="form-group">
                <label for="dtp_input2" class="col-md-2 control-label">结束时间</label>
                <div class="input-group date form_datetime col-md-6" data-date="" data-date-format="yyyy-mm-dd hh:ii" data-link-field="dtp_input2">
                    <input class="form-control" size="32" type="text" value="" readonly>
					<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
				<input type="hidden" id="dtp_input2" value="" /><br/>
            </div>
		    <div class="form-group">
		      <label for="place">卡口地点</label>
          	  <select id="place" class="form-control">
			  	<option value="all">所有</option>
			  	<option>2</option>
			  	<option>3</option>
			  	<option>4</option>
			  	<option>5</option>
			  </select>
		    </div>
		    <button type="button" class="btn btn-primary">Submit</button>
		  </form>
          <div id="container" style="min-width:700px;height:400px"></div>
        </div>
      </div>
    <div>
   	<script type="text/javascript" src="<?php echo base_url('bootstrap-datetimepicker/js/bootstrap-datetimepicker.js'); ?>" charset="UTF-8"></script>
	<script type="text/javascript" src="<?php echo base_url('bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.fr.js'); ?>" charset="UTF-8"></script>
	<script type="text/javascript">
	    $('.form_datetime').datetimepicker({
	        language: 'cn',
	        weekStart: 1,
	        todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 2,
			forceParse: 0,
	        showMeridian: 0
	    });
		$('.form_date').datetimepicker({
	        language:  'fr',
	        weekStart: 1,
	        todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 2,
			minView: 2,
			forceParse: 0
	    });
		$('.form_time').datetimepicker({
	        language:  'fr',
	        weekStart: 1,
	        todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 1,
			minView: 0,
			maxView: 1,
			forceParse: 0
	    });
	</script>
  </body>
</html>