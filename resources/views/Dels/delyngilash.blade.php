<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>delyangilash</title>
</head>
<body>
    <br>
    <div class="container">
   
        <a href="{{ route('clients.index')}}" class="btn btn-primary">Bosh Saxifa</a>
        <a href="{{ route('deals.index')}}"><button class="btn btn-info">Praduct</button></a>

   
   <br><br>
      <h1>Mijozni Praductlarni Yangilash</h1>
      <hr>
      
      
    <div class="row">  
      
        <form action="{{ route('deals.update',$a->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                
                    <input type="hidden" name="id" id="" value="{{$a->id}}">
                    <input type="hidden" name="idy" id="" value="{{$a->idy}}">
               <div class="col-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mijoz Tolov Muddati</label>
                    <input type="date" name="payment_term" class="form-control" required>
                                 
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jami Harajati</label>
                    <input type="text" name="mani_famliy_expene" class="form-control" value="{{$a->mani_famliy_expene}}">
                  
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Kim Tomondan Yaratilgan</label>
                    <input type="text" name="created_by" class="form-control" value="{{$a->created_by}}">
                  
                    </div>
                
                
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Yaratilgan Vaqti</label>
                    <input type="date" name="created_at" class="form-control" required>
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Kimni Xulosasi Bilan Yaratilgan</label>
                    <input type="text" name="created_by_conclusion" class="form-control" value="{{$a->created_by_conclusion}}">
                   
                </div>
               </div>
               <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kim Tomondan Nazorat Qilinadi</label>
                        <input type="text" name="monitored_by" class="form-control" value="{{$a->monitored_by}}">
                     
                    </div>            
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kim Tomonidan Boshkariladi</label>
                        <input type="text" name="monitored_at" class="form-control" value="{{$a->monitored_at}}">
                    
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Qomita Azosi</label>
                        <input type="text" name="committee_member" class="form-control" value="{{$a->committee_member}}">
                    
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Qomita Xulosasi</label>
                        <input type="text" name="committee_conslusion" class="form-control" value="{{$a->committee_conslusion}}">
                    
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Xulosa Chiqqan Vaqt</label>
                        <input type="date" name="committee_date" class="form-control" required>
                    
                    </div>
                    
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Yangilash</button>
            </div>
          </form>       
      </div>      
  </div>
</body>
</html>