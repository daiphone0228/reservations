<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Hotel Reservation System</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/bootstrap-bootstrap-responsive.min.css" rel="stylesheet" media="screen">
		<script src="http://code.jquery.com/jquery-latest.js"></script> 
		<script src="js/bootstrap.min.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<header class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid container">
				<h1>Hotel's Information</h1>
				 	<ul>
				 		<li>プラン一覧</li>
						<li>部屋一覧</li>
						<li>予約照会/キャンセル</li>
				 	</ul>
			</div>
		</div>
	</header>
	<div class="container">
		<h2>Reservations</h2>
			<form action="get" form="" name="search">
				<table class="table">
					<thead>
						<tr>
							<th>宿泊日</th>
							<th>宿泊数</th>
							<th>ご利用部屋数</th>
							<th>1部屋のご利用人数</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<select name="year" id="year">
									<?php for($i=2014; $i<2017; $i++): ?>
										<option value="<?php echo $i;?>"><?php echo $i;?>年</option>
									<?php endfor; ?>
								</select>
								<select name="month" id="month">
									<?php for($i=1; $i<=12; $i++): ?>
										<option value="<?php echo $i;?>"><?php echo $i;?>月</option>
									<?php endfor; ?>
								</select>
								<select name="date" id="date">
									<?php for($i=1; $i<=31; $i++): ?>
										<option value="<?php echo $i;?>"><?php echo $i;?>日</option>
									<?php endfor; ?>
								</select>
							</td>
							<td>
								<select name="stay" id="stay">
									<?php for($i=1; $i<=10; $i++): ?>
										<option value="<?php echo $i;?>"><?php echo $i;?>泊</option>
									<?php endfor; ?>
								</select>
							</td>
							<td>
								<select name="room" id="room">
									<?php for($i=1; $i<=6; $i++): ?>
										<option value="<?php echo $i;?>"><?php echo $i;?>部屋</option>
									<?php endfor; ?>
								</select>
							</td>
							<td>
								<select name="number" id="number">
									<?php for($i=1; $i<=10; $i++): ?>
										<option value="<?php echo $i;?>"><?php echo $i;?>人</option>
									<?php endfor; ?>
								</select>
							</td>
						</tr>
					</tbody>
				</table>
				<input type="submit" action="" value="検索">
				<input type="submit" action="" value="全て表示">
			</form>
	</div>
	<div class="container">
		<h2>Searching for plan</h2>
			<ul>
				<li>すべて表示</li>
				<li>年末お年玉キャンペーン</li>
				<li>カップル向けフリープラン</li>
				<li>ビジネスマン必見！冬の特別割引</li>
				<li>ツアーキャンペーン</li>
			</ul>

		<h3>検索結果</h3>
	</div>








		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>