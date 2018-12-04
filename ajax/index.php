<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    </head>
    <body>
        <div id="result1">TEXT</div>
        <div id="result2">JSON</div>
        <div id="result3">XML</div>
        <br/>
        <input type="button" name="clickme" id="text-click" value="Get List By Text"/>
        <input type="button" name="clickme" id="json-click" value="Get List By Json"/>
        <input type="button" name="clickme" id="xml-click" value="Get List By XML"/>
        <script language="javascript">
            $('#text-click').click(function(){
                $.ajax({
                    url : 'result.php',
                    type : 'post',
                    dataType : 'text',
                    success : function(data){
                        $('#result1').html(data);
                    }
                })
            })
            $('#json-click').click(function(){
                $.ajax({
                    url : 'result_1.php',
                    type : 'get',
                    dataType : 'json',
                    success : function (data){
                         
                        var html = '';
                        html += '<table border="1" cellspacing="0" cellpadding="10">';
                        html += '<tr>';
                           html += '<td>';
                                html += 'Username';
                                html += '</td>';
                                html += '<td>';
                                html += 'Email';
                           html += '</td>';
                        html += '</tr>';
                         
                        // Kết quả là một object json
                        // Nên ta sẽ loop result
                        $.each (data, function (key, item){
                            html +=  '<tr>';
                                html +=  '<td>';
                                    html +=  item['username'];
                                html +=  '</td>';
                                html +=  '<td>';
                                    html +=  item['email'];
                                html +=  '</td>';
                            html +=  '<tr>';
                        });
                         
                        html +=  '</table>';
                         
                        $('#result2').html(html);
                    }
                });
            });
        </script>
         
    </body>
</html>