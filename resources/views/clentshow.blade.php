<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Clent update</title>
</head>
<body>
    <div class="container">
        <h1>Malumotlarni Ozgartirish</h1>
        <hr>
         <a href="{{ route('clients.index')}}" class="btn btn-primary">Bosh Saxifa</a>
         <hr>
        <div class="row">  
        
          <form action="{{ route('clients.update',$item->id) }}" method="POST">                       
              @csrf
              @method('PUT')  
              <div class="row">
                  <div class="col-6">
                    <input type="hidden" name="id" value="{{$item->id}}">
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Mijoz ismi</label>
                          <input type="text" name="name" class="form-control" value="{{$item->name}}">
                                       
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Turmush o'rtog'ini ismi</label>
                          <input type="text" name="spouse" class="form-control" value="{{$item->spouse}}">
                        
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Ish ishjoyi</label>
                          <input type="text" name="spouse_work" class="form-control" value="{{$item->spouse_work}}">
                        
                          </div>
                      </div>
                      <div class="col-6">
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Bolalarni soni</label>
                          <input type="number" name="children_count" class="form-control" value="{{$item->children_count}}">
                          
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Oilaviy a'zolar soni</label>
                          <input type="number" name="famliy_member_count" class="form-control" value="{{$item->famliy_member_count}}">
                         
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Oilasining umumiy daromadi</label>
                          <input type="number" name="income_generators_count" class="form-control" value="{{$item->income_generators_count}}">
                       
                      </div>
                  </div>
                  {{-- <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Pasport seriyasi</label>
                   
                    <input type="text" name="pasport_series" class="form-control" value="{{$item->pasport_series}}">                 
                </div> --}}
                </div>
              
            
              <button type="submit" class="btn btn-success">Update</button>
            </form>    
         
        </div>
    </div>
</body>
</html>