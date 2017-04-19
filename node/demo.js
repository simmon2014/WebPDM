var express = require('express');
var app = express();
var router = express.Router();
var bodyParser = require('body-parser');
var urlencodedParser = bodyParser.urlencoded({ extended: false });
// //  主页输出 "Hello World"
// app.get('/', function (req, res) {
//    console.log("主页 GET 请求");
//    res.send('Hello GET');
// })
 
 app.use(express.static('public'));
 app.use(router);
//  app.get('/', function (req, res) {
//    res.sendFile( __dirname + "/" + "index.html" );
// })


// //  POST 请求
// app.post('/', function (req, res) {
//    console.log("主页 POST 请求");
//    res.send('Hello POST');
// })
 
// //  /del_user 页面响应
// app.get('/del_user', function (req, res) {
//    console.log("/del_user 响应 DELETE 请求");
//    res.send('删除页面');
// })
 
//  /list_user 页面 GET 请求
app.post('/get_partlist', urlencodedParser,function (req, res) {
   console.log("/get_partlist 请求");
   
   var mydb=require("./mydb.js");

   page=1;
   rows=10;
   
   if(req.body)
   {
     page=parseInt(req.body.page);
     rows=parseInt(req.body.rows);
     //console.log("body:"+req.body);
   }

  mydb.get_partlist(page,rows,res);
  
//    res.send('用户列表页面');
})
 

app.get('/get_partpic', urlencodedParser,function (req, res) {
   console.log("/get_partpic 请求");
   
   var mydb=require("./mydb.js");

   prtnum=137;
   
   if(req.query)
   {
     prtnum=parseInt(req.query.prtnum);
   }

  mydb.get_partpic(prtnum,res);
  
//    res.send('用户列表页面');
})
// // 对页面 abcd, abxcd, ab123cd, 等响应 GET 请求
// app.get('/ab*cd', function(req, res) {   
//    console.log("/ab*cd GET 请求");
//    res.send('正则匹配');
// })
 
 
var server = app.listen(8081, function () {
 
  var host = server.address().address
  var port = server.address().port
 
  console.log("应用实例，访问地址为 http://%s:%s", host, port)
 
})