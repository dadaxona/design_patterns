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
         <a href="{{ route('oopproject.index')}}" class="btn btn-primary">Bosh Saxifa</a>
         <hr>
        <div class="row">  
        
          <form action="{{ route('oopproject.update',$item->id) }}" method="POST">                       
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
                          <label for="exampleInputPassword1" class="form-label">Email</label>
                          <input type="text" name="email" class="form-control" value="{{$item->email}}">
                        
                      </div>
                  
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                    
                        <input type="text" name="password" class="form-control" value="{{$item->password}}">                 
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        
                            <input type="text" name="confirmpassword" class="form-control">                 
                        </div>
                    </div>
              </div>
            
              <button type="submit" class="btn btn-success">Update</button>
            </form>    
         
        </div>
    </div>
</body>
</html>