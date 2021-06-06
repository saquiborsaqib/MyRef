//Include JQuery CDN or download jQuery

//.load()
	//Load data from the server and place the returned HTML into the matched elements.
	// The POST method is used if data is provided as an object; otherwise, GET is assumed.
	.load(url,data,complete);
	/*here,
		url : A string containing the URL to which the request is sent.
		data : A plain object or string that is sent to the server with the request.
		complete : A callback function that is executed when the request completes.*/

	$(document).ready(function(){
		$("#btn").click(function(){
			$("#container").load("url", {
				tag: value, 
				tag: value
			}, function(){
				//code
			});
		});
	});

//.get()
	// Load data from the server using a HTTP GET request.
	
	$(document).ready(function(){
		$("#btn").click(function(){
			$.get("url", function(data, status){
				$("#container").html(data);
				alert(status);
			});
		});
	});

//.post()
	//Send data to the server using a HTTP POST request.
	
	$(document).ready(function(){
		$("#btn").click(function(){
			$.post("url", {
				key:value,
				key:value
			}, function(data, status){
				$("#container").html(data);
				alert(status);
			});
		});
	});
