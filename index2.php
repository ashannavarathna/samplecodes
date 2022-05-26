<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<style type="text/css">
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
			/*border:1px solid #A9A9A9;*/
		}
		table tr div input[type=text]{
			border-radius: 0;
			font-size: 15px;
			padding: 0;
			margin-right: 0;
			margin-left: 0;
			padding-bottom: 2px;
			width: 50px;
			-webkit-padding:none;
			padding:1px 2px 3px 5px;
			border:1px solid #A9A9A9;

		}
		table tr div input[type=text]:focus{
			outline:none;
		}
		table tr div select{
			font-size:14px;
			border:1px solid #A9A9A9;
			border-radius: 0;
			width :24px;
			margin-left: -5px;
			margin-right: 0;
			left: 0;
			-webkit-padding:none;
			padding:1px 3px 2px 5px;
		}
		table tr div select:focus{
			outline:none;
		}
		@-moz-document url-prefix() {
    		table tr div select {
    			font-size:14px;
    			width :22px;
    			padding:2px 3px 3px 5px;
    		}
		}
	</style>
</head>

<body>
	<form action="savedata" method="get">
		<table>
			<tr>
				<td>
					<div>
						<input type="text" id="name" name="name"/>
						<select>
							<option>a</option>
							<option>b</option>
							<option>c</option>
							<option>d</option>
							<option>e</option>
						</select>	
					</div>
				</td>
				<td>
					<div>
						<input type="text" id="name" name="name"/>
						<select>
							<option>a</option>
							<option>b</option>
							<option>c</option>
							<option>d</option>
							<option>e</option>
						</select>	
					</div>
				</td>
				<td>
					<div>
						<input type="text" id="name" name="name"/>
						<select>
							<option>a</option>
							<option>b</option>
							<option>c</option>
							<option>d</option>
							<option>e</option>
						</select>	
					</div>
				</td>
				<td>
					<div>
						<input type="text" id="name" name="name"/>
						<select>
							<option>a</option>
							<option>b</option>
							<option>c</option>
							<option>d</option>
							<option>e</option>
						</select>	
					</div>
				</td>
				<td>
					<div>
						<input type="text" id="name" name="name"/>
						<select>
							<option>a</option>
							<option>b</option>
							<option>c</option>
							<option>d</option>
							<option>e</option>
						</select>	
					</div>
				</td>
				<td>
					<div>
						<input type="text" id="name" name="name"/>
						<select>
							<option>a</option>
							<option>b</option>
							<option>c</option>
							<option>d</option>
							<option>e</option>
						</select>	
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
	let gobalLcok = true;
	let item = document.querySelector('#name');
	let overlay = document.querySelector('#overlay');
	item.addEventListener('input',(e)=>{
		getData('name');
		overlay.style.display = "block";
	});

	function lockUI(){
		//while(gobalLcok){
			//alert(`checking data base : ${gobalLcok}`);
		chk.style.display = "block";
		//}
	}

	function getData(name){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            	console.log(this.responseText);
            	gobalLcok = false;
            	overlay.style.display = "none";
            	//lockUI();
            }
        };
        xmlhttp.open("GET", "data.php?q=name", true);
        xmlhttp.send();
	}
</script>
</html>