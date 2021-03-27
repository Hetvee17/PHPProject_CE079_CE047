<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>That event</title>
    <?php require 'utils/styles.php'; ?>
    <!--css links. file found in utils folder-->
    <?php require 'utils/scripts.php'; ?>
    <!--js links. file found in utils folder-->
</head>

<body>
    <?php require 'utils/header.php'; ?>
    <!--header content. file found in utils folder-->
    <div class="content">
        <!--body content holder-->
        <div class="container">
            <div class="col-md-12">
                <!--body content title holder with 12 grid columns-->
                <h1>What we organize</h1>
                <!--body content title-->
            </div>
        </div>

        <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
        </div>

        <div class="row">
            <!--wedding content-->
            <section>
                <div class="container">
                    <div class="col-md-6">
                        <!--image holder with 6 grid columns-->
                        <img src="images/wedding2.jpg" class="img-responsive">
                    </div>
                    <div class="subcontent col-md-6">
                        <!--Text holder with 6 column grid-->
                        <h1>Wedding</h1>
                        <!--title-->
                        <p><b>
                                <!--content-->
                                ELEGANTLY DESIGNED, ECLECTICALLY CURATED, IMPECCABLY PLANNED...
                            </b>
                        <p>Nothing is as special as Wedding Day in couple's life. Our mission is to create refined and elegant boutique weedding's at perfect location for ypur sepcial day.</p>
                        </p>
                        <hr class="customline">
                        <!--css modified horizontal line-->
                        <button type="button" class="btn btn-default btn-lg">
                            <!--view event button (no function implemented)-->
                            View Events <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            <!--arrow right glyphicon-->
                        </button>
                    </div>
                    <!--subcontent div-->
                </div>
                <!--container div-->
            </section>
        </div>
        <!--row div-->

        <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
        </div>

        <div class="row">
            <section>
                <div class="container">
                    <div class="col-md-6">
                        <img src="images/birthday2.jpg" class="img-responsive">
                    </div>
                    <div class="subcontent col-md-6">
                        <p>Birthday</p>
                        <p>
                            <!--content-->
                            <b>A new chapter of life for you , begins TODAY. <br> Say GOODBYE to your PAST and pave the way fro FUTURE.</b>
                        <P>We make sure that all your wish come true so you can kick back, drink up, enjoy your special day and start a new chapter of your life.</P>
                        </p>
                        <hr class="customline">
                        <button type="button" class="btn btn-default btn-lg">
                            <!--view event button (no function implemented)-->
                            View Events <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            <!--arrow right glyphicon-->
                        </button>
                    </div>
                    <!--subcontent div-->
                </div>
                <!--container div-->
            </section>
        </div>
        <!--row div-->
        <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
        </div>

        <div class="row">
            <section>
                <div class="container">
                    <div class="col-md-6">
                        <!--image holder with 6 grid columns-->
                        <img src="images/meeting2.jpg" class="img-responsive">
                    </div>
                    <div class="subcontent col-md-6">
                        <!--Text holder with 6 column grid-->
                        <h1>Meeting</h1>
                        <!--title-->
                        <p>
                            <!--content-->
                            <b>Alone we can do so LITTLE; <br> Together we can do SO MUCH.</b>
                        <p>From formal, to not-so-formal, our flexible event spaces can cater to your every need for meetings and conferences large or small, and our dedicated event team can assist with all aspects of your event planning.</p>
                        </p>
                        <hr class="customline">
                        <!--css modified horizontal line-->
                        <button type="button" class="btn btn-default btn-lg">
                            <!--view event button (no function implemented)-->
                            View Events <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            <!--arrow right glyphicon-->
                        </button>
                    </div>
                    <!--subcontent div-->
                </div>
                <!--container div-->
            </section>
        </div>
        <!--row div-->
    </div>
    <!--body content div-->
    <?php require 'utils/footer.php'; ?>
    <!--footer content. file found in utils folder-->
</body>

</html>