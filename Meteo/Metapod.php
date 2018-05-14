<!DOCTYPE html>
<html>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <input type="text" value="" id="citta"/><br><br>
  <input type="submit" value="submit" id="btn"/>
  <script>
  $(document).ready(function(){
    $('#btn').click(function(){
      var city=$("#citta").val();
      $.getJSON('http://api.openweathermap.org/data/2.5/weather' , {'q':city, 'APPID':'523e1e8780ed3cac8dc58b77d9055268'}, function(data){
        $("p").empty();
        $("p").append("Weather main: " + data.weather[0].main);
      })
    });
  });
  </script>

  <body>
    
    <p></p>
    
  </body>
</html>