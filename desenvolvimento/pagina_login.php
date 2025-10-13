<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <center><title>CONECTA JOVEM</title><center>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzeKPfsT-FR7xsRiI0UBngs9rJVBHTxG_XvA&s" alt="" width="150" heigth="100">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
     
            
        <h2>CONECTA JOVEM</h2>
        <hr>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="row justify-content-center row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sw">
                    <div class="card-header py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#00008B" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>&nbsp;&nbsp;<b>LOGIN</b></svg>
                        <style>
            body {
                padding: 10px;
                margin: 10px;
                
            }
            h2 {
                color: #00008B;
            }
            .main-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 15px 10px;
                
            }
            .user-info {
                display: flex;
                align-items: center;
                gap: 8px;
                color: orange;
            }
            .username {
                font-weight: bold;
                color:black;
            }
            .logout-link {
                color: red;
                font-weight: bold;
                text-decoration: none;
            }
            .logout-link:hover {
                text-decoration: underline;
            }
        </style>
        
        
                    </div>
                    <div class="card-body text-start">
                        <form action="login.php" method="POST">
                            <label class="form-label"><b>LOGIN</b></label>
                            <input class="form-control" type="text" name="login" required/>
                            <br>
                            <label class="form-label"><b>SENHA</b></label>
                            <input class="form-control" type="password" name="senha" required/>
                            <br>
                            <input type="submit" class="btn btn-outline-success" value="LOGIN">
                        </form>
                            
           
                    </div>
                </div>       
            </div>
        </div>
    <body>
   
</html>