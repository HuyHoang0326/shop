<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">name-</th>
            <th scope="col">price-</th> 
            <th scope="col">quantity-</th>
            <th scope="col">total</th>
          </tr>
        </thead>
        <tbody>
              @php
                $total = 0;
              @endphp
            @foreach ($id_product as $index => $value)
              @php
                  $total += $price[$index]*$quantity[$index];
              @endphp
              <tr>
                <td>{{ $name[$index] }}</td>
                <td>{{ $price[$index] }}</td>
                <td>{{ $quantity[$index] }}</td>
              </tr>
            @endforeach
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td>{{ $total }}</td>
            </tr>
        </tbody>
      </table>
</body>
</html>