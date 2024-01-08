<!-- Footer -->
	<footer class="footer">
		<div class="bl_c">
			<div class="foot_c">
				<div class="foot_i">
					<div class="foot_logo">
						<a href="/">
							<div class="logo_con lazy_bag" data-src="images/logo.png"></div>
							<div class="logo_txt"><font color="#eee">Санаторий Асыл Булак  <br>Сарыагаш</font></div>
						</a>
					</div>
				</div>
				<div class="foot_i">
					<div class="bl1_sos">
						<a target="_blank" href="/"><div class="bl1_si"><i class="fab fa-instagram"></i></div></a>
						<a target="_blank" href="/"><div class="bl1_si"><i class="fab fa-facebook"></i></div></a>
						<a target="_blank" href="/"><div class="bl1_si"><i class="fab fa-whatsapp"></i></div></a>
					</div>
				</div>
				<div class="foot_i">
					<div class="foot_n">
						<a href="tel:+77784141722"><font color="#eee">+7 (706) 808-50-50</font></a>
						<span>● Звоните, мы сейчас работаем</span>
					</div>
				</div>
			</div>

			<div class="footer_b">
				<div class="footer_bi"><span>© 2023. Все права защищены</span></div>
				<div class="footer_bi2">
					<div class="footer_bic">
						<div class="footer_bici">
							<span>Сарыагаш 2023</span><a target="_blank" href="/">Курортный отдых</a>
						</div>
						<div class="footer_bici footer_bici2">
							<a target="_blank" href="/">Санаторий Сарыагаш</a>
						</div>
					</div>
					<a target="_blank" href="/"><div class="footer_bim lazy_bag" data-src="images/logo.png"></div></a>
				</div>
			</div>
		</div>
	</footer>
 <script src="/telegramform/js/telegramform.js"></script>
  <script src="/telegramform/js/telegramform2.js"></script>
  <script src="/telegramform/js/telegramform3.js"></script>
  <script src="js/func.js"></script>
<script src="js/norm.js"></script>
<script src="js/main.js"></script>
  <script>

    // Кастомизация поля с файлом. Подробнее тут: https://smartlanding.biz/stilizaciya-input-type-file.html
    let inputs = document.querySelectorAll('.contact-form__input_file');
    Array.prototype.forEach.call(inputs, function (input) {
      let label = input.nextElementSibling,
        labelVal = label.querySelector('.contact-form__file-text').innerText;

      input.addEventListener('change', function (e) {
        let countFiles = '';
        if (this.files && this.files.length >= 1)
          countFiles = this.files.length;

        if (countFiles)
          label.querySelector('.contact-form__file-text').innerText = 'Выбрано файлов: ' + countFiles;
        else
          label.querySelector('.contact-form__file-text').innerText = labelVal;
      });
    });

  </script>

  <!-- Маска ввода номера телефона. Подробнее тут: https://smartlanding.biz/maski-vvoda-telefona.html -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  <script>
    $(function () {
      $('input[type="tel"]').mask('+7(000)000-00-00');
    });
  </script>	
	
	
	