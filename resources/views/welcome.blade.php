<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

<!--         <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style> -->
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div id="chat" style="width: 90%;padding:30px;height:400px;border:1px solid #333;margin:auto;overflow-y:scroll">
                    
                </div>
                <table>
                    <tr>
                        <td>Name</td>
                        <td><input style="width:500px;height:30px;" id="name" ></input></td>
                    </tr>
                    <tr>
                        <td>Message</td>
                        <td><textarea style="width:500px;height:30px;" id="message"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button onclick="send()">Send</button></td>
                    </tr>
                </table>
            </div>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="https://js.pusher.com/3.2/pusher.min.js"></script>
        <script type="text/javascript">
            Pusher.logToConsole = true;

            var pusher = new Pusher('b8dbe2c70588a5009c74', {
                encrypted: false
            });

            var channel = pusher.subscribe('chat');
            channel.bind('chat_xiirpl', function(data) {
                $("#chat").prepend('<div style="clear:both;display:block;'+
                    'background:#333;color:white;">'+
                    data.name+
                    '</div>'+
                    '<div style="clear:both;display:block;'+
                    'margin:10px 0px;border:1px solid #333;">'+
                    data.message+
                    '</div>');
            });

            function send() {
                var name = $("#name").val();
                var message = $("#message").val();

                $.ajax({
                    url:'{{url('ajax/send')}}',
                    type:'POST',
                    dataType:'json',
                    data:{name:name,message:message,_token:'{{csrf_token()}}'},
                    success:function(data){
                        
                    }
                    
                })
            }
        </script>
    </body>
</html>
