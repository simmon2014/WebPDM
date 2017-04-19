
    
    function get_partlist(page,rows,res)
    {

        offset = (page-1)*rows;
        var mysql  = require('mysql');  
    
        var connection = mysql.createConnection({     
        host     : 'localhost',       
        user     : 'root',              
        password : 'simmon',       
        port: '3306',                   
        database: 'ruilimdldb', 
        }); 
        
        connection.connect();
        
      //  var result=new Array();
     
        var total=0;
        var sql="select count(*) as total from npartmanagetable ";
        connection.query(sql,function (err, data) {
                if(err){
                console.log('[SELECT ERROR] - ',err.message);
                return;
            }
        //  result["total"]=parseInt(data[0].total);
        //  console.log(result["total"]);
        total=parseInt(data[0].total);
        });



        sql = 'select * from npartmanagetable limit '+offset+','+rows;
        var rowsdata=new Array;
        //查
        connection.query(sql,function (err, data) {
                if(err){
                console.log('[SELECT ERROR] - ',err.message);
                return;
                }

           var result={
            total:total,
            rows:data
        }

        res.jsonp(result);
       // console.log(result);

        });
        
        //res.send(result);
        
      
        connection.end();
        
    };


    function get_partpic(prtnum,res)
    {
        var mysql  = require('mysql');  
    
        var connection = mysql.createConnection({     
        host     : 'localhost',       
        user     : 'root',              
        password : 'simmon',       
        port: '3306',                   
        database: 'ruilimdldb', 
        }); 
        
        connection.connect();
        
      //  var result=new Array();
     
        var total=0;
        var sql="select * from npartpic where PrtNum= "+prtnum+"";
        connection.query(sql,function (err, data) {
                if(err){
                console.log('[SELECT ERROR] - ',err.message);
                console.log("sql:"+sql);
                return;
            }
        //  result["total"]=parseInt(data[0].total);
        
        res.type("image/gif");
        res.send(data[0].File);
        });
      
        connection.end();
        
    };

 
exports.get_partlist = get_partlist; 
exports.get_partpic = get_partpic; 