<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vincent Lahaye • {{ __('Ingénieur en Informatique')}}</title>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body style="background: #f7fafc">
        <div class="top-content" style="background: linear-gradient(180deg, #9F009A 0%, #356EFF 100%);">
            <header class="py-5 px-3 text-center" style="position: relative; z-index: 2">
                <img class="d-block mx-auto"
                    srcset="/images/Avatar@2x.png 2x"
                    src="/images/Avatar.png"
                    alt="Vincent Lahaye" />

                <h1 class="hh1 d-block" style="margin-bottom: 0">Vincent Lahaye</h1>
                <h2 class="hh2 d-block" style="margin-top: 0">{{ __('Ingénieur en Informatique')}}</h2>

                <div class="d-flex d-center social">
                    <a href="https://www.linkedin.com/in/vincent-lahaye/" target="_blank">
                        <div class="icon linkedin"></div>
                    </a>

                    <a href="https://www.twitter.com/V1nceLH/" target="_blank">
                        <div class="icon twitter"></div>
                    </a>
                </div>
            </header>

            <div class="blank" style="position: relative; z-index: 2"></div>

            <section class="darken-bg text-center" style="position: relative; z-index: 2">
                <h3>Vous avez un projet Web ?</h3>
                <div class="pb-3">Remplissez ce petit formulaire :</div>
                <a href="#" class="btn bg-violet">
                    <i class="icon google-form"></i>
                    Définition de Projet
                </a>
            </section>

            <section class="text-center" style="position: relative; z-index: 2">
                <h3>Vous avez un besoin ou un problème particulier ?</h3>
                <div class="pb-3">Contactez-moi maintenant :</div>
                <a href="mailto:vlh.agency@gmail.com" class="btn bg-orange">
                    <i class="icon gmail"></i>
                    vlh.agency@gmail.com
                </a>
            </section>

            <picture>
                <source media="(max-width: 499px)" srcset="/images/BG-sm.jpg, /images/BG-sm@2x.jpg 2x, /images/BG-sm@3x.jpg 3x">
                <source media="(min-width: 500px)" srcset="/images/BG-lg.jpg, /images/BG-lg@2x.jpg 2x">
                <img src="/images/BG-lg.jpg" class="image-as-bg" alt="Vincent's desktop with two screens and a chair">
            </picture>
        </div>

        <section role="main" class="px-2">
            <h3 class="title2">Domaines de compétence</h3>
            <div class="title-underline"></div>

            <div class="domain-container">
                <div class="domain bg-blue">
                    <div class="domain-left">
                        <h4 class="domain-title">Product Design</h4>
                        <div class="domain-desc">Auto-didacte et mordu par Figma depuis peu, 2020.</div>
                    </div>
                    <div class="domain-right">
                        <i class="icon apple"></i>
                        <i class="icon figma"></i>
                        <i class="icon dribbble"></i>
                    </div>
                </div>

                <div class="domain bg-green">
                    <div class="domain-left">
                        <h4 class="domain-title">Marketing & Analytics</h4>
                        <div class="domain-desc">Depuis 2014. Double cursus, très utile.</div>
                    </div>
                    <div class="domain-right">
                        <i class="oxford-brookes-uni"></i>
                    </div>
                </div>

                <div class="domain bg-purple">
                    <div class="domain-left">
                        <h4 class="domain-title">Data Engineering</h4>
                        <div class="domain-desc">Depuis 2016. Voir mon projet Keedata.</div>
                    </div>
                    <div class="domain-right">
                        <i class="supinfo-uni"></i>
                    </div>
                </div>

                <div class="domain bg-purple">
                    <div class="domain-left">
                        <h4 class="domain-title">OPS & Infrastructure</h4>
                        <div class="domain-desc">Depuis 2010.</div>
                    </div>
                    <div class="domain-right">
                        <i class="supinfo-uni"></i>
                    </div>
                </div>

                <div class="domain bg-purple">
                    <div class="domain-left">
                        <h4 class="domain-title">Software Engineering</h4>
                        <div class="domain-desc">Depuis 2007 en Auto-didacte • Et 2010 en Freelance.</div>
                    </div>
                    <div class="domain-right">
                        <i class="supinfo-uni"></i>
                    </div>
                </div>
            </div>
        </section>

        <section role="main" class="px-2">
            <h3 class="title2">Mes projets</h3>
            <div class="title-underline"></div>

            <div class="project-container">
                <div class="project project-keedata">
                    <div class="project-left">
                        <img class="d-inline-block"
                            srcset="/images/RecoContent@2x.png 2x"
                            src="/images/RecoContent.png"
                            alt="Contenu recommandé"
                            style="width: 200px" />
                    </div>
                    <div class="project-right">
                        <h4 class="project-title" style="margin-bottom: 0">
                            <i class="keedata" aria-label="Keedata"></i>
                        </h4>
                        <div class="keedata-desc" style="margin-bottom: 30px">Easy-to-maintain Data Pipelines</div>
                        <a href="https://www.keedata.io" rel="Easy-to-maintain Data Pipelines" class="link">keedata.io</a>
                    </div>
                </div>
            </div>
        </section>

        <section role="complementary" class="insta-section" style="background: #000; color: #FFF;">
            <picture>
                <source media="(max-width: 499px)" srcset="/images/BG-Mountains-sm.jpg, /images/BG-Mountains-sm@2x.jpg 2x, /images/BG-Mountains-sm@3x.jpg 3x">
                <source media="(min-width: 500px)" srcset="/images/BG-Mountains-lg.jpg, /images/BG-Mountains-lg@2x.jpg 2x">
                <img src="/images/BG-Mountains-lg.jpg" class="image-as-bg" alt="Mountains">
            </picture>

            <div style="position: relative; z-index: 2">
                <img class="d-block mx-auto" src="/images/follow-me-on-insta.png" srcset="/images/follow-me-on-insta@2x.png 2x" alt="Follow me on instagram" />
            </div>

        </section>

        <footer style="background: #000;" class="px-2 text-center">
            <a href="mailto:vlh.agency@gmail.com" class="btn bg-orange" style="margin-bottom: 50px">
                <i class="icon gmail"></i>
                vlh.agency@gmail.com
            </a>

            <div class="d-flex d-center social"  style="margin-bottom: 50px">
                <a href="https://www.linkedin.com/in/vincent-lahaye/" target="_blank">
                    <div class="icon linkedin"></div>
                </a>

                <a href="https://www.twitter.com/V1nceLH/" target="_blank">
                    <div class="icon twitter"></div>
                </a>
            </div>

            <img class="d-inline-block" style="margin-right: 50px"
                srcset="/images/Avatar-hello@2x.png 2x"
                src="/images/Avatar-hello.png"
                alt="Vincent saying Goodbye" />
        </footer>

        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
