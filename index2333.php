<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<style type="text/css">
		body, input[type=text], select{
			font-family: 	Arial;
		}
		#overlay {
		    background-color: #ccc; /*or semitransparent image*/
		    display: none;
		    height: 100%;
		    width: 100%;
		    position: absolute;
		    margin: 0 auto;
		    text-align: center;
		    top: 0;
		    left: 0;
		    z-index: 100;
		}
		#ajax-div {
		    z-index: 200; /*important, that it is above the overlay*/
		}
		table tr div{
			position:relative;
			/*border:1px solid #A9A9A9;*/
			height:29px;
		}
		table tr div input[type=text]{
			position:absolute;
			border-radius: 0;
			padding:3px 5px 3px 5px;
			border:1px solid #A9A9A9;
			border-right: none;
			height:21px;
		}
		table tr div input[type=text]:focus{
			outline:none;
		}
		table tr div select{
			position:absolute;
			border:1px solid #A9A9A9;
			border-radius: 0;
			width :20px;
			padding:0px 0px 0px 0px;
			height:29px;
		}
		table tr div select:focus{
			outline:none;
		}

		.default-wrapper{
			width:131px;
		}
		.default-input{
			width: 100px;
		}
		.default-select{
			left:111px;
		}
		.sm-wrapper{
			width:81px;
		}
		.sm-input{
			width: 50px;
		}
		.sm-select{
			left:61px;
		}
		.md-wrapper{
			width: 181px;
		}
		.md-input{
			width: 150px;
		}
		.md-select{
			left: 161px;
		}
		.lg-wrapper{
			width: 231px;
		}
		.lg-input{
			width: 200px;
		}
		.lg-select{
			left: 211px;
		}
	</style>
</head>

<body>
	<form action="savedata" method="get">
		<table>
			<tr>
				<td>
					<div class="sm-wrapper">
						<select class="sm-select">
							<option>ENGLISH</option>
							<option>English</option>
							<option>日本語011ABC</option>
							<option>受付</option>
							<option>e</option>
						</select>
						<input type="text"  name="name" class="sm-input" />
					</div>
				</td>
				<td>
					<div class="default-wrapper">
						<select class="default-select">
							<option>ENGLISH</option>
							<option>English</option>
							<option>日本語011ABC</option>
							<option>受付</option>
							<option>e</option>
						</select>
						<input type="text"  name="name" class="default-input" />	
					</div>
				</td>
				<td>
					<div class="md-wrapper">
						<select class="md-select">
							<option>ENGLISH</option>
							<option>English</option>
							<option>日本語011ABC</option>
							<option>受付</option>
							<option>e</option>
						</select>
						<input type="text"  name="name" class="md-input" />
					</div>
				</td>
				<td>
					<div class="lg-wrapper">
						<select class="lg-select">
							<option>ENGLISH</option>
							<option>English</option>
							<option>日本語011ABC</option>
							<option>受付</option>
							<option>e</option>
						</select>
						<input type="text"  name="name" class="lg-input" />	
					</div>
				</td>
				<td><input type="submit" name="save" value="save"/></td>
			</tr>
		</table>
	</form>
	<div id="overlay">
        cheking data base!!!
    </div>
</body>
<script type="text/javascript">
	let inputs = document.querySelectorAll('input');
	let selects = document.querySelectorAll('select');

	selects.forEach((el)=>{
		el.addEventListener('change', (e)=>{
			el.nextElementSibling.value = el.value;
		});
	});


</script>
</html>