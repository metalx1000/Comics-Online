<!DOCTYPE html>
<html lang="en">
<head>
  <title>Comic Index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script>
    $(document).ready(function(){
      $.get('list.php',function(data){
        var comics = data.split("\n");
        comics.forEach(function(comic){
          if(comic != ""){
            $("#mainlist").append('<a href="read.php?comic='+comic+'"><li class="list-group-item">'+comic+'</li></a>');
          }
        });
      });
    });
  </script>
</head>
<body>

<div class="container">
  <h2>Comic Index</h2>
  <ul id="mainlist" class="list-group">
  </ul>
</div>

</body>
</html>

