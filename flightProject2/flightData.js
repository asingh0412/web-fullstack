//flightData.js

var uuid = require('node-uuid');

// Define an fight objects 

exports.flights=[
		{ flight : 1435, orig: 'ORG', dest: 'SFO', 
			km: 2960, price:133.00},
		{ flight : 1544, orig: 'SFO', dest: 'DFW', 
			km: 2350, price:506.00}
];

for(i = 0; i < exports.flights.length; i++){
	exports.flights[i]._id = uuid.v1();
}