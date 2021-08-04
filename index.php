<?php

$title = 'Somatik Sound System';
$descr = 'Лейбл, промо-группа, так же известны как “секта Om WiFi”. Изобретатели своего собственного стиля “somatik” – психоделического гибрида bass и замедленного до 90bpm techno'

?>

<?php include 'inc/header.php' ?>

<section class="container-fluid content">
	<div class="container">
		<div class="row">
			<div class="col-12 music text-center">
				<a href="" target="blank" class="store-button bandcamp">
					<div class="overlay"></div>
					<img src="img/stores/bandcamp.png">
				</a>
				<a href="https://soundcloud.com/somatiksoundsystem" target="blank" class="store-button soundcloud">
					<div class="overlay"></div>
					<img src="img/stores/soundcloud.png">
				</a>
				<a href="https://music.yandex.ru/label/1254631" target="blank" class="store-button yandexmusic">
					<div class="overlay"></div>
					<img src="img/stores/yandexmusic.png">
				</a>
			</div>
			<div class="col-12 col-md-10 offset-md-1 video text-center">
				<iframe src="https://vk.com/video_ext.php?oid=-193953825&id=456239152&hash=4a1250a19392288a&hd=1" width="100%" height="360" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="col-12 col-md-10 offset-md-1 social text-center">	
				<a href="https://vk.com/somatik" target="blank" class="social-button vk" data-bs-toggle="tooltip" data-bs-placement="bottom" title="VKontakte"><i class="fab fa-vk"></i></a>
				<a href="https://t.me/somatik" target="blank" class="social-button tg" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Telegram"><i class="fab fa-telegram-plane"></i></a>
				<a href="https://www.instagram.com/somatiksoundsystem/" target="blank" class="social-button in" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Instagram"><i class="fab fa-instagram"></i></a>
			</div>

			<div class="col-12 col-md-6 offset-md-3 vk-widget text-center">
				<script type="text/javascript" src="https://vk.com/js/api/openapi.js?169"></script>
				<!-- VK Widget -->
				<div id="vk_groups"></div>
				<script type="text/javascript">
				VK.Widgets.Group("vk_groups", {mode: 4, wide: 1, height: "500"}, 30712887);
				</script>
			</div>
		</div>
	</div>
</section>	



<?php include 'inc/footer.php' ?>