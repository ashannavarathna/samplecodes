<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>
	<form action="savedata" method="get">
		<input type="text" id="name" name="name"/>
		<input type="submit" name="save" value="save"/>
	</form>
</body>
<script type="text/javascript">
	let item = document.querySelector('#name');
	item.addEventListener('input',getData);

	async function validate(e){
		alert('hello');
		let data = await getData(item.value);
		alert('hello2');
	}

	function getData(){
		alert('hello');
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            	console.log(this.responseText);
            }
        };
        xmlhttp.open("GET", "data.php?q=name", true);
        xmlhttp.send();
	}
</script>
</html>