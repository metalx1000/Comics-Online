<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
    body,html {
      height: ;
    }

    body {
      padding-top: 0px;
    }

    .wide {
      width:100%;
      height:100%;
      height:calc(100% - 1px);
      background-image:url('https://2.bp.blogspot.com/21xJOH88qSr4AwjrrzGVvfaxq2QxYofbubeB_YJDnM6vrh8v8pjCvGkx0xuWfH7Xt33p3B5RRNBD=s0');
      background-size:cover;
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
</head>
<body>

<div class="container wide">
  <div class="header">
    <h3 id="page">0</h3>
  </div>
  <div class="btn-group btn-group-justified footer">
    <a href="#" class="btn btn-primary">Previous</a>
    <a href="#" class="btn btn-primary">Next</a>
  </div>
  <img src="https://2.bp.blogspot.com/21xJOH88qSr4AwjrrzGVvfaxq2QxYofbubeB_YJDnM6vrh8v8pjCvGkx0xuWfH7Xt33p3B5RRNBD=s0" style="visibility: hidden;" />
</div>

</body>
</html>


