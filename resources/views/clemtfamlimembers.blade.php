<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
    <style>
        .table{
            margin-top: 6px
        }
    </style>
</head>
<body>
<br>
  <div class="container">
      <h1>Mijozning Qoshimcha Malumoti</h1>
      <hr>
       <a href="{{ route('clients.index')}}" class="btn btn-primary">Bosh Saxifa</a>
       <hr>
      <div class="row">        
        <form action="{{ route('clientf.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">          
                            
                            <input type="hidden" name="idy" value="{{$item->id}}">                                         
                        
                        <label for="exampleInputEmail1" class="form-label">Mijoznig tegishli shaxs ishmi</label>
                        <input type="text" name="full_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                     
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mijozga aloqasi</label>
                        <input type="text" name="relation_type" class="form-control" id="exampleInputPassword1" required>
                      
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kasbi</label>
                        <input type="text" name="work" class="form-control" id="exampleInputPassword1" required>
                      
                        </div>
                    
                    
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Ish_manzili </label>
                        <input type="text" name="work_adress" class="form-control" id="exampleInputPassword1" required>
                        
                    </div>
                </div>
                    <div>
                        <label for="exampleInputPassword1" class="form-label">Daromad </label>
                        <input type="number" name="income" class="form-control" id="exampleInputPassword1" required>
                    </div>
            </div>
                   
            
          
            <button type="submit" class="btn btn-primary">Save</button>
          </form>    
       
          
      </div>
  </div>
  <div class="container">
      <div class="row">
          <div class="co-4">
              <h2>Ismi: {{$item->name}}</h2>
          </div>
       <div class="col-8">
        <table class="table table-dark table-striped">
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->spouse}}</td>
                <td>{{$item->spouse_work}}</td>
                <td>{{$item->children_count}}</td>
                <td>{{$item->famliy_member_count}}</td>
                <td>{{$item->income_generators_count}}</td>
                <td>{{$item->pasport_series}}</td>            
            </tr>
          </table>
       </div>
        
      </div>
  </div>
  


    
</body>
</html>