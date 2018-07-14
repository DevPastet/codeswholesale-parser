<html>
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>

<div class="count_end"></div>
<button class="start">Start</button>
<script>
    $(document).ready(function(){

        function request() {
            $.ajax({
                type: "GET",
                url: "products.php",
                success: function(msg){
                    $('.count_end').html(msg+'<br>'+$('.count_end').html());
                    setTimeout(request, 1000);
                }
            });
        }

        $('.start').on('click',function(){
            request();
        });
    });
</script>
</html>