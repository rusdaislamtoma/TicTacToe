<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic Tac Toe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @include('game._styles')
</head>
<body>
    <h2 class="mt-5 text-primary">Tic Tac Toe Game</h2>
    <div class="players">
        <div><a href="{{ route('game_index') }}" class="btn btn-rounded btn-primary">Back</a></div>
        <div class="player1">{{ $player1 }}'s Turn</div>
        <div class="player2">{{ $player2 }}'s Turn</div>
        <div class="boardLength" style="display: none">{{ $board_length }}</div>
    </div>

    <div class="game-board" style="grid-template-columns: repeat({{ $board_length }}, auto);">
      @for($i=1; $i <= $board_length; $i++)
        @for($j=1; $j <= $board_length; $j++)
          <div class="cell"></div>
        @endfor
      @endfor
    </div>

    <div class="result inactive">
        <h1></h1>
        <button>Restart</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @include('game._scripts')
</body>
</html>