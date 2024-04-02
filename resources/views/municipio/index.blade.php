<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>listado comunas</title>
</head>


<body>
  <div class="container">
    <h1>listado comunas</h1>
    //
    <table class="table">
      <thead>
        <tr>
          <th scope="col">code</th>
          <th scope="col">commune</th>
          <th scope="col">municipality</th>
          <th scope="col">actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($municipios as $municipio)
        <tr>
          <th scope="row">{{ $municipio->muni_codi }}</th>
          <td>{{ $municipio->muni_nomb }}</td>
          <td>{{ $municipio->depa_nomb }}</td>
          <td>
            //
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>