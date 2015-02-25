// server.js

var http = require('http');
var url = require('url');
function requestHandler (req,res){
	res.writeHead(200, 'OK', {'Content-Type': 'text/html'});

	var urlData = url.parse(req.url, true);
	res.write('action:' + urlData.query.action + '<br>');
	res.write('flight:' + urlData.query.flight + '<br>');
	
	//res.write('<html><body><h1>Hello World</h1></body></html>');
	res.end();
}


var server = http.createServer(requestHandler);
server.listen(8080);