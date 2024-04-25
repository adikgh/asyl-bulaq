<!-- menu -->
<div class="header header_wh ">
	<div class="bl_c">
		<div class="header_c">
			<div class="header_l">
				<div class="logo">
					<a href="/">
						<div class="logo_i lazy_logo" style="background-image: url('/assets/img/logo/logo_w.png');"></div>
					</a>
				</div>
				<div class="cmenu">
					<a href="/"><div class="cmenu_i">Главная</div></a>
					<a href="lechenie.php"><div class="cmenu_i">Лечение</div></a>
					<a href="nomera.php"><div class="cmenu_i">Номера</div></a>
					<a href="price.php"><div class="cmenu_i">Прайс</div></a>
				</div>
			</div>
			<div class="header_r">
				<div class="phone_nm">
					<a href="tel:<?=$site['phone']?>"><?=$site['phone_view']?></a>
				</div>

				<? if ($site_set['menu'] == true): ?>
					<div class="menu">
						<div class="menu_bars menu_bars_clc"><div class="menu_bars_i"></div></div>
						<div class="menu_c">
							<a href="/">
								<div class="menu_ci">
									<div class="menu_cin"><i class="fal fa-home"></i></div>
									<div class="menu_cih">Главная</div>
								</div>
							</a>
							<a href="#lechenie.php">
								<div class="menu_ci">
									<div class="menu_cin"><i class="fal fa-heart-rate"></i></div>
									<div class="menu_cih">Лечение</div>
								</div>
							</a>
							<a href="#nomera.php">
								<div class="menu_ci">
									<div class="menu_cin"><i class="fal fa-hotel"></i></div>
									<div class="menu_cih">Номера</div>
								</div>
							</a>
							<a href="#price.php">
								<div class="menu_ci">
									<div class="menu_cin"><i class="fal fa-tenge"></i></div>
									<div class="menu_cih">Прайс</div>
								</div>
							</a>
						</div>
					</div>
				<? endif ?>
			</div>
		</div>
	</div>
</div>