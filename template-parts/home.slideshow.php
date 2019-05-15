<section id="home-header" class="position-relative width-100" data-magellan-target="home-header">

    <?php
        get_template_part( 'template-parts/home.topbar' );

        get_template_part( 'template-parts/home.menu.top' );
    ?>

    <div id="home-slideshow" class="grid-container position-relative">
        <div class="grid-x grid-padding-x">
            <div class="cell small-12">
                <div class="slide-content overflow-x-hidden" role="region" aria-label="Favorite Space Pictures">
                    <ul class="slide-container cycle-slideshow"
                        data-cycle-fx="fade"
                        data-cycle-timeout="5000"
                        data-cycle-slides="> li"
                        data-cycle-prev="#prev-slide"
                        data-cycle-next="#next-slide"
                        data-cycle-pager=".slide-pager"
                        data-cycle-pager-template="<span></span>"
                    >
                        <li class="is-active slide-slide" data-product="CG Cargo">
                            <div class="width-100 text-center large-text-left slide-text">
                                <h2 class="margin-bottom-0">CG 125 Cargo</h2>
                                <h4 class="margin-bottom-1">Uma máguina de trabalhar</h4>
                                <p class="margin-bottom-0">
                                    <a href="#" data-toggle="modelForm" class="button margin-bottom-0">Tenho interesse</a>
                                </p>
                            </div>
                            <div class="width-100 text-center large-text-right">
                                <figure class="slide-figure display-inline-block">
                                    <img class="slide-image slide-img" src="assets/img/slide1.png" alt="Space">
                                </figure>
                            </div>
                        </li>

                        <li class="slide-slide" data-product="CG Cargo">
                            <div class="width-100 text-center large-text-left slide-text">
                                <h2 class="margin-bottom-0">CG 125 Cargo</h2>
                                <h4 class="margin-bottom-1">Uma máguina de trabalhar</h4>
                                <p class="margin-bottom-0">
                                    <a href="#" data-toggle="modelForm" class="button margin-bottom-0">Tenho interesse</a>
                                </p>
                            </div>
                            <div class="width-100 text-center large-text-right">
                                <figure class="slide-figure display-inline-block">
                                    <img class="slide-image slide-img" src="assets/img/slide2.png" alt="Space">
                                </figure>
                            </div>
                        </li>

                        <li class="slide-slide" data-product="CG Cargo">
                            <div class="width-100 text-center large-text-left slide-text">
                                <h2 class="margin-bottom-0">CG 125 Cargo</h2>
                                <h4 class="margin-bottom-1">Uma máguina de trabalhar</h4>
                                <p class="margin-bottom-0">
                                    <a href="#" data-toggle="modelForm" class="button margin-bottom-0">Tenho interesse</a>
                                </p>
                            </div>
                            <div class="width-100 text-center large-text-right">
                                <figure class="slide-figure display-inline-block">
                                    <img class="slide-image slide-img" src="assets/img/slide3.png" alt="Space">
                                </figure>
                            </div>
                        </li>

                        <li class="slide-slide" data-product="CG Cargo">
                            <div class="width-100 text-center large-text-left slide-text">
                                <h2 class="margin-bottom-0">CG 125 Cargo</h2>
                                <h4 class="margin-bottom-1">Uma máguina de trabalhar</h4>
                                <p class="margin-bottom-0">
                                    <a href="#" data-toggle="modelForm" class="button margin-bottom-0">Tenho interesse</a>
                                </p>
                            </div>
                            <div class="width-100 text-center large-text-right">
                                <figure class="slide-figure display-inline-block">
                                    <img class="slide-image slide-img" src="assets/img/slide4.png" alt="Space">
                                </figure>
                            </div>
                        </li>

                        <li class="slide-slide" data-product="CG Cargo">
                            <div class="width-100 text-center large-text-left slide-text">
                                <h2 class="margin-bottom-0">CG 125 Cargo</h2>
                                <h4 class="margin-bottom-1">Uma máguina de trabalhar</h4>
                                <p class="margin-bottom-0">
                                    <a href="#" data-toggle="modelForm" class="button margin-bottom-0">Tenho interesse</a>
                                </p>
                            </div>
                            <div class="width-100 text-center large-text-right">
                                <figure class="slide-figure display-inline-block">
                                    <img class="slide-image slide-img" src="assets/img/slide5.png" alt="Space">
                                </figure>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="slide-controls">
        <a href="#" id="prev-slide" title="Anterior"><i class="fas fa-chevron-left"></i></a>
        <a href="#" id="next-slide" title="Próximo"><i class="fas fa-chevron-right"></i></a>
    </div>

    <div class="slide-pager"></div>
    <div class="mask-black position-absolute width-100 height-100"></div>
</section>