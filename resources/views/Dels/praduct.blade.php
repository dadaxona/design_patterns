<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>praduct.php</title>
    <style>
        .table{
            margin-top: 6px
        }
    </style>
</head>
<body>
    <br>
    <div class="container">
        <a href="{{ route('clients.index')}}" class="btn btn-primary">Bosh Saxifa</a>
        <h1>Mijozni Malumotlarini Izlash</h1>
        <form action="{{ route('search25')}}" method="GET" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" name="query"
                    placeholder="Passport seryani kiriting"> <span class="input-group-btn">
                    <button type="submit" class="btn btn-info">
                        <span class="glyphicon glyphicon-search">Kidirish</span>
                    </button>
                </span>
            </div>
        </form>
        </div>
        
<hr>

  <div class="container">
        @if (isset($a))
        <table class="table table-dark table-striped">
        
            <tbody>
            @if (count($a)>0)
               @foreach ($a as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->spouse}}</td>
                        <td>{{$item->spouse_work}}</td>
                        <td>{{$item->children_count}}</td>
                        <td>{{$item->famliy_member_count}}</td>
                        <td>{{$item->income_generators_count}}</td>
                        <td>{{$item->pasport_series}}</td>
                        {{-- <td><a href="{{ route('clients.edit',$item->id)}}"><button class="btn btn-success">Yangilash</button></a></td> --}}
                        <td><a href="{{ route('deals.show',$item->id)}}"><button class="btn btn-primary">Praduct Kiritish</button></a></td>
                        <td><a href="{{ route('deals.edit',$item->id)}}"><button class="btn btn-info">Praduct Malumotlar</button></a></td>
                        {{-- <td>  
                            <form method="post" class="delete_form" action="{{ route('clients.destroy',$item->id)}}">
                                @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delet</button>
                            
                            </form>
                        </td> --}}
                    </tr>
                   
                @endforeach    
            @else
           
            @endif
                
        
            </tbody>
            </table>
            {{ $a->links() }}
        @endif        

</div>



    
</body>
</html>