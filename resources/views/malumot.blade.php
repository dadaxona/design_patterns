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
    <style>
        .a{
            margin-top: 3px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <br>
    <div class="container">
        <a href="{{ route('clients.index')}}" class="btn btn-primary">Bosh Saxifa</a>
     
    </div>
    
    <div class="container">
        <h1>Mijozni Malumotlarini Izlash</h1>
        <form action="{{ route('search2')}}" method="GET" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" name="query"
                    placeholder="Ismini kiriting"> <span class="input-group-btn">
                    <button type="submit" class="btn btn-info">
                        <span class="glyphicon glyphicon-search">Kidirish</span>
                    </button>
                </span>
            </div>
        </form>
        </div>
        <br>
  

    <div class="container">
        @if (isset($a))
        <table class="table table-dark table-striped">
        <hr>
            <tbody>
            @if (count($a)>0)
               @foreach ($a as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->idy}}</td>
                        <td>{{$item->full_name}}</td>
                        <td>{{$item->relation_type}}</td>
                        <td>{{$item->work}}</td>
                        <td>{{$item->work_adress}}</td>
                        <td>{{$item->income}}</td>                       
                        <td><a href="{{ route( 'qoshimcha.edit',$item->id) }}"><button class="btn btn-success">Yangilash</button></a></td>
                        <td>  
                            <form method="post" class="delete_form" action="{{ route('clientf.destroy',$item->id)}}">
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
        
      
            @if (isset($b))
            <table class="table table-dark table-striped">
            
                <tbody>
                @if (count($b)>0)
                   @foreach ($b as $items)
                        <tr>
                            <td>{{$items->id}}</td>
                            <td>{{$items->idy}}</td>
                            <td>{{$items->payment_term}}</td>
                            <td>{{$items->mani_famliy_expene}}</td>
                            <td>{{$items->created_by}}</td>
                            <td>{{$items->created_at}}</td>
                            <td>{{$items->created_by_conclusion}}</td>
                            <td>{{$items->monitored_by}}</td>
                            <td>{{$items->monitored_at}}</td>
                            <td>{{$items->committee_member}}</td>
                            <td>{{$items->committee_conslusion}}</td>
                            <td>{{$items->committee_date}}</td>                  
                            {{-- <td><a href="{{ route('clients.edit',$items->id)}}"><button class="btn btn-success">Yangilash</button></a></td> --}}
                            <td><a href="{{ route('qoshimcha.show',$items->id)}}"><button class="btn btn-primary">Praduct Yangilash</button></a></td>
                             {{-- <td><a href="{{ route('clientf.show',$items->id)}}"><button class="btn btn-info">Qoshimcha</button></a></td> --}}
                            <td>  
                                <form method="post" class="delete_form" action="{{ route('deals.destroy',$items->id)}}">
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
                {{ $b->links() }}
            @endif        
          
</div>
</body>
</html>