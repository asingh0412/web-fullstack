//server.js

var http = require('http');	
var flightData = require('./flightData');

function requestHandler (req, res) {
	res.writeHead(200, 'OK', {'Content-Type' : 'text/html'});

	res.write('<!DOCTYPE html>\n');
	res.write('<html><head><title>GR Air</title></head><body>'); 
	res.write('<h2>Flights</h2>');
	for (var i = 0; i < flightData.flights.length ; i++) {
		res.write(formatFlightData(flightData.flights[i]));
	}
	res.write('</body>');
	res.write('<br><a href="/">Flights</a>');

	res.write('</html>');
	res.end();
}

var server = http.createServer(requestHandler);
function formatFlightData(flight){
	return 'id: ' + flight._id + '<br>flight: <a href="/flight/' + 
		flight._id + '">' + flight.flight + '</a>' + '<br>'+ 
		'origin: ' + flight.orig + '<br>' + 
		'dest: ' + flight.dest + '<br>' + 
		'km: ' + flight.km + '<br>' +
		'price: ' + flight.price.toFixed(2) + '<br>' + 
		'<br>';
}

server.listen(8080);