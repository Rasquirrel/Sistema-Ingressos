<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.js"></script>

 
</head>

<body>
  <p>exemplo</p>
    <label>link</label><br>
   <input type="text" id="url" name="url">
   <input type="submit" id="mostrar" value="link"><br>
   <div id="qrcod"></div>

    <script>
        $(document).ready(function(){
          $('#mostrar').click(function(){
            var url = $('#url').val()
            $.post('qrcode.php',{url:url},function(retorno){
                      $("#qrcod").html(retorno);
            })
          })
        });
    </script>
</body>
</html>