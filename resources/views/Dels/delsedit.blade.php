<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>delsedit</title>
</head>
<body>
    <br>
    <div class="container">
  
    <a href="{{ route('clients.index')}}" class="btn btn-primary">Bosh Saxifa</a>
    <a href="{{ route('deals.index')}}" class="btn btn-info">Praduct</a>

    <hr>
    <h1>Mijozni Praductlarini Izlash</h1>
    <form action="{{ route('search3')}}" method="GET" role="search">
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
  <div class="row">
      
    @if (isset($a))
    <table class="table table-dark table-striped">
    
        <tbody>
        @if (count($a)>0)
           @foreach ($a as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->idy}}</td>
                    <td>{{$item->payment_term}}</td>
                    <td>{{$item->mani_famliy_expene}}</td>
                    <td>{{$item->created_by}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->created_by_conclusion}}</td>
                    <td>{{$item->monitored_by}}</td>
                    <td>{{$item->monitored_at}}</td>
                    <td>{{$item->committee_member}}</td>
                    <td>{{$item->committee_conslusion}}</td>
                    <td>{{$item->committee_date}}</td>                  
                    {{-- <td><a href="{{ route('clients.edit',$item->id)}}"><button class="btn btn-success">Yangilash</button></a></td> --}}
                    <td><a href="{{ route('qoshimcha.show',$item->id)}}"><button class="btn btn-primary">Praduct Yangilash</button></a></td>
                     {{-- <td><a href="{{ route('clientf.show',$item->id)}}"><button class="btn btn-info">Qoshimcha</button></a></td> --}}
                    <td>  
                        <form method="post" class="delete_form" action="{{ route('deals.destroy',$item->id)}}">
                            @csrf
                                @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delet</button>
                        
                        </form>
                    </td>  
                </tr>
               
            @endforeach    
        @else
       
        @endif
            
    
        </tbody>
        </table>
        {{ $a->links() }}
    @endif        
  </div>

</div>
</body>
</html>