<?php include("head.inc");
$page->edit(true);
$banner_image = $pages->get('/page_banner/');

?>
<?php include('banner.inc') ?>

<section class="contact-section pb-100 pt-100" id="content">
    <div class="container">
        <div class="section-title text-center">
            <h2><?= $page->section_title ?></h2>
            <p><?= $page->sub_title ?></p>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="row">
                    <div class="col-lg-12 col-sm-6">
                        <div class="contact-card">
                            <i class="fas fa-mobile-alt"></i>
                            <ul>
                                <li>
                                    <a href="tel:">
                                        <?= $page->number ?>
                                    </a>
                                </li>
                                <li>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-6">
                        <div class="contact-card">
                            <i class="far fa-envelope"></i>
                            <ul>
                                <li>
                                    <a href="#">
                                        <?= $page->email ?>

                                    </a>
                                </li>
                                <li>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-6 offset-lg-0 offset-sm-3">
                        <div class="contact-card">
                            <i class="fas fa-map-marker-alt"></i>
                            <ul>
                                <li>
                                    <?= $page->location ?>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
    <div class="contact-area">
        <h3>Discutons</h3>
        <form id="contactForm" novalidate="true">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" name="name" id="name" class="form-control" required="" data-error="Veuillez entrer votre nom" placeholder="Votre nom">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control" required="" data-error="Veuillez entrer votre email" placeholder="Votre e-mail">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="number" name="number" id="number" class="form-control" required="" data-error="Veuillez entrer votre numéro" placeholder="Numéro de téléphone">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" name="subject" id="subject" class="form-control" required="" data-error="Veuillez entrer votre sujet" placeholder="Votre sujet">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <textarea name="message" class="message-field" id="message" rows="5" required="" data-error="Veuillez taper votre message" placeholder="Écrire un message"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <button type="submit" class="default-btn contact-btn disabled" style="pointer-events: all; cursor: pointer;">
                        Envoyer le message
                    </button>
                    <div id="msgSubmit" class="h3 alert-text text-center hidden"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </form>
    </div>
</div>

        </div>
    </div>
</section>

<?php include("foot.inc"); ?>