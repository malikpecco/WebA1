var connect = require('connect');
var serveStatic = require('serve-static');
var path = require('path');

var app = connect();
var sDir = ".";
app.use(serveStatic(sDir));
var nPort = 5100;
app.listen(nPort, function(){
    console.log("Listening on port: " + nPort);
    console.log("Document Root: " +  __dirname + path.sep + sDir);
});