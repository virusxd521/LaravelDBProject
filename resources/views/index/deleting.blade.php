<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="grid" style="--bs-columns: 4; --bs-gap: 5rem;">
        <div class="row mt-5" style="margin-left:200px;" >
            @foreach($movie as $item)
            <div class="card m-2 col-6 col-md-4"  style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Movie</h5>
                    <p class="card-text">
                        {{$item->name}}
                        <br>
                        ID Number:{{$item->id}}
                    </p>                   
                    <form action="{{ action('MovieController@delete', ['id' => $item->id]) }}" 
                    
                    method="POST">
                    @csrf
                        <button class="btn btn-primary">
                            Delete This Item
                        </button>
                    </form>     

                </div>
            </div>  
            @endforeach
        </div>
    </div>
</body>
</html>