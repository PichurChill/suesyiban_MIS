<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/main/bootstrap.css">
		<link rel="stylesheet" href="css/main/normalize.css">
		<link rel="stylesheet" href="css/admin/adminMain.css">
		<link rel="stylesheet" href="css/Main.css">
		<title>管理员</title>
	</head>
	<body>
		<header class="Ad_head">
			<button class="btn btn-primary hd_downbtn" onclick="tiggle()">下拉</button>
		</header>
		<div class="col-xs-2 Ad_Lef" id="showandhide">
			<br>
			<input type="text" class="form-control Ad_Lef_sea" placeholder="Search"><br>
			<div class="Ad_Lef_hr"></div><br>
			<div class="Ad_Lef_btn" onclick="UserMeneShow()">
				<span class="col-xs-2 Ad_Lef_btnPic"><a class="glyphicon glyphicon-home Ad_Lef_btnA"></a></span>
				<div class="col-xs-10 Ad_Lef_btnWord"><p class="Ad_Lef_btnP">用户管理</p></div>
			</div>
			<div class="Ad_Lef_btn" onclick="emptyClassShow()">
				<span class="col-xs-2 Ad_Lef_btnPic"><a class="glyphicon glyphicon-education Ad_Lef_btnA"></a></span>
				<div class="col-xs-10 Ad_Lef_btnWord"><p class="Ad_Lef_btnP">智能排班</p></div>
			</div>
			<div class="Ad_Lef_btn" onclick="itemShow()">
				<span class="col-xs-2 Ad_Lef_btnPic"><a class="glyphicon glyphicon-briefcase Ad_Lef_btnA"></a></span>
				<div class="col-xs-10 Ad_Lef_btnWord"><p class="Ad_Lef_btnP">项目查看</p></div>
			</div>
			<div class="Ad_Lef_btn_checked" onclick="itemCreate()">
				<span class="col-xs-2 Ad_Lef_btnPic"><a class="glyphicon glyphicon-folder-open Ad_Lef_btnA Ad_Lef_btn_colorchange"></a></span>
				<div class="col-xs-10 Ad_Lef_btnWord"><p class="Ad_Lef_btnP Ad_Lef_btn_colorchange">项目发布</p></div>
			</div>
			<div class="Ad_Lef_btn" onclick="article()">
				<span class="col-xs-2 Ad_Lef_btnPic"><a class="glyphicon glyphicon-calendar Ad_Lef_btnA"></a></span>
				<div class="col-xs-10 Ad_Lef_btnWord"><p class="Ad_Lef_btnP">库存管理</p></div>
			</div>
			<div class="Ad_Lef_btn" onclick="SignIn()">
				<span class="col-xs-2 Ad_Lef_btnPic"><a class="glyphicon glyphicon-th-list Ad_Lef_btnA"></a></span>
				<div class="col-xs-10 Ad_Lef_btnWord"><p class="Ad_Lef_btnP">签到情况</p></div>
			</div>
			<div class="Ad_Lef_btn" onclick="MomentsMene()">
				<span class="col-xs-2 Ad_Lef_btnPic"><a class="glyphicon glyphicon-comment Ad_Lef_btnA"></a></span>
				<div class="col-xs-10 Ad_Lef_btnWord"><p class="Ad_Lef_btnP">动态管理</p></div>
			</div>
			<br>
		</div>
		<section class="col-xs-10 Ad_Rig">
			<h2>项目发布</h2><br>
			<div>
				<div class="item_show" style="background-image: url(images/itemImg.jpeg);">
					<h3 class="item_showtit">示例项目</h3>
				</div>
				<div class="item_show" style="background-image: url(images/itemImg.jpeg);"></div>
				<div class="item_show" style="background-image: url(images/itemImg.jpeg);"></div>
				<div class="item_show" onclick="createItem()"><br><br>
					<img src="images/addicon.png" alt="" class="item_Addicon">
				</div>
			</div>
		</section>
		<!-- 以下为用户添加，默认隐藏 -->
		<section class="cover" id="coverDiv" onclick="hideAll()"></section>
		<section class="showSetting" id="createItem" style="height: 493px;">
			<div class="Set_pic" style="background-image: url(images/New_York.png);">
				<p class="Set_tit">新建项目</p>
			</div>
			<section class="Set_xm">
				<div class="Set_sp">项目名：</div><input class="form-control" type="text" placeholder="项目名" id="insertItemName">
				<div class="Set_sp">项目简介：</div><textarea class="form-control" rows="4" placeholder="项目简介(不能超过64个字)" id="insertPhone"></textarea>
			</section>
			<p id="createResult" class="Set_btn_P"></p><br>
			<div class="Set_btn_M">
				<button class="Set_btn col-xs-6 handlegreen" onclick="insertItem()">创建</button>
				<button class="Set_btn col-xs-6" onclick="hideAll()">取消</button>
			</div>
		</section>
        <script src="js/adminHref.js"></script>
        <script src="js/jquery.min.js"></script>
		<script>
			var show = 0;
			function tiggle() {
				if (this.show == 0) {
					document.getElementById("showandhide").style.top = '51px';
					this.show = 1;
				} else {
					document.getElementById("showandhide").style.top = '-100%';
					this.show = 0;
				}
			}
			function createItem() {
				document.getElementById("coverDiv").style.top = '0px';
				document.getElementById("createItem").style.top = '5%';
				document.getElementById("createItem").style.opacity = 1;
			}
			//隐藏状态栏
			function hideAll() {
				document.getElementById("coverDiv").style.top = '-999px';
				document.getElementById("createItem").style.top = '-600px';
				document.getElementById("createItem").style.opacity = 0;
			}
		</script>
	</body>
</html>