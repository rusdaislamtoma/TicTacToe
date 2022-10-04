<style type="text/css">
	*{
    box-sizing: border-box;
	}
	body{
	    margin: 0;
	    padding: 0;
	    display: flex;
	    justify-content: center;
	    align-items: center;
	    flex-direction: column;
	}

	.players{
	    border: 2px solid #0909ad;
	    display: flex;
	    justify-content: center;
	    align-items: center;
	   
	    border-radius: 15px;
	    font-size: 24px;
	    margin-top: 50px;
	}
	.players div{
	    padding: 15px 25px;
	    border-radius: 15px;
	    border: 2px solid #fff;
	    

	}
	.players div.active{
	    background: #0909ad;
	    color: #fff;
	}

	.game-board{
	    margin-top: 50px;
	    display: grid;
	}
	.cell{
	    height: 100px;
	    width: 100px;
	    border: 2px solid #0909ad;
	    font-size: 100px;
	    display: flex;
	    justify-content: center;
	    align-items: center;
	    cursor: pointer;
	    border-radius: 10px;
	}
	.result{
	    position: fixed;
	    top: 0;
	    left: 0;
	    right: 0;
	    bottom: 0;
	    z-index: 99;
	    background: rgba(0,0,0,0.5);
	    display: flex;
	    align-items: center;
	    justify-content: center;
	    flex-direction: column;
	    
	}
	.result h1{
	    color: #fff;
	    font-size: 50px;
	    background: rgba(0,0,100,0.5);
	    padding: 15px 25px;
	}
	.result button{
	    font-size: 36px;
	    background: #0909ad;
	    color: #fff;
	    border-radius: 10px;
	    cursor: pointer;
	    padding: 10px 25px;
	}

	.inactive{
	    display: none;
	}

	.disabled{
	    pointer-events: none;
	}
	input{
		border: 2px solid #0909ad !important;
	}
</style>