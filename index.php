<link rel="stylesheet" href="bs.css">
<script src="jquery.js"></script>
<script src="bs.js"></script>


<style>

	.alert{
		position: fixed;
		top: 60px;
		right: -120px;
		transition:all 1s ease;
		opacity:0;
	}

	.alert.on{
		top: 60px;
		right: 60px;
		opacity:1;
	}

</style>


<div class="container">
	<div class="row">

		<div class="col-sm-4">
			<form action="server.php">
				<div class="form-group">
					<label for="">Email</label>
					<input type="text" class="form-control input-sm" name="email">
				</div>

				<button class="btn btn-sm btn-danger">Good</button>
			</form>
		</div>

	</div>
</div>

<script>

	$('form').submit( function(e){

		e.preventDefault();
		$.post('server.php',function(data){

			$('.alert').remove();
			var tmpl = '<div class="alert alert-success alert-dismissable">'+
			'<button class="close" data-dismiss="alert">&times;</button>'+
			'Alert message'+
			'</div>';

			$('.row').append(tmpl);
			setTimeout(function(){
				$('.alert').addClass('on');
			},200);
		});

		//thanks for watching...............

	});

</script>