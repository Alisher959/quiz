<!DOCTYPE html>
<html>

<head>
    <title>Test project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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