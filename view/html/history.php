<?php
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/booking.css"/>
<link rel="stylesheet" href="../css/navbar-manda.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Order History</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<style>
    .li{
        padding:10px;
        padding-right: 200px;
        font-size: 100px;

    }
    .p{
        display:flex;
        font-size:20px;
        margin-left: 70px;
    margin-right: 70px;
   tab-size:8;
    }
    	.li-content{
            display:flex;
            background-color: #A7BBC7;
            font-weight: bold;
	font-size: 20px;
    font-family:  'Open Sans';
	width:85%;
	height: fit-content;
	border-radius: 10px;
	border: none;
    margin-left: 50px;
    margin-right: 50px;
    /* margin: 0 auto; */
	margin-top: 50px;
        }
        .columnside {
            float: left;
            width: 2.5%;
			height: 100%;
            box-sizing: border-box;
            padding: 20px;
        }
		.columnside2 {
            float: left;
            width: 7.5%;
            box-sizing: border-box;
            padding: 20px;
        }
        .columnsearch {
            float: left;
            width: 90%;
            box-sizing: border-box;
            padding: 20px;
			align-items: center;
        }

    </style>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<!-- <div class="columnside" style="background-color: #DA7F8F;">
			<i class="iconify my-icon" data-icon="ci:hamburger-lg"></i>
		
		</div>
        <div class="columnsearch" style="background-color: #DA7F8F;">
			
		</div>

		<div class="columnside2" style="background-color: #DA7F8F;">
			<a href="logout.php" class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
		</div>	 -->
        <?php include_once('./NavBar/navbar-manda.php')?>
</div>
    <h1>ORDER HISTORY</h1>
    <ul class="li-content">
        <p class="p">&ensp;Name</p>
        <p class="p">Time&ensp;</p>
        <p class="p">&emsp;&ensp;Price</p>
        <p class="p">&ensp;&emsp;&emsp;Status</p>
        <p class="p">&emsp;&emsp;Date</p>
                        </ul>

                        <ul class="li-content">
        <p class="p">John</p>
        <p class="p">10:00 - 18:00</p>
        <p class="p">Rp 80.000</p>
        <p class="p">On Going</p>
        <p class="p">&emsp;28/02/2023</p>
                        </ul>

                        <ul class="li-content">
        <p class="p">Joko</p>
        <p class="p">10:00 - 13:00</p>
        <p class="p">Rp 30.000</p>
        <p class="p">Cancelled</p>
        <p class="p">&emsp;30/01/2023</p>
                        </ul>

                        <ul class="li-content">
        <p class="p">Sara</p>
        <p class="p">10:00 - 20:00</p>
        <p class="p">Rp 100.000</p>
        <p class="p">Completed</p>
        <p class="p">17/01/2023</p>
                        </ul>

                        <ul class="li-content">
        <p class="p">Laia</p>
        <p class="p">10:00 - 20:00</p>
        <p class="p">Rp 100.000</p>
        <p class="p">Completed</p>
        <p class="p">17/01/2023</p>
                        </ul>
             </div>
                </div>
            </div>
        </div>
        </div>	
 
</body>
</html>