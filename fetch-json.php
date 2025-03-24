<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv = "X-UA-Compatible" content="ie=edge">
    <title>Read json data</title>
    <link rel= "stylesheet" href= "style.css">
</head>
<body>
    <div id = "main"> 
        <div id = "header"> <h1>Read Json Data</h1>   </div>
        <div id = "load-data">
            <table id="load-table" border = "1" cellpadding="10px" width="100%">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                </tr>
            </table>
        </div>
    </div>
    <script type = "text/javascript" src = "js/jquery.js"></script>
    <script>
      // $(document).ready(function(){
            /*$.getJSON("json-encode.php",
                 function(data){
                    $.each(data,function(key,value){
                     //$("#load-data").append(data.id+"<br>"+data.title+"<br>"+data.body);
                     $("#load-data").append(value.id + " " + value.name + "<br>");
                    });
                    }
                );*/
                /*$.ajax({ 
                    url:"json-encode.php",
                    type: "POST",
                    //data : { id : 13},
                    dataType: "JSON",
                    success:function(data){
                    $.each(data,function(key,value){
                     //$("#load-data").append(data.id+"<br>"+data.title+"<br>"+data.body);
                     $("#load-table").append("<tr><td>" + value.id + "</td><td>" + value.name + "</td></tr>");
                    });
                    }
       });*/
          // });
          $.ajax({
    url: "json-encode.php",
    type: "POST",
    dataType: "JSON",
    success: function(data) {
        console.log(data); // Log the received data
        $.each(data, function(key, value) {
            console.log(value.id, value.name); // Log each ID and Name
            $("#load-table").append("<tr><td>" + value.id + "</td><td>" + value.name + "</td></tr>");
        });
    }
});

    
    </script>
</body>
</html>