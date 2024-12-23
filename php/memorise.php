<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/memorise.css">
        <link rel="stylesheet" href="../css/nav.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="../images/webicon.png">
        <title>VerseInMind</title>
    </head>
    <body>  
        <nav id="sidebar"> 
            <ul>
                <p id="site-name">VerseInMind<span style="color: #ffa25c">.</span></p>
                <li>
                    <a href="../index.php">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M520-600v-240h320v240H520ZM120-440v-400h320v400H120Zm400 320v-400h320v400H520Zm-400 0v-240h320v240H120Zm80-400h160v-240H200v240Zm400 320h160v-240H600v240Zm0-480h160v-80H600v80ZM200-200h160v-80H200v80Zm160-320Zm240-160Zm0 240ZM360-280Z"/></svg>                    
                    <span>Dashboard</span>
                    </a>
                </li>
                <li class="active">
                    <a href="memorise.php">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M240-80v-172q-57-52-88.5-121.5T120-520q0-150 105-255t255-105q125 0 221.5 73.5T827-615l52 205q5 19-7 34.5T840-360h-80v120q0 33-23.5 56.5T680-160h-80v80h-80v-160h160v-200h108l-38-155q-23-91-98-148t-172-57q-116 0-198 81t-82 197q0 60 24.5 114t69.5 96l26 24v208h-80Zm254-360Zm-54 80h80l6-50q8-3 14.5-7t11.5-9l46 20 40-68-40-30q2-8 2-16t-2-16l40-30-40-68-46 20q-5-5-11.5-9t-14.5-7l-6-50h-80l-6 50q-8 3-14.5 7t-11.5 9l-46-20-40 68 40 30q-2 8-2 16t2 16l-40 30 40 68 46-20q5 5 11.5 9t14.5 7l6 50Zm40-100q-25 0-42.5-17.5T420-520q0-25 17.5-42.5T480-580q25 0 42.5 17.5T540-520q0 25-17.5 42.5T480-460Z"/></svg>                    
                    <span>Memorise</span>
                    </a>
                </li>
                <li>
                    <a href="profile.php">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/></svg>                    
                    <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="../login.php">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>                    
                    <span>Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div id="vertical-line"></div>
        <main>
            <div id="cont-one">
                <h1 id="main-title">Memorise</h1>

                <button id="add-verse-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg>
                    <span>Add A Verse</span>
                </button>
                <div id="add-verse-modal" class="modal">
                    <div class="modal-content">
                        <div id="cont-one-modal">
                            <span class="close">&times;</span>
                            <h3 id="add-modal-title">Add A Verse</h3>
                        </div>
                        <div id="cont-two-modal">
                            <div class="column">
                                <label for="book-option" id="book-label">Book</label><br>
                                <select name="book-option" id="book-option">
                                <option value="" selected="selected">Select Book</option>
                                </select>
                            </div>

                            <div class="column">
                                <label for="chapter-option" id="chapter-label">Chapter</label><br>
                                <select name="chapter-option" id="chapter-option">
                                <option value="" selected="selected">Select Chapter</option>
                                </select>
                            </div>  

                            <div class="column">
                                <label for="verse-option" id="verse-label">Verse</label><br>
                                <select name="verse-option" id="verse-option">
                                <option value="" selected="selected">Select Verse</option>
                                </select>
                            </div>
                        </div>
                        <div id="cont-three-modal">
                            <p id="passage-text"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="bible-passage"></div>
        </main>
        <script src="../js/memorise.js" defer></script>
    </body>
</html>