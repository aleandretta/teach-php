<?php
$password = "info2023"; 

if (isset($_GET['password']) && $_GET['password'] === $password) {   
    if (isset($_GET['color'])) 
    {
        $sfondo = $_GET['color'];
    } 

    
?>
<?php
        $welcomeMessage = isset($_GET['fname']) ? "Benvenuto " . htmlspecialchars($_GET['fname']) : "Benvenuto";
        
?>
<center>

    <html>
    
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>

    <body>
        
        <div class="container">
        <h1><b><?php echo $welcomeMessage; ?></b></h1>
            <h1>Risposte del Form</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Chiave</th>
                        <th>Valore</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($_GET as $k => $v) {
                        echo "<tr> <td> $k </td> <td> $v </td> </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>

    </html>
<?php
} else {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>

    <body>
        <div class="errorer">
            <div class="errore">
                Password errata 
            </div>
        </div>
    </body>
</center>
    </html>
<?php
}
?>
<style>
 body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: <?php echo $sfondo; ?> ;
 }
 .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            width: 700px;
            color: white;
            border-radius: 40px;
            padding: 30px 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            background-color: white;
        }
        h1{
            color: black;
        }

</style>