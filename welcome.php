<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
 
 <?php include "includs/menu.php"; ?>
    <div class="navbar">
    <h3 class="m-3">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h3>
    <p>
        <a href="reset-password.php" class="btn btn-warning mt-3">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger mt-3">Sign Out of Your Account</a>
    </p>
    </div>
    <div class="game">
            <div class="controls">
                <button>Start</button>
                <button class="restart" onclick="restartGame()">Restart</button>
                <div class="stats">
                    <div class="moves">0 moves</div>
                    <div class="timer">time: 0 sec</div>
                </div>
            </div>
            <div class="board-container">
                <div class="board" data-dimension="4"></div>
                <div class="win">You won!</div>
            </div>
    </div>
    
<?php include "includs/footer.php"; ?>