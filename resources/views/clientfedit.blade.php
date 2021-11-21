<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>clemtfamlimembers</title>
</head>
<body>
    <div class="container">
        <h1>Malumotlarni Ozgartirish</h1>
        <hr>
         <a href="{{ route('clients.index')}}" class="btn btn-primary">Bosh Saxifa</a>
         <hr>
        <div class="row">  
        
          <form action="{{ route('clientf.update',$item->id) }}" method="POST">                       
              @csrf
              @method('PUT')  
              <div class="row">
                  <div class="col-6">
                    <input type="hidden" name="id" value="{{$item->id}}">                    
                    <input type="hidden" name="idy" value="{{$item->idy}}">                    
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Ismi</label>
                          <input type="text" name="full_name" class="form-control" value="{{$item->full_name}}">
                                       
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Yaqinligi</label>
                          <input type="text" name="relation_type" class="form-control" value="{{$item->relation_type}}">
                        
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Ish Kasbi</label>
                          <input type="text" name="work" class="form-control" value="{{$item->work}}">
                        
                          </div>
                      </div>
                      <div class="col-6">
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Ish Manzili</label>
                          <input type="text" name="work_adress" class="form-control" value="{{$item->work_adress}}">
                          
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">OYligi</label>
                          <input type="number" name="income" class="form-control" value="{{$item->income}}">
                         
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