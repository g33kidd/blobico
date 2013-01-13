// Routing for URLs

app = Davis(function() {
	
	this.get('/', function () {
		alert("This is home.");
	})
	
	this.get('/greet/:name', function (req) {
		alert("Hello there " + req.params['name'])
    })
	
})

app.bind('unsupported', function() {
	console.log("This browser is not supported with PushState and Davis.js.");
})