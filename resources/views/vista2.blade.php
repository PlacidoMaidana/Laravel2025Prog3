<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>asdfasdf</th>
                <th>asdfsdf</th>
                <th>sasasfd</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row"></td>
                    <td>asdfasd</td>
                    <td>asdfas</td>
                </tr>
                <tr>
                    <td scope="row"></td>
                    <td>asdfas</td>
                    <td>asdfsdf</td>
                </tr>
            </tbody>
    </table>

    <h1>Buenas noches {{$nombre}}</h1>

    @php
        $i=0;
    @endphp
    
    @while ($i<10)
    @if ($i%2==0)
    <h1>Buenas noches señor {{$nombre}}</h1>
    @else
    <h1>Buenas noches {{$nombre}}</h1>

    @endif
  
    @php
        $i++;
    @endphp

    @endwhile


    @for ($i = 0; $i < 10; $i++)
    <h1>otra forma {{ $nombre }}</h1>
    @endfor


    





</body>
</html>