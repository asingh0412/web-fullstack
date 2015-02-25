var uuid = require('node-uuid');

// Define a flight object
var flight = {flight: 1435, orig: 'ORD',
				dest: 'SFO', km: 2960, price: 133.00};

// Get a flight ID
flight._id = uuid.v1();
console.log('ID:' + flight._id);
console.log('Flight #'+ flight.flight);
console.log('Origination:'  + flight.orig);
console.log('Destination:'  + flight.dest);
console.log('Kilometer:'  + flight.km);
console.log('Price:'  + flight.price);