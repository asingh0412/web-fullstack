var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' });
});

/* GET hello world page. */
router.get('/hello', function(req, res, next) {
  res.render('helloworld', { title: 'Hello World' });
});

/* GET Amaninder */
router.get('/amaninder', function(req, res, next) {
  res.render('amaninder', { title: 'amaninder' });
});

/* GET userlist page */
router.get('/userlist', function(req, res) {
  var db = req.db;
  var collection = db.get('users');
  collection.find({},{},function(e,docs){
    res.render('userlist',{
      "userlist":docs
    });
  });
});

/* GET new user page. */
router.get('/newuser', function(req, res, next) {
  res.render('newuser', { title: 'Add New User' });
});

/* Post to Add user service */
router.post('/adduser',function(req, res){
  //Set our internal DB variable
  var db = req.db;
https://dqgnl9727958r.cloudfront.net/live/5.0.15.2/css/img/world_map.png
  //Get our form values These rely on the "name" attributes
  var userName = req.body.username;
  var userEmail = req.body.useremail;

  //Set our collection
  var collection = db.get('users');

  // Submit to the DB
  collection.insert({
    "username":userName,
    "email":userEmail
  },function(err,doc){
    if(err){
      // If it failed, return error
      res.send("There was a problem adding the information to the database.");
    }
    else{
      // If it worked, set the header so the address bar doesn't say /adduser

      res.location("userlist");
      // And forward to success page
      res.redirect("userlist");
    }
  });
});

module.exports = router;
