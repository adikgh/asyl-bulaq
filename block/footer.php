		<? if ($site_set['bl12']): ?>
			<div class="bl12">
				<div class="bl_c">
					<div class="head_c txt_c" data-aos="fade-up"><h3><?=t::w('bl12_off')?></h3></div>
					<div class="bl12_r2c">
						<? $sql = db::query("select * from `word_blocks` where type = 'bl12' and lang = '$lang' ORDER BY number ASC"); ?>
						<?	while($ana = mysqli_fetch_array($sql)): ?>
							<div class="bl12_r2ci" data-aos="fade-up">
								<div class="bl12_r2cimg"><?=$ana['img']?></div>
								<h6 class="bl12_r2cic"><?=$ana['txt1']?></h6>
							</div>
						<? endwhile ?>
					</div>
					<div class="bl12_b" data-aos="fade-up">
						<p><?=t::w('bl12_b')?></p>
						<div class="btn disb_zab3"><span><?=t::w('Get a discount')?></span></div>
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

		<? if ($site_set['bl10']): ?>
			<div class="bl10">
				<div class="bl10_c" data-aos="fade-up">
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
		
	<!-- end body -->
	</div>

	<? if ($site_set['footer'] == true): ?>
		<footer class="footer">
			<div class="bl_c">
				<div class="footer_b">
					<div class="footer_bl">© <?=$site['name']?>, 2024</div>
					
					<div class="footer_br">
						<a href="https://gprog.kz" target="_blank" class="gprog_bl">
							<span>#gprog-та</span>
							<div class="gprog_heart"><i class="fas fa-heart"></i></div>
							<span>жасалған</span>
							<div class="gprog_ab">
								<div class="gprog_lg"><div class="lazy_img" data-src="https://gprog.kz/assets/img/logo/logo.png"></div></div>
								<div class="gprog_h">G prog</div>
								<div class="gprog_p">Шипажайға арнап сайт жасатыңыз</div>
							</div>
						</a>
					</div>

				</div>
			</div>
		</footer>
	<? endif ?>

	<!--  -->
	<? if ($site['metrika'] != null): ?> <noscript><div><img src='https://mc.yandex.ru/watch/<?=$site['metrika']?>' style='position:absolute; left:-9999px;'/></div></noscript> <? endif ?>
	<? if ($site['pixel'] != null): ?> <noscript><img height='1' width='1' style='display:none' src='https://www.facebook.com/tr?id=<?=$site['pixel']?>&ev=PageView&noscript=1'/></noscript> <? endif ?>

	<!-- main js -->
	<script src="/assets/js/norm.js?v=<?=$ver?>"></script>
	<? foreach ($js as $i): ?> <script src="/assets/js/<?=$i?>.js?v=<?=$ver?>"></script> <? endforeach ?>

</body>
</html>

	<? include 'modal.php'; ?>