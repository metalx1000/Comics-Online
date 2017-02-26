<!DOCTYPE htmDl>
<html lang="en">
<head>
  <title>Comic Reader</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- favicon -->
  <?php include('fav.php');?>
<!-- end favicon -->

  <style>
    body,html {
      height: ;
    }

    body {
      padding-top: 0px;
    }

    #preload{
      display:none;
    }
    .wide {
      width:100%;
      height:100%;
      height:calc(100% - 1px);
      //background-image:url('placeholder.png');
      background-size:cover;
      padding:0px;
    }

    .wide img {
      width:100%;
    }

    .footer
    {
        position: fixed;
        bottom: 0px;
    }

    .header,h3{
      position: fixed;
      top:0px;
      margin:0px;
      font-size:25px;
    }

    .btn-group{
      padding-right:25px;
    }
  </style>

  <script>
    var pages;
    var page=0;

    $(document).ready(function(){
      //get the pages
      var comic = getVar("comic");
      $.get("comics/"+comic,function(data){
        pages = data.split("\n");
        pages = cleanArray(pages);
      }).done(function(){
        $("#comicPage").attr('src',pages[page]);
        //$(".wide").css('background-image','url('+pages[page]+')');
        pageCount();
      });
      
      //control the pages
      $("#next").click(function(){
        page++;
        flip();
      });

      $("#prev").click(function(){
        page--;
        flip();
      });

      $("#jumpb").click(function(){
        page-=10;
        flip();
      });

      $("#jumpf").click(function(){
        page+=10;
        flip();
      });
    });


    function flip(){
      if(page >= pages.length){
        page = pages.length - 1;
      }else if (page <= 0){
        page = 0;
      }

      $("#comicPage").attr('src',pages[page]);
      $("#preload").attr('src',pages[page+1]);
      //$(".wide").css('background-image','url('+pages[page]+')'); 
      $("html, body").animate({ scrollTop: "0px", scrollLeft: "0px" });
    
      pageCount();
    }

    function pageCount(){
      var total = pages.length - 1;
      $("#page").html(page + " of "+total);
    }

    function getVar(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    // Will remove all falsy values: undefined, null, 0, false, NaN and "" (empty string)
    function cleanArray(actual) {
      var newArray = new Array();
      for (var i = 0; i < actual.length; i++) {
        if (actual[i]) {
          newArray.push(actual[i]);
        }
      }
      return newArray;
    }
  </script>
</head>
<body>

<div class="container wide">
  <div class="header">
    <h3 id="page">0</h3>
  </div>
  <div class="btn-group btn-group-justified footer">
    <a id="prev" class="btn btn-primary">Previous</a>
    <a id="jumpb" class="btn btn-primary">Jump -10</a>
    <a id="jumpf" class="btn btn-primary">Jump 10</a>
    <a id="next" class="btn btn-primary">Next</a>
  </div>
  <img id="comicPage" src="placeholder.png" />
  <img id="preload">
</div>

</body>
</html>


