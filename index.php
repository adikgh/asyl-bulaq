<? include 'config/core.php';

	// site setting
	$menu_name = 'home';
	$site_set['visible'] = 'after';
	$site_set['header_wh'] = true;
	$site_set['header_logo'] = 'cl';
	$site_set['swiper'] = true;
	// $site_set['aos'] = true;
	$js = ['main'];
?>
<? include 'block/header.php'; ?>

    <? include 'standart/offer.php'?>
    <? include 'standart/sanatori-basbet.php' ?>
    <? include 'standart/lebiz.php' ?>

<? include 'block/footer.php'; ?>