<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>  <title>Ceckbosk</title>
  
</head>
<body>
 <div class="container">
     <div class="row">
        <table class="table table-dark table-hover">
            <thead>
                <div>
                  
                </div>
                <tr>

                    <td><input type="checkbox" id="chkCheckAll"></td>
                    <td>ID</td>
                    <td>NAME</td>
                    <td>EMAIL</td>
                    <td>PASSWORD</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($a as $b)                   
                    <tr>
                        <td><input type="checkbox" name="ids" class="checkBoxClass" value="{{$b->id}}"></td>
                        <td>{{$b->id}}</td>
                        <td>{{$b->name}}</td>
                        <td>{{$b->email}}</td>
                        <td>{{$b->password}}</td>
                    </tr>                                
                @endforeach 
            </tbody>  
        </table>
        {{ $a->links() }}
     </div>
 </div>
<script>
    // $(function(e){
    //     $("#chkCheckAll").click(function(){
    //         $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    //     });
    //     $("#delete").click(function(e){
    //         e.preventDefault();
    //         var allids = [];
    //         $("input:checkbox[name=ids]:checked").each(function(){
    //             allids.push($(this).val());
    //         });

    //             $.ajax([
    //             url: "{{route('check')}}",
    //             type: "DELETE",
    //             data:{
    //                 _token:$("input[name=_token]").val(),
    //                 ids:allids
    //             },
    //             success:function(response){
    //                 $.each(allids,function(key,vsl){
    //                     $("#sid"+val).remove();
    //                 })
    //             }
    //         ]);
    //     });

    // });
</script>

</body>
</html>