
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>imports</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   
</head>
<body>
    <div class="table-responsive container-sm">

    <form onLoad= "{{ route ('selectedimports') }}">
    <table class="table table-striped caption-top table-md">
    <caption>List of imports with condition applied</caption>
       <thead>
        <tr>
        @foreach ($columns as $key=>$field)
       
            <td>{{$field}}</td>
       
        @endforeach
        </tr>
        </thead>

        <tbody>

            @foreach ($imports as $array)
                <tr> 
                        @foreach ($array[0] as $key1 => $value)
                        
                                 @foreach ($array[2] as $value1)
                        
                                         @if($key1 == $value1[0])
                      
                                            <br>
                                                @if ($value == $value1[3])
                                                  <td style="background-color:green">{{$value}}</td>
                                                @else
                                        
                                                 <td style="background-color:red">{{$value}} <br> it has to be {{$value1[3]}}</td>
                                               @endif
                                 
                                         @else
                                              <td>{{$value}}</td>
                                         @endif
                                @endforeach 
                        @endforeach 

                </tr>
            @endforeach 
        </tbody>
     
</form>
</div>
</body>
</html>