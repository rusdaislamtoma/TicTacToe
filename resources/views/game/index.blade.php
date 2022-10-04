<!DOCTYPE html>
<!-- Created By CodingNepal - www.youtube.com/codingnepal || www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tic Tac Toe Game</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    @include('game._styles')
</head>
<body>
  <div class="container text-center">
    <h2 class="mt-5 text-primary">Tic Tac Toe Game</h2>
    <form action="game_start" method="get">
        @include('game._validation_messages')
        <div class="row mt-5">
          <div class="col-sm-3">
            <input class="form-control" type="text" name="player1" placeholder="Player 1 Name">
          </div>
           <div class="col-sm-3">
            <input class="form-control" type="text" name="player2" placeholder="Player 2 Name">
          </div>
          <div class="col-sm-3">
            <input class="form-control" type="number" name="board_length" placeholder="Board Length">
          </div>
          <div class="col-sm-1">
            <button type="submit" class="btn btn-rounded btn-primary">Submit</button>
          </div>
        </div> 
    </form>
 
  </div>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>