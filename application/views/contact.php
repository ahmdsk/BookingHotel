<!-- Map Begin -->
<div class="map">
    <?= html_entity_decode($instansi->maps_instansi) ?>
</div>
<!-- Map End -->

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-5">
                <div class="contact__widget">
                    <div class="contact__widget__item">
                        <h4>Hubungi Kami</h4>
                        <ul>
                            <li><?= $instansi->notelp ?></li>
                            <li><?= $instansi->email ?></li>
                        </ul>
                    </div>
                    <div class="contact__widget__item">
                        <h4>Alamat</h4>
                        <p><?= $instansi->alamat ?></p>
                    </div>
                    <!-- <div class="contact__widget__time">
                        <h4>Opentime</h4>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="contact__widget__time__item">
                                    <ul>
                                        <li>Monday - Friday</li>
                                        <li><span>8 am - 9 pm</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="contact__widget__time__item">
                                    <ul>
                                        <li>Saturday - Sunday</li>
                                        <li><span>8 am - 9 pm</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 col-md-6 col-sm-7">
                <div class="contact__form">
                    <h2>Your question?</h2>
                    <form action="<?= base_url('admin/masukan/add') ?>" method="post">
                        <input type="text" placeholder="Your Name" name="nama">
                        <input type="text" placeholder="Email" name="email">
                        <textarea placeholder="Your Message" name="msg"></textarea>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->