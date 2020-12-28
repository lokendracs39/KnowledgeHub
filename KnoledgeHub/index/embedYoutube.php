<html>
    <head>
        <title></title>
    </head>
    <body>
          <form method="post">
            <input id = "vid" name="video"/>
            <br>
            <input type="submit" name="submit">
          </form>

          <?php
            if(isset($_POST['submit'])){
              $text = $_POST['video'];
              echo  "video link " .$text;

              $text = preg_replace("#.*youtube\.com/watch\?v=#" , "" ,$text);
              echo "<br>" ."The vedio id " .$text ."<br>";

              $text = '<iframe width="400" height="250" src="https://www.youtube.com/embed/'.$text.'"
                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>';

              echo $text;
            }
          ?>
    </body>
</html>
