
<?php $this->load->view(Svw.'layouts/head');?>
<?php $this->load->view(Svw.'layouts/header');?>


<div class="container">
			<div class="page-breadcrumbs">
				<h1 class="section-title title"> “Chip Azərbaycan” – sizin yeni və daimi texnobələdçiniz </h1>
			</div>
			<div class="  ">
				<div class="row">
					<div class="col-md-6 col-sm-12 content-section">
						<div class="about-us-content">
							<h2></h2>
							<p>Azərbaycan dilində ilk texnologiya jurnalı olan “Chip”in məqsədi bütün texnologiya, IT şirkətlərini bir araya toplayaraq, texnologiya sahəsində olan yeniliklərdən birlikdə xəbər tutmaqdır.Kompüter, proqramlaşdırma, sosial şəbəkə, bir sözlə, texnologiyaya dair praktik məqalələri iləzəngin olan “Chip” jurnalında sizin üçün maraqlı olan mövzularıgörə bilərsiniz.</p>

							<p> “Chip” jurnalı təkcə informasiya baxımından deyil, sosial və iqtisadi layihələrin keçirilməsi, şirkətlərin yeni biznes əlaqələrinin qurulması və inkişaf etdirilməsi, eyni zamanda da təhsil müəssisələrində ixtisaslaşmış kadr ehtiyatlarının yaradılmasında xüsusilə faydalı olacağına əmindir.</p>
							<p>İlk sayı çapdan çıxan jurnal rübdə 1 dəfə olmaqla ildə 4 dəfə oxucularının görüşünə gələcək. Jurnal artıq bir çox şirkətlərin, hotellərin,eyni zamanda orta və ali təhsil müəssisələrinin abunəliyini qazanmışdır.</p>
							<b> Redaksiya heyəti<br>

							Baş redaktor: Xəyalə Nəsirli <br>

							Redaktor: Sevinc Baba-zadə<br>

							Korrektor: Sevinc Baba-zadə<br>

							Dizanyerlər:  Ceyhun Bagiyev, Teymur Fərziyev<br>

							Nəşriyyat: Maxofset<br>

							Redaksiya ünvanı: Nərimanov ray., Əhməd rəcəbli 156 (Aynalı plaza)<br>

							Email: info@chip.az<br>
							Tel: (012) 555 22-73  (055) 213  43-61</b>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 image-section">
						<!-- <div class="about-us-image">
							<img class="img-responsive" src="<?=base_url('assets/site/')?>images/chipreklamveren.png" alt="" />
						</div> -->
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<img class="img-responsive" src="<?=base_url('assets/uploads/')?>chipjournal/chipqirmizi.png" alt="" />
							</div>
							<div class="col-md-4 col-sm-4">
								<img class="img-responsive" src="<?=base_url('assets/uploads/')?>chipjournal/chipgoy.png" alt="" />
							</div>
							<div class="col-md-4 col-sm-4">
								<img class="img-responsive" src="<?=base_url('assets/uploads/')?>chipjournal/chipyashil.jpg" alt="" />
							</div>
						</div> <br>
						<p class="about-us-content">Jurnala abunə olmaq üçün aşaqıda göstərilən   ad, soyad, telefon və ünvan xanalarını doldurub göndərmək kifayətdir. Kuryer məkana çatdırılma edərkən abunə olacaq hər bir kəs üçün illik, yaxud da rüblük abunə müqaviləsi təqdim olunacaqdır.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="message-box">
							<h1 class="section-title title">Abunəlik formu</h1>
							<form id="comment-form" name="comment-form" action="<?=site_url('abuneol')?>" method="post">

								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="name">Ad*</label>
											<input type="text" name="name" class="form-control" maxlength="50" required="required">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="email">Soyad*</label>
											<input type="text" name="lastname" class="form-control" maxlength="50" required="required">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="subject">Email*</label>
											<input type="email" name="email" class="form-control" maxlength="100">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="subject">Telefon*</label>
											<input type="text" name="phone" class="form-control" maxlength="50">
										</div>
									</div>
									<?php csrfToken();?>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="comment" >Ünvan*</label>
											<textarea name="adress" id="comment" required="required" maxlength="500" class="form-control" rows="5"></textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="comment" >Əlavə Qeydləriniz </label>
											<textarea name="comment" id="comment"   maxlength="500" class="form-control" rows="5"></textarea>
										</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Abunə ol</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

<?php flashread();?>

		</div><!--/.container-->
	</div><!--/#main-wrapper-->

<?php $this->load->view(Svw.'layouts/footer');?>
<?php $this->load->view(Svw.'layouts/foot');?>
