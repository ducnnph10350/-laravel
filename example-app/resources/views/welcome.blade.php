<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
    <button class="btn btn-primary">button</button>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <th>Ten</th>
                <th>Tuoi</th>
                <th>Lop</th>
                <th>MSV</th>
                <th>Anh dai dien</th>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    @if ($student['id'] == 1)
                        <tr>
                            <td>{{$student['name']}}</td>
                            <td>{{$student['age']}}</td>
                            <td>{{$student['class']}}</td>
                            <td>{{$student['id']}}</td>
                            <td><img src="{{$student['avatar']}}" alt="" height="200px"></td>
                        </tr>
                    
                            
                    @else
                        <tr>
                            <td>{{$student['name']}}</td>
                            <td>{{$student['age']}}</td>
                            <td>{{$student['class']}}</td>
                            <td>{{$student['id']}}</td>
                            <td><img src="{{$student['avatar']}}" alt="" height="200px"></td>
                        </tr> 

                    @endif
                    
                @endforeach
                
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>