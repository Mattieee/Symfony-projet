{% extends 'base.html.twig' %}
{% block main %}
    <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
        <span class="site-heading-upper text-primary mb-3">Article</span>
    </h1>

    <section class="page-section clearfix">
        <div class="container">
            <div class="intro">
                <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="bundles/img/intro.jpg" alt="">
                <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                    <a  href="/article" style="font-size: 70px;color: red;right: 82%;position: absolute;"><</a>
                    <a  href="/article3" style="font-size: 70px;color: red;left: 82%;position: absolute;">></a>
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">Nespresso Coffee</span>
                        <span class="section-heading-lower">Worth Drinking</span>
                    </h2>
                    <p <?php echo "Hello world!"; ?>
                    </p>
                    <div class="intro-button mx-auto">
                        <a class="btn btn-primary btn-xl" href="#">Our shop !</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>

{% endblock %}