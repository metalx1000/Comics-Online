<!DOCTYPE html>
<html lang="en">
<head>
  <title>Comic Index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- favicon -->
  <?php include('fav.php');?>
<!-- end favicon -->

  <style>
    .read{
      color: lightgrey;
    }

    #mainlist{
      font-weight: bold;
    }
  </style>
  <script>
    var comics;
    if (typeof(Storage) !== "undefined") {
      // Code for localStorage/sessionStorage.
      read = JSON.parse(localStorage.getItem("readComic"));
    } else {
        // Sorry! No Web Storage support..
    }


    $(document).ready(function(){
      $.get('list.php',function(data){
        comics = data.split("\n").sort();
        comics.forEach(function(comic){
          if(comic != "" && comic != ".php"){
            var x = "";
            if(read != null){
              read.forEach(function(l){
                if(l == comic){
                  x = "read";
                }
              });
            }
            $("#mainlist").append('<li class="list-group-item '+x+'">'+comic+'</li>');
          }
        });
      });

      $("#mainlist").on("click","li",function(){
        markRead(this);
        window.location = "read.php?comic=" + this.innerHTML;
      });
    });

    function markRead(item){
      var link = item.innerHTML;
      if (typeof(Storage) !== "undefined") {
        // Code for localStorage/sessionStorage.
        if(read == null){
          read = [link];
        }else{
          read.push(link);
        }
        read = sort(read);

        localStorage.setItem("readComic",JSON.stringify(read));
      } else {
          // Sorry! No Web Storage support..
      }

    }


    function sort(arr) {
      return arr.sort().filter(function(el,i,a) {
          return (i==a.indexOf(el));
      });
    }
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

