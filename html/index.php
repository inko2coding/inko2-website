<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter Subscription</title>
</head>
<body style="text-align: center;" >
    <h2>Email Subscription using PHP and jQuery</h2>
    <input type="email"  id="email" placeholder="Enter Email" autofocus>
    <button type="submit" id="submit">Submit</button>
    <div id="result" style="margin-top: 50px;">

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" >
        $(document).ready(function() {
            $("#email").keypress(function(event) {
                var email = $('#email').val();
                var keyCode = event.keyCode;
                if (keyCode == 13) {
                    $.ajax({
                        type: 'POST',
                        url: 'action.php',
                        data: {email: email},
                        success: function(data) {
                            $("#result").hide();
                            $("#result").html(data);
                            $("#result").fadeIn();
                        }
                    })
                }
            })

            $("#submit").click(function() {
                var email = $('#email').val();
                    $.ajax({
                        type: 'POST',
                        url: 'action.php',
                        data: {email: email},
                        success: function(data) {
                            $("#result").hide();
                            $("#result").html(data);
                            $("#result").fadeIn();
                        }
                    })
            });
        })
    </script>
</body>
</html>