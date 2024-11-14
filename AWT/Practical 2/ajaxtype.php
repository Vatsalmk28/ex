<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AJAX Example</title>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

    <script>
        hit1();
        hit2();
        function hit1(){
            $.ajax({
                url: 'h1.php',
                type: 'post',
                // async:false,
                success: function(result){
                    console.log(result);
                },
            });
        }
        function hit2(){
            $.ajax({
                url: 'h2.php',
                type: 'post',
                success: function(result){
                    console.log(result);
                },
            });
        }
    </script>
</body>
</html>