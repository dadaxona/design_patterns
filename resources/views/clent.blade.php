<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Clent.php</title>
    <style>
        .table{
            margin-top: 6px
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Mijozni Topish</h1>
        <form action="{{ route('search')}}" method="GET" role="search">
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
      <h1>Mijozni Royhatga Olish</h1>
      <hr>
       <a href="{{ route('clients.index')}}" class="btn btn-primary">Bosh Saxifa</a>
       <a href="{{ route('deals.index')}}" class="btn btn-info">Praduct</a>
       <hr>
      <div class="row">  
      
        <form action="{{ route('clients.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Mijoz ismi</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                     
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Turmush o'rtog'ini ismi</label>
                        <input type="text" name="spouse" class="form-control" id="exampleInputPassword1" required>
                      
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Ish ishjoyi</label>
                        <input type="text" name="spouse_work" class="form-control" id="exampleInputPassword1" required>
                      
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Bolalarni soni</label>
                        <input type="number" name="children_count" class="form-control" id="exampleInputPassword1" required>
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Oilaviy a'zolar soni</label>
                        <input type="number" name="famliy_member_count" class="form-control" id="exampleInputPassword1" required>
                       
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Oilasining umumiy daromadi</label>
                        <input type="number" name="income_generators_count" class="form-control" id="exampleInputPassword1" required>
                     
                    </div>
                    
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Pasport seriyasi</label>
                <input type="text" name="pasport_series" class="form-control" id="exampleInputPassword1" required>
               
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">check_id</label>
                <input type="number" name="check_id" class="form-control" id="exampleInputPassword1" required>
               
              </div>
          
            <button type="submit" class="btn btn-primary">Save</button>
          </form>    
       
      </div>
      <hr>
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
                        <td>{{$item->check_id}}</td>
                        <td><a href="{{ route('clients.edit',$item->id)}}"><button class="btn btn-success">Yangilash</button></a></td>
                        <td><a href="{{ route('clients.show',$item->id)}}"><button class="btn btn-primary">Umumiy Malumot</button></a></td>
                        <td><a href="{{ route('clientf.show',$item->id)}}"><button class="btn btn-info">Qoshimcha</button></a></td>
                        <td>  
                            <form method="post" class="delete_form" action="{{ route('clients.destroy',$item->id)}}">
                                @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delet</button>
                            
                            </form>
                        </td>               
                    </tr>
                   
                @endforeach    
            @else
                <h1>Malumot topilmadi</h1>
            @endif       
            </tbody>
            </table>
            {{ $a->links() }}
        @endif        

</div>

    
</body>
</html>