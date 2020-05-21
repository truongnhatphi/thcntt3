<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Anti-theft</title>        
        <script src="https://www.gstatic.com/firebasejs/7.13.2/firebase.js"></script>
        <link rel="stylesheet" type="text/css" href="../CSS/style.css"/>
        <link rel="stylesheet" type="text/css" href="../CSS/bootstrap.min.css"/>
    </head>
    <body>       
    <header>
        <div class="main">
            <div class="logo">
                <img src="../Img/logo.png">
            </div>            
        </div>    
    </header>
        <main >
        <div class="maint-content">
            <div class="card-deck mb-3 text-center">                               
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Status</h4>
                    </div>
                    <div class="card-body">
                    <h1 id="canhbao"> </small></h1>
                    <button type="button" onclick="getdatastatus()">Run</button>
                    </div>
                </div>
            </div>       
        </div>
    </main>
    <script src="../JS/script.js"></script>
    </body>
</html>