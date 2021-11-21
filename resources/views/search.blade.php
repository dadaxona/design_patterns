<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="{{ route('search')}}" method="GET" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" name="query"
                    placeholder="Search users"> <span class="input-group-btn">
                    <button type="submit" class="btn btn-info">
                        <span class="glyphicon glyphicon-search">Kidirish</span>
                    </button>
                </span>
            </div>
        </form>
        <br><br><br>
        <hr>
            @if (isset($a))
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                @if (count($a)>0)
                    @foreach ($a as $b)
                        <tr>
                            <td>{{ $b->name }}</td>
                            <td>{{ $b->pasport_series }}</td>
                        </tr>
                    @endforeach
                @else
                    
                @endif
                    
            
                </tbody>
                </table>
            @endif
                    
   
    </div>
</body>
</html>