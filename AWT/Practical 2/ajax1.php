<html>
    <head>
        <title>AJAX Example</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <input type="textbox" id="num1" required/>
        <a href="javascript:void(0);" onclick="makeRequest()" > Click Here</a>

        <script>
            function makeRequest(){
                var num1 = $("#num1").val();
                $.ajax({
                    url:"hello.php",
                    type:"POST",
                    data:"num1="+num1,
                    success: function(result){
                        alert(result);
                    },
                });
            }
        </script>
    </body>
</html>