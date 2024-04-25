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

    <!-- block 1 - offer -->
    <div class="bl1">

        <div class="element-with-video-bg jquery-background-video-wrapper">
            <video class="my-background-video jquery-background-video" loop autoplay muted playsinline poster="/assets/video/IMG_4738.JPG">
                <source src="/assets/video/IMG_0991.MOV" type="video/mp4">
                <source src="#path/to/video.webm" type="video/webm">
                <source src="#path/to/video.ogv" type="video/ogg">
            </video>
            <div class="viewport-header">
                <h1>Санаторий <span>Saryagash 777</span></h1>
            </div>
        </div>
    </div>

    <div class="blx2">
        <div class="bl_c">
            <div class="blx2_c">
                <div class="blx2_tx">
                    <h1>Современная санатория в Сарыагаше</h1>
                    <p>Наш санаторий получил известность благодаря своим природным ресурсам. Его минеральные воды оказывают сильнейший лечебный эффект, восстанавливая нормальную работу пищеварительной системы и других органов и систем. В городе также производят виноградные вина, которые относятся к классу элитных.</p>
                </div>
                <div class="blx2_mp">
                    <div class="blx2_mpc">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad11ad9a84819ad9288fb12d4a1a36efdfe65a34127e959521bb21fe7caec092f&amp;source=constructor" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sana_bl2">
		<div class="bl_c">
			<div class="head_c">
                <h1 class="txt_tu txt_c">Выбрать номера</h1>
            </div>
            <div class="sana_bl2_c">

                <? $sql = db::query("select * from sanatorium_number where arh is null ORDER BY id ASC"); ?>
                <? while ($ana = mysqli_fetch_array($sql)): ?>
                    <div class="bl5_i">
                        <a class="bl5_ia lazy_bag" data-src="/assets/uploads/number/<?=$ana['img']?>" href="#">
                            <div class="bl5_icn"><p><?=$ana['type_name']?></p></div>
                        </a>
                        <div class="bl5_ic">
                            <div class="bl5_icb">
                                <div class="bl5_ictp"><?=$ana['door_name']?></div>
                                <div class="bl5_icbn">
                                    <div class="bl5_ics">Цена за одного гостя:</div>
                                    <div class="bl5_icp fr_price"><?=$ana['price']?></div>
                                </div>
                            </div>
                            <? if ($ana['btn']): ?>
                                <div class="bl5_icbtn">
                                    <div class="btn">Забронировать</div>
                                    <!-- <a class="btn btn_bl2" href="#">Подробнее</a> -->
                                </div>
                            <? endif ?>
                        </div>
                    </div>
                <? endwhile ?>

            </div>
        </div>
	</div>

    <!-- block 7 -  -->
    <div class="bl7" id="bl2">
        <div class="bl_c">
            <div class="head_c">
                <h1 class="txt_tu txt_c">наши преимущества</h1>
            </div>
            <div class="bl7_c">
                <div class="bl7_i ">
                    <div class="bl7_img lazy_bag" data-src="/assets/img/bag/scale_2400.jpeg"></div>
                    <div class="bl7_ic">
                        <p class="bl7_in">Бесплатное бронирование</p>
                        <p class="bl7_it">Бронирование без комиссий, <br>гарантия брони</p>
                    </div>
                </div>
                <div class="bl7_i ">
                    <div class="bl7_img lazy_bag" data-src="/assets/uploads/77/IMG_4717.JPG"></div>
                    <div class="bl7_ic">
                        <p class="bl7_in">Более 20 видов процедур</p>
                        <p class="bl7_it">Минеральная вода <br>Сарыагаш - лечебный фактор</p>
                    </div>
                </div>
                <div class="bl7_i ">
                    <div class="bl7_img lazy_bag" data-src="/assets/img/bag/field_image_original_79743_mcz_zr0fko92q_9xxycfftkdk_042915331619.jpg"></div>
                    <div class="bl7_ic">
                        <p class="bl7_in">Услуги трансфера</p>
                        <p class="bl7_it">Встречаем вас с вокзала <br>или с аэропорта</p>
                    </div>
                </div>
            </div>
            <div class="bl7_b ">
                <p>Напишите нам на Whatsapp и мы расскажем все более детально</p>
                <a target="_blank" href="https://wa.me/77068085050">
                    <div class="btn btn_whatsapp"><i class="fab fa-whatsapp"></i><span>Написать</span></div>
                </a>
            </div>
        </div>
    </div>

    <!-- block 13 -->
    <div class="bl13">
        <div class="bl13_c">
            <div class="bl_c">
                <div class="bl131_c">
                    <div class="bl13_l">
                        <div class="head_c">
                            <h3>Хотите подарить близким поездку в Saryagash 777?</h3>
                            <p>У нас сможете заказать «ПОДАРОЧНЫЙ СЕРТИФИКАТ»</p>
                        </div>
                        <div class="btn disb_zab2"><span>подарить</span></div>
                    </div>
                    <div class="bl13_r"><div class="bl13_ri lz_bl13" data-src="images/10.jpg"></div></div>
                </div>
            </div>
        </div>
    </div>


    <!-- block 5 -->
    <div class="blx3">
        <div class="bl_c">
            <div class="head_c">
                <h1 class="txt_tu txt_c">ВИДЫ ЛЕЧЕНИЯ</h1>
            </div>
            <div class="blx3_c">
                
                <? $sql = db::query("select * from sanatorium_lesh where type = 1 and rek = 1 ORDER BY number ASC"); ?>
                <? while ($ana = mysqli_fetch_array($sql)): ?>
                    <div class="bl5_i " href="#em-vanna.php" >
                        <div class="bl5_ia lazy_bag" data-src="images/em/<?=$ana['img']?>"></div>
                        <div class="bl5_ic">
                            <div class="bl5_ict"><?=$ana['name']?></div>
                            <!-- <div class="bl5_icb">
                                <p>Через день</p>
                                <div class="bl5_icp fr_price"></div>
                            </div> -->
                        </div>
                    </div>
                <? endwhile ?>
                
			</div>

            <!-- <div class="bl5_b ">
                <p>У нас есть подходящие процедуры для каждого гостя</p>
                <a href="lechenie.php"><div class="btn"><span>Посмотреть все процедуры </span><i class="far fa-long-arrow-right"></i></div></a>
            </div> -->

        </div>
    </div>


    <!-- block 9 -->
    <div class="bl9">
        <div class="bl_c">
            <div class="head_c">
                <h1 class="txt_tu txt_c">Отзывы гостей</h1>
            </div>
            <div class="bl9_c">
                <div class="swiper-container bl9_con swiper-container-initialized swiper-container-horizontal swiper-container-autoheight">
                    <div class="swiper-wrapper" id="swiper-wrapper-d682467132afbaef" aria-live="polite" style="height: 230px;">
                        
                                    <div class="swiper-slide bl9_i  swiper-slide-active"style="margin-right: 30px;" role="group" aria-label="1 / 9">
                                        <div class="bl9_iln">
                                            <div class="bl9_iln2">
                                                <div class="bl9_ilogo lazy_rev" data-src="images/rw1.jpg"></div>
                                                <div class="bl9_ilc"><div class="bl9_ilname">Архат Омаров</div><div class="bl9_ils">Источник: <i class="fab fa-instagram"></i></div></div>
                                            </div>
                                            <div class="bl9_ildt">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="bl9_it">Рахмет ребятам из Центра брони Сарыагаш. Организовали мой отдых отлично. Вдобавок экскурсию сделали в культурный </p>
                                    </div>
                                
                                    <div class="swiper-slide bl9_i  swiper-slide-next"style="margin-right: 30px;" role="group" aria-label="2 / 9">
                                        <div class="bl9_iln">
                                            <div class="bl9_iln2">
                                                <div class="bl9_ilogo lazy_rev" data-src="images/rw2.jpg"></div>
                                                <div class="bl9_ilc"><div class="bl9_ilname">Марина Давыденко</div><div class="bl9_ils">Источник: <i class="fab fa-instagram"></i></div></div>
                                            </div>
                                            <div class="bl9_ildt">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="bl9_it">Благодарю редят из Центр Брони Сарыагаш. Они сделали скидку, встретили. Помогли с экскурсией.</p>
                                    </div>
                                
                                    <div class="swiper-slide bl9_i "style="margin-right: 30px;" role="group" aria-label="3 / 9">
                                        <div class="bl9_iln">
                                            <div class="bl9_iln2">
                                                <div class="bl9_ilogo lazy_rev" data-src="images/rw3.jpg"></div>
                                                <div class="bl9_ilc"><div class="bl9_ilname">Акмарал Исабаева</div><div class="bl9_ils">Источник: <i class="fab fa-whatsapp"></i></div></div>
                                            </div>
                                            <div class="bl9_ildt">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="bl9_it">Курортная зона Сарыагаш оказывается более 50-ти вариантов для размещения. Выбрать оптимальный было непросто. Но ребята из Центр брони сделали скидку, помогли найти хороший вариант отдыха. Желаю успехов! </p>
                                    </div>
                                
                                    <div class="swiper-slide bl9_i "style="margin-right: 30px;" role="group" aria-label="4 / 9">
                                        <div class="bl9_iln">
                                            <div class="bl9_iln2">
                                                <div class="bl9_ilogo lazy_rev" data-src="images/rw4.jpg"></div>
                                                <div class="bl9_ilc"><div class="bl9_ilname">Макпал Уразова</div><div class="bl9_ils">Источник: <i class="fab fa-whatsapp"></i></div></div>
                                            </div>
                                            <div class="bl9_ildt">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="bl9_it">Благодарю ребят из Центра Бронирования. Они честно помогли выбрать отличный способ отдыха. Из Шымкента встретили. Еще процедуры в бонус дали. Моя семья довольна</p>
                                    </div>
                                
                                    <div class="swiper-slide bl9_i "style="margin-right: 30px;" role="group" aria-label="5 / 9">
                                        <div class="bl9_iln">
                                            <div class="bl9_iln2">
                                                <div class="bl9_ilogo lazy_rev" data-src="images/reviews/rw5.jpg"></div>
                                                <div class="bl9_ilc"><div class="bl9_ilname">Ережеп Мырзабаев</div><div class="bl9_ils">Источник: <i class="fab fa-instagram"></i></div></div>
                                            </div>
                                            <div class="bl9_ildt">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="bl9_it">Заказали звонок через сайт. Ребята перезвонили. Сделали бронь. Отдых был у меня в разгар сезона. Номера, сервис и питание понравились. Желаю процветания и успехов</p>
                                    </div>
                                
                                    <div class="swiper-slide bl9_i "style="margin-right: 30px;" role="group" aria-label="6 / 9">
                                        <div class="bl9_iln">
                                            <div class="bl9_iln2">
                                                <div class="bl9_ilogo lazy_rev" data-src="images/rw6.jpg"></div>
                                                <div class="bl9_ilc"><div class="bl9_ilname">Макпал Арсеновна</div><div class="bl9_ils">Источник: <i class="fab fa-whatsapp"></i></div></div>
                                            </div>
                                            <div class="bl9_ildt">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="bl9_it">Нам был нужен санаторий рядом с парковой зоной, с бассейном. Ребята из Центр Брони Сарыагаш показали несколько вариантов для нашего отдыха. Мы остановились на санаторий Коктерек. Нам понравилось</p>
                                    </div>
                                
                                    <div class="swiper-slide bl9_i "style="margin-right: 30px;" role="group" aria-label="7 / 9">
                                        <div class="bl9_iln">
                                            <div class="bl9_iln2">
                                                <div class="bl9_ilogo lazy_rev" data-src="images/rw7.jpg"></div>
                                                <div class="bl9_ilc"><div class="bl9_ilname">Наталья Ивановна</div><div class="bl9_ils">Источник: <i class="fab fa-whatsapp"></i></div></div>
                                            </div>
                                            <div class="bl9_ildt">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="bl9_it">Я впервые отдохнула и очистила организм в курорте Сарыагаш. Нам показали отличный вариант отдыха. Благодарю ребят. Дали еще экскурсию в культурный центр. Классно было</p>
                                    </div>
                                
                                    <div class="swiper-slide bl9_i "style="margin-right: 30px;" role="group" aria-label="8 / 9">
                                        <div class="bl9_iln">
                                            <div class="bl9_iln2">
                                                <div class="bl9_ilogo lazy_rev" data-src="images/rw8.jpg"></div>
                                                <div class="bl9_ilc"><div class="bl9_ilname">Умиджон Еламанов</div><div class="bl9_ils">Источник: <i class="fab fa-instagram"></i></div></div>
                                            </div>
                                            <div class="bl9_ildt">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="bl9_it">Мы приехали из России. Отдохнули хорошо. Все было замечательно. Номера, питание, отдых на высоте. Еще совсем недорого!</p>
                                    </div>
                                
                                    <div class="swiper-slide bl9_i "style="margin-right: 30px;" role="group" aria-label="9 / 9">
                                        <div class="bl9_iln">
                                            <div class="bl9_iln2">
                                                <div class="bl9_ilogo lazy_rev" data-src="images/rw9.jpg"></div>
                                                <div class="bl9_ilc"><div class="bl9_ilname">Балаби Расылханов</div><div class="bl9_ils">Источник: <i class="fab fa-whatsapp"></i></div></div>
                                            </div>
                                            <div class="bl9_ildt">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="bl9_it"> Мы отдохнули в санаторий Дархан. Забронировали через сайт Онлайн Бронирования. Все понравилось. Ребята сделали скидку. Санаторий был с бассейном. Номера светлые. Приедем еще</p>
                                    </div>
                                                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                <div class="swiper-button-prev bl9_prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-d682467132afbaef" aria-disabled="true"><div class="btn btn_sqr"><i class="fal fa-chevron-left"></i></div></div>
                <div class="swiper-button-next bl9_next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-d682467132afbaef" aria-disabled="false"><div class="btn btn_sqr"><i class="fal fa-chevron-right"></i></div></div>
            </div>
            <div class="bl9_b ">
                <p>Мы организуем Ваш отдых в Сарыагаш. Нажмите Связаться</p>
                <a target="_blank" href="https://wa.me/77784141722"><div class="btn">Связаться</div></a>
            </div>
        </div>
    </div>

    <? if ($site_set['bl12']): ?>
        <div class="bl12">
            <div class="bl_c">
                <div class="bl12_c">
                    <div class="head_c">
                        <h4 class="txt_tu txt_c"><?=t::w('bl12_off')?></h4>
                    </div>
                    <div class="bl12_r2c">
                        <? $sql = db::query("select * from `word_blocks` where type = 'bl12' and lang = '$lang' ORDER BY number ASC"); ?>
                        <?	while($ana = mysqli_fetch_array($sql)): ?>
                            <div class="bl12_r2ci">
                                <div class="bl12_r2cimg"><?=$ana['img']?></div>
                                <h6 class="bl12_r2cic"><?=$ana['txt1']?></h6>
                            </div>
                        <? endwhile ?>
                    </div>
                    <div class="bl12_b">
                        <p><?=t::w('bl12_b')?></p>
                        <div class="btn disb_zab3"><span><?=t::w('Get a discount')?></span></div>
                    </div>
                </div>
            </div>
        </div>
    <? endif ?>

    <? if ($site_set['bl11']): ?>
        <div class="bl11">
            <div class="bl_c">
                <div class="bl11_c">
                    <div class="head_c"><h4><?=t::w('Frequently asked Questions')?></h4></div>
                    <div class='faq'>
                        <? $sql = db::query("select * from `word_blocks` where type = 'bl11' and lang = '$lang' ORDER BY number ASC"); ?>
                        <? while($ana = mysqli_fetch_array($sql)): ?>
                            <div class="faq-a">
                                <div class="faq-ah">
                                    <div class="faq-arrow"><i class="fal fa-plus"></i></div>
                                    <h6 class="faq-heading"><?=$ana['txt1']?></h6>
                                </div>
                                <p class="faq-text"><?=$ana['txt2']?></p>
                            </div>
                        <? endwhile ?>
                    </div>
                </div>
            </div>
        </div>
    <? endif ?>


    <? if (!$site_set['bl10']): ?>
        <div class="bl10">
            <div class="bl10_c">
                <div class="head_c txt_c">
                    <h4><?=t::w('Still have questions?')?></h4>
                    <p><?=t::w('bl10_w')?></p>
                </div>
                <div class="form_c">
                    <div class="form_im dsp_n"><input type="text" class="sms" value="Консультация 2"></div>
                    <div class="form_im"><input type="tel" placeholder="+7 (___) ___-__-__" class="form_im_txt phone ms_phone"></div>
                    <div class="form_im"><div class="btn send"><span><?=t::w('submit your')?></span></div></div>
                </div>
            </div>
        </div>
    <? endif ?>


<? include 'block/footer.php'; ?>