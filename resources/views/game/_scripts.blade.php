<script type="text/javascript">
	const cellElements = document.querySelectorAll(".game-board .cell");
	const player1 = document.querySelector(".players .player1");
	const player2 = document.querySelector(".players .player2");
	const boardLength = document.querySelector(".players .boardLength");
	const result = document.querySelector(".result");
	const result_text = document.querySelector(".result h1");
	const restart_btn = document.querySelector(".result button");


	let playerO = player1.innerText;
	playerO = playerO[0].split('');

	let playerX = player2.innerText;
	playerX = playerX[0].split('');

	let toggleTurn;
	if(Math.random() > .5){
        toggleTurn = true;
        player1.classList.add("active");
	    player2.classList.remove("active");

	}else{
        toggleTurn = false;
        player2.classList.add("active");
	    player1.classList.remove("active");
	}
	cellElements.forEach(cell=>{
	    cell.onclick=()=>{
	      let currentPlayer = toggleTurn ? playerO : playerX;
	        cell.classList.add("disabled");
	        addInCell(cell, currentPlayer);

	        if(winnerCheck(currentPlayer)){
	            // console.log(currentPlayer+" WINNER");
	            addInactive();
	            result_text.innerText = currentPlayer + " Win the Game";

	        }else if(isDraw()){
	            addInactive();
	            result_text.innerText = "It is a Tie!";
	        }else{
	            swapPlayer();
	        }

	        
	    }
	});

	function winnerCheck(currentPlayer){
		//console.log(boardLength.innerText);
		const winningConditions = conditionCheckingFunction(boardLength.innerText);
		
		return winningConditions.some(conditon=>{
	        //console.log(conditon);
	    return conditon.every(index=>{
	        //   console.log(index);
	        //   console.log(cellElements[index].classList.contains(currentPlayer));
	           return cellElements[index].classList.contains(currentPlayer);
	        });
	    })
	}

	function isDraw(){
	    return [...cellElements].every(cell=>{
	        return cell.classList.contains(playerX) || cell.classList.contains(playerO);
	    })
	}

	function conditionCheckingFunction(boardLength){
		
		if(boardLength == 3){
			const WINNING_CONDITIONS = [
			    [0, 1, 2],
			    [3, 4, 5],
			    [6, 7, 8],
			    [0, 3, 6],
			    [1, 4, 7],
			    [2, 5, 8],
			    [0, 4, 8],
			    [2, 4, 6],
			];
		    return WINNING_CONDITIONS;  

		}else if(boardLength == 4){
            const WINNING_CONDITIONS = [
			    [0, 1, 2, 3],
			    [4, 5, 6, 7],
			    [8, 9, 10, 11],
			    [12,13,14, 15],
			    [0, 4, 8, 12],
			    [1, 5, 9, 13],
			    [2, 6, 10, 14],
			    [3, 7, 11, 15],
			    [0, 5, 10, 15],
			    [3, 6, 9, 12],
			  
			];
			return WINNING_CONDITIONS; 

		}else if(boardLength == 5){
            const WINNING_CONDITIONS = [
			    [0, 1, 2, 3, 4],
			    [5, 6, 7, 8, 9],
			    [10, 11, 12, 13, 14],
			    [15, 16, 17, 18, 19],
			    [20, 21, 22, 23, 24],
			    [0, 5, 10, 15, 20],
			    [1, 6, 11, 16, 21],
			    [2, 7, 12, 17, 22],
			    [3, 8, 13, 18, 23],
			    [4, 9, 14, 19, 24],
			    [0, 6, 12, 18, 24],
			    [4, 8, 12, 16, 20],
			  
			];
			return WINNING_CONDITIONS;

		}else if(boardLength == 6){
            const WINNING_CONDITIONS = [
			    [0, 1, 2, 3, 4, 5],
			    [6, 7, 8, 9, 10, 11],
			    [12, 13, 14, 15, 16, 17],
			    [18, 19, 20, 21, 22, 23],
			    [24, 25, 26, 27, 28, 29],
			    [30, 31, 32, 33, 34, 35],
			    [0, 6, 12, 18, 24, 30],
			    [1, 7, 13, 19, 25, 31],
			    [2, 8, 14, 20, 26, 32],
			    [3, 9, 15, 21, 27, 33],
			    [4, 10, 16, 22, 28, 34],
			    [5, 11, 17, 23, 29, 35],
			    [0, 7, 14, 21, 28, 35],
			    [5, 10, 15, 20, 25, 30],
			];
			return WINNING_CONDITIONS;

		}else if(boardLength == 7){
            const WINNING_CONDITIONS = [
			    [0, 1, 2, 3, 4, 5, 6],
			    [7, 8, 9, 10, 11, 12, 13],
			    [14, 15, 16, 17, 18, 19, 20],
			    [21, 22, 23, 24, 25, 26, 27],
			    [28, 29, 30, 31, 32, 33, 34],
			    [35, 36, 37, 38, 39, 40, 41],
			    [42, 43, 44, 45, 46, 47, 48],
			    [0, 7, 14, 21, 28, 35, 42],
			    [1, 8, 15, 22, 29, 36, 43],
			    [2, 9, 16, 23, 30, 37, 44],
			    [3, 10, 17, 24, 31, 38, 45],
			    [4, 11, 18, 25, 32, 39, 46],
			    [5, 12, 19, 26, 33, 40, 47],
			    [6, 13, 20, 27, 34, 41, 48],
			    [0, 8, 16, 24, 32, 40, 48],
			    [6, 12, 18, 24, 30, 36, 42],
			];
			return WINNING_CONDITIONS;

		}else if(boardLength == 8){

            const WINNING_CONDITIONS = [
			    [0, 1, 2, 3, 4, 5, 6, 7],
			    [8, 9, 10, 11, 12, 13, 14, 15],
			    [16, 17, 18, 19, 20, 21, 22, 23],
			    [24, 25, 26, 27, 28, 29, 30, 31],
			    [32, 33, 34, 35, 36, 37, 38, 39],
			    [40, 41, 42, 43, 44, 45, 46, 47],
			    [48, 49, 50, 51, 52, 53, 54, 55],
			    [56, 57, 58, 59, 60, 61, 62, 63], 
			    [0, 8, 16, 24, 32, 40, 48, 56],
			    [1, 9, 17, 25, 33, 41, 49, 57],
			    [2, 10, 18, 26, 34, 42, 50, 58],
			    [3, 11, 19, 27, 35, 43, 51, 59],
			    [4, 12, 20, 28, 36, 44, 52, 60],
			    [5, 13, 21, 29, 37, 45, 53, 61],
			    [6, 14, 22, 30, 38, 46, 54, 62],
			    [7, 15, 23, 31, 39, 47, 55, 63],
			    [0, 9, 18, 27, 36, 45, 54, 63],
			    [7, 14, 21, 28, 35, 42, 49, 56],

			];
			return WINNING_CONDITIONS;

		}else if(boardLength == 9){
			
            const WINNING_CONDITIONS = [
			    [0, 1, 2, 3, 4, 5, 6, 7, 8],
			    [9, 10, 11, 12, 13, 14, 15, 16, 17],
			    [18, 19, 20, 21, 22, 23, 24, 25, 26],
			    [27, 28, 29, 30, 31, 32, 33, 34, 35],
			    [36, 37, 38, 39, 40, 41, 42, 43, 44],
			    [45, 46, 47, 48, 49, 50, 51, 52, 53],
			    [54, 55, 56, 57, 58, 59, 60, 61, 62],
			    [63, 64, 65, 66, 67, 68, 69, 70, 71],
			    [72, 73, 74, 75, 76, 77, 78, 79, 80],
			    [0, 9, 18, 27, 36, 45, 54, 63, 72],
			    [1, 10, 19, 28, 37, 46, 55, 64, 73],
			    [2, 11, 20, 29, 38, 47, 56, 65, 74],
			    [3, 12, 21, 30, 39, 48, 57, 66, 75],
			    [4, 13, 22, 31, 40, 49, 58, 67, 76],
			    [5, 14, 23, 32, 41, 50, 59, 68, 77],
			    [6, 15, 24, 33, 42, 51, 60, 69, 78],
			    [7, 16, 25, 34, 43, 52, 61, 70, 79],
			    [8, 17, 26, 35, 44, 53, 62, 71, 80],
			    [0, 10, 20, 30, 40, 50, 60, 70, 80],
			    [8, 16, 24, 32, 40, 48, 56, 64, 72],
			  

			];
			return WINNING_CONDITIONS;
		}
		else if(boardLength == 10){
			
            const WINNING_CONDITIONS = [
			    [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
			    [10, 11, 12, 13, 14, 15, 16, 17, 18, 19],
			    [20, 21, 22, 23, 24, 25, 26, 27, 28, 29],
			    [30, 31, 32, 33, 34, 35, 36, 37, 38, 39],
			    [40, 41, 42, 43, 44, 45, 46, 47, 48, 49],
			    [50, 51, 52, 53, 54, 55, 56, 57, 58, 59],
			    [60, 61, 62, 63, 64, 65, 66, 67, 68, 69],
			    [70, 71, 72, 73, 74, 75, 76, 77, 78, 79],
			    [80, 81, 82, 83, 84, 85, 86, 87, 88, 89],
			    [90, 91, 92, 93, 94, 95, 96, 97, 98, 99],
			    [0, 10, 20, 30, 40, 50, 60, 70, 80, 90],
			    [1, 11, 21, 31, 41, 51, 61, 71, 81, 91],
			    [2, 12, 22, 32, 42, 52, 62, 72, 82, 92],
			    [3, 13, 23, 33, 43, 53, 63, 73, 83, 93],
			    [4, 14, 24, 34, 44, 54, 64, 74, 84, 94],
			    [5, 15, 25, 35, 45, 55, 65, 75, 85, 95],
			    [6, 16, 26, 36, 46, 56, 66, 76, 86, 96],
			    [7, 17, 27, 37, 47, 57, 67, 77, 87, 97],
			    [8, 18, 28, 38, 48, 58, 68, 78, 88, 98],
			    [9, 19, 29, 39, 49, 59, 69, 79, 89, 99],
			    [0, 11, 22, 33, 44, 55, 66, 77, 88, 99],
			    [9, 18, 27, 36, 45, 54, 56, 72, 81, 90],
			];
			return WINNING_CONDITIONS;
		}
		else{
			const WINNING_CONDITIONS = [];
			return WINNING_CONDITIONS;
		}
	
	}



	function swapPlayer(){
	    toggleTurn = !toggleTurn;
	    if(toggleTurn){
	        player1.classList.add("active");
	        player2.classList.remove("active");
	    }else{
	        player2.classList.add("active");
	        player1.classList.remove("active");
	    }
	}

	function addInCell(cell, currentPlayer){
	    cell.innerHTML = currentPlayer;
	    cell.classList.add(currentPlayer);
	}

	function addInactive(){
	    result.classList.remove("inactive");
	}

	restart_btn.onclick=()=>{
	    location.reload();
	}
</script>