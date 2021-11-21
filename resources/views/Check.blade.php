<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Mijozni Royhatga Olish</h1>
  
         <hr>
        <div class="row">  
       
          <form action="{{ route('chesk.store')}}" method="POST">
              @csrf
              <div class="row">
                  <div class="col-6">
                   
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Name</label>
                          <input type="text" name="name" class="form-control" id="exampleInputPassword1" required>
                      </div>
                    <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Email</label>
                          <input type="text" name="email" class="form-control" id="exampleInputPassword1" required>
                    </div>
            
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="text" name="password" class="form-control" id="exampleInputPassword1" required>
                 
                </div>
            
              <button type="submit" class="btn btn-primary">Save</button>
            </form>    
         
        </div>
        <hr>
    </div>
    <div class="container">
       
        <table class="table table-dark table-striped">
        
            <tbody>
           
               @foreach ($items as $item)
                    <tr>
                        <td>{{$item->id}}</td>       
                        <td>{{$item->name}}</td>       
                        <td>{{$item->email}}</td>       
                        <td>{{$item->password}}</td>
                        <td><a href="{{ route('chesk.show',$item->id)}}"><button class="btn btn-primary">Edit</button></a></td>
                        <td>  
                            <form method="post" class="delete_form" action="{{ route('chesk.destroy',$item->id)}}">
                                @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delet</button>
                            
                            </form>
                        </td>  
                       
                    </tr>
                   
                @endforeach    
               
                
            
            </tbody>
            </table>
            {{ $items->links() }}
        

</div>
</body>
</html>