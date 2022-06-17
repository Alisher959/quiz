<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 CRUD with Image Upload Application - ItSolutionStuff.com</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
  
<div class="container">
    @yield('content')
</div>
<script>
        function variant1() {
          const variant1 = document.getElementById('variant_1');
          const variant2 = document.getElementById('variant_2');
          const variant3 = document.getElementById('variant_3');
          const variant4 = document.getElementById('variant_4');
          variant2.setAttribute('name', 'variant_2');
          variant3.setAttribute('name', 'variant_3');
          variant4.setAttribute('name', 'variant_4');
          variant1.setAttribute('name', 'answer');
        }

        function variant2() {
          const variant1 = document.getElementById('variant_1');
          const variant2 = document.getElementById('variant_2');
          const variant3 = document.getElementById('variant_3');
          const variant4 = document.getElementById('variant_4');
          variant1.setAttribute('name', 'variant_1');
          variant3.setAttribute('name', 'variant_3');
          variant4.setAttribute('name', 'variant_4');
          variant2.setAttribute('name', 'answer');
        }

        function variant3() {
          const variant1 = document.getElementById('variant_1');
          const variant2 = document.getElementById('variant_2');
          const variant3 = document.getElementById('variant_3');
          const variant4 = document.getElementById('variant_4');
          variant2.setAttribute('name', 'variant_2');
          variant1.setAttribute('name', 'variant_1');
          variant4.setAttribute('name', 'variant_4');
          variant3.setAttribute('name', 'answer');
        }

        function variant4() {
          const variant1 = document.getElementById('variant_1');
          const variant2 = document.getElementById('variant_2');
          const variant3 = document.getElementById('variant_3');
          const variant4 = document.getElementById('variant_4');
          variant2.setAttribute('name', 'variant_2');
          variant3.setAttribute('name', 'variant_3');
          variant1.setAttribute('name', 'variant_1');
          variant4.setAttribute('name', 'answer');
        }
      </script>

</body>
</html>