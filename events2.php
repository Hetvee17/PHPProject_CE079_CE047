<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Bootstrap Web Design</title>
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
                <h1>What's On</h1>
                <!--body content title-->
            </div>
        </div>

        <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <section>
                <div class="container">
                    <div class="date col-md-1">
                        <!--date holder with 1 grid column-->
                        <span class="month">APR</span><br>
                        <!--month-->
                        <hr class="line">
                        <!--css modified horizontal line-->
                        <span class="day">15</span>
                        <!--day-->
                    </div>
                    <div class="col-md-5">
                        <!--image holder with 5 grid column-->
                        <img src="images/birthevent.jpg" class="img-responsive">
                    </div>
                    <div class="subcontent col-md-6">
                        <!--event content holder with 6 grid column-->
                        <h1 class="title">It's my birthday</h1>
                        <!--event content title-->
                        <p class="location">
                            <!--event content location-->
                            Flambe , pune
                        </p>
                        <p class="definition">
                            <!--event content definition-->
                            hi , I'M sara .....I really can't believe that finally it's my 18th birthday. and i want it perfect like a dream .
                        </p>
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
            <!--event content-->
            <section>
                <div class="container">
                    <div class="date col-md-1">
                        <!--date holder with 1 grid column-->
                        <span class="month">JAN</span><br>
                        <!--month-->
                        <hr class="line">
                        <!--css modified horizontal line-->
                        <span class="day">21</span>
                        <!--day-->
                    </div>
                    <div class="col-md-5">
                        <!--image holder with 5 grid column-->
                        <img src="images/meeting2.jpg" class="img-responsive">
                    </div>
                    <div class="subcontent col-md-6">
                        <!--event content holder with 6 grid column-->
                        <h1 class="title">I'M THE BOSS</h1>
                        <!--event content title-->
                        <p class="location">
                            <!--event content location-->
                            UrbanXchange Private Dining Room, The Rocks 12 Argyle Street , GOA
                        </p>
                        <p class="definition">
                            <!--event content definition-->
                            It's Mr sharma's first day on office as a BOSS .... He wants to show his power to his managers to discuss new stuff. he wants to through this party as a victory and a new beginning for that company .
                        </p>
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
                    <div class="date col-md-1">
                        <!--date holder with 1 grid column-->
                        <span class="month">April</span><br>
                        <!--month-->
                        <hr class="line">
                        <!--css modified horizontal line-->
                        <span class="day">20</span>
                        <!--day-->
                    </div>
                    <div class="col-md-5">
                        <!--image holder with 5 grid column-->
                        <img src="images/wedevent.jpg" class="img-responsive">
                    </div>
                    <div class="subcontent col-md-6">
                        <!--event content holder with 6 grid column-->
                        <h1 class="title">Our 2nd Anniversary</h1>
                        <!--event content title-->
                        <p class="location">
                            <!--event content location-->
                            Lalitha Mahal Palace
                        </p>
                        <p class="definition">
                            <!--event-->
                            Made MEMORIES in our 2nd Anniversary
                            We initially booked tables in the bar so I was thrilled when we showed up being a beautiful day and we had been moved out to the decking area next to the river. Even better because my boyfriend couldn’t see all his friends until we turned the corner :) we were looked after all day by Gotham (our waiter) who could not have been more attentive if he tried. It’s always been one of our favourite restaurants for quality of food and booze and this day was no different even with such a big group of us to serve. Everything was on tab which made everything really easy so I could just settle up at the end. Perfect end to a perfect weekend. Thanks for having us guys, we’ll be back.
                        </p>
                        <hr class="customline2">
                        <!--css -->
                    </div>
                    <!--subcontent div-->
                </div>
                <!--container div-->
            </section>
        </div>
        <!--row div-->


        <?php require 'utils/footer.php'; ?>
        <!--footer -->
</body>

</html>