<html>
<head>
<!-- Latest compiled and minified CSS -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->

<!-- Optional theme -->
<link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">
<!-- <link rel="stylesheet" href="css/bootstrap-theme.min.css">
 -->
<!-- Latest compiled and minified JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- <script src="js/bootstrap.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.11.2/jquery-ui.min.js"></script>
</head>
<body>

<div class="container"><br/>
        <div class="row">
        <div class="col-xs-12">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">ADD NEW CLASS</h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" class="frm" id="frmid">
			    			
			    		</form>
			    	</div>
			    	<div class="panel-footer">
		    		<div class="row">
			    			<div class="col-xs-9"></div>
			    			<div class="col-xs-3">
			    				<div class="form-group">
			    					<input type="submit" value="Add Question" class="btn btn-info btn-block add_q">
			    				</div>
			    			</div>
			    		</div>
			    		<hr>
		    			<div class="row">
			    			<div class="col-xs-3 col-sm-3 col-md-3">
			    				<div class="form-group">
			    					<input type="submit" value="Save" class="btn btn-info btn-block">
			    				</div>
			    			</div>
			    		</div>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>

</body>


</html>
<script>
	var counter = 1;
	var counterML =1;
	var counterSC =1;
	var counterMC =1;
	$('.add_q').click(function(){

  	var $newDiv = $('<div class="row"><div class="col-xs-6"><div class="form-group"><input type="test" name="main_q[]" class="form-control" placeholder="Enter Questions" required></div></div><div class="col-xs-6"><div class="form-group"><select class="form-control" id="q_type'+counter+'" name="q_type" onchange="get_quetion_type()"><option value="">Seletect Type</option><option value="multi_line">Multi-line text</option><option value="signle_choice">Single Choice</option><option value="multiple_choice">Multiple choice</option></select></div></div></div>');
 	 $newDiv.attr("id", "newDiv" + counter++);
  	$("#frmid").append($newDiv);	
	});

	function get_quetion_type(){
		var type = $("#q_type"+(counter-1)).val();
		//alert(type);
		if(type=="multi_line"){
			//alert('.rmsc'+(counter));
			$('.rmsc'+counter).remove();
			$('.rmmc'+counter).remove();
			$multi_line = $('<div class="row divToRemove rmml'+counter+'"><div class="col-xs-6"><div class="form-group"><textarea name="ans1" class="form-control" rows="5" id="comment"></textarea></div></div></div>');
			$multi_line.attr("id", "multi_line" + counterML++);
			$("#frmid").append($multi_line);

		}else if(type=="signle_choice"){
			$('.rmml'+counter).remove();
			$('.rmmc'+counter).remove();
			$signle_choice = $('<div class="row divToRemove rmsc'+counter+'"><div class="col-xs-6"><div class="form-group"><input type="test" name="ans1" class="form-control" placeholder="Enter Answer"></div></div></div>');
			$signle_choice.attr("id", "signle_choice" + counterSC++);
			$("#frmid").append($signle_choice);

		}else if(type=="multiple_choice"){	
			$('.rmml'+counter).remove();
			$('.rmsc'+counter).remove();
			$multiple_choice = $('<div class="row divToRemove rmmc'+counter+'"><div class="col-xs-6"><div class="form-group"><input type="test" name="ans1" class="form-control" placeholder="Enter Answer"></div><div class="form-group"><input type="test" name="ans2" class="form-control" placeholder="Enter Answer"></div><div class="form-group"><input type="test" name="ans3" class="form-control" placeholder="Enter Answer"></div><div class="form-group"><input type="test" name="ans4" class="form-control" placeholder="Enter Answer"></div></div></div>');
			$multiple_choice.attr("id", "multiple_choice" + counterMC++);
			$("#frmid").append($multiple_choice);

		}else{
			$('.divToRemove').remove();
		}
	}
</script>