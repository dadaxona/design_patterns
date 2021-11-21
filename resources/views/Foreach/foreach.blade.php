<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Foreach</title>
    <style>
        input{
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Mijozni Royhatga Olish</h1>
  
         <hr>

                    <script type="text/javascript">                         
                   
                        function w(){
                             var ekran = document.querySelector('.a').value;
                            document.write("<form action='{{ route('foreach.store')}}' method='POST'>");                
                             for (let i = 0; i < ekran; i++) {                              
                                 document.write("<input type='text' name='name' class='form-control' id='exampleInputPassword1' required>");
                                 document.write("<input type='email' name='email' class='form-control' id='exampleInputPassword1' required>");
                                 document.write("<input type='password' name='password' class='form-control' id='exampleInputPassword1' required>");
                                 document.write("<input type='password' name='confirmpassword' class='form-control' id='exampleInputPassword1' required><br>");
                             }
                            document.write("<button type='submit' class='btn btn-primary'>Save</button>");
                            document.write("</form>");

                        }
                            
                    </script>
                   
             
            <hr>
           <button onclick="w()" class="btn btn-success">Dobovit</button>
            <input type="text" name="" class="a">
      
            <br>
     
             
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
                        <td><a href="{{ route('oop.show',$item->id)}}"><button class="btn btn-primary">Edit</button></a></td>
                        <td>  
                            <form method="post" class="delete_form" action="{{ route('oop.destroy',$item->id)}}">
                                @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delet</button>
                            
                            </form>
                        </td>  
                       
                    </tr>
                   
                @endforeach           
            </tbody>
        </table>        

</div>
</body>
</html>