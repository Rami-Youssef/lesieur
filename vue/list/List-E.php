<?php
    include_once('..\header\header.php');
    
    $conn = mysqli_connect("localhost", "root", "", "LocationVoiture");

    
    $sql = "SELECT * FROM voiture";
    $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liste des voitures</title>
    <style> 
        html,body{
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden; 
            font-family: 'Trebuchet MS', sans-serif;
        }
        table {
		    margin: 50px auto;
		    width: 80%;
		    border-collapse: collapse;
		    background-color: #fff;
			box-shadow: 0 0 20px rgba(0,0,0,0.1);
		}
        
        th, td {
            text-align: left;
            padding: 8px;
        }

        th {
			background-color: #181b21;
			color: #fff;
		}

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        
        td a {
			display: inline-block;
			padding: 8px 16px;
			margin: 10px;
			background-color: rgb(175, 19, 19);
			color: #fff;
			border-radius: 5px;
			text-decoration: none;
			font-weight: bold;
			transition: all 0.3s ease-in-out;
		}


        td a:hover {
			background-color: rgb(120, 19, 19);
		}
        .page-header h1 {
            font-size: 36px;
            font-weight: bold;
        }
        td img{
            width: 200px;
        }
        .tab{
			min-height: 500px;
			display: flex;
			align-items: center;
			justify-content: center;
			overflow-y: scroll;
		}

    </style>
</head>
<body>
    <div class="tab">
        <table>
            <tr>
                <th>Image</th>
                <th>Marque</th>
                <th>Place</th>
                <th>Prix</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
            <td>
                <img src="<?php echo $row['image_path']; ?>" alt="<?php echo $row['Marque']; ?>"
                    onerror="this.src='../images/none.jpg';">
            </td>
                <td><?php echo $row['Marque']; ?></td>
                <td><?php echo $row['place']; ?> personne</td>
                <td>MAD <?php echo $row['prix']; ?> / Jour</td>
            </tr>
            <?php } ?>
        </table>
    </div>  

    <div>
        <?php include_once('..\footer\footer.php') ?>
    </div>
</body>
</html>