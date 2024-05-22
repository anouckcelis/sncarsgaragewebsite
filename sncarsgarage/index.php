<?php
include 'header.php';
?>

<main>
        <div style="position: relative;">
            <img src="assets/images/afbeelding1.jpg" class="beginafbeelding"  style="width:100%; filter: blur(1.5px);">
        
            <div class="centered">
                <h2 class="sec-title__title begintitel">SN Cars</h2>
                <br>
                <br>
                <h3 class="sec-title__tagline begintagline" style="color:white;">De garage voor al uw onderhoud</h3>
                <br>
                <br>
                <hr style="color: white;">
                <button class="popup-with-form thm-btn " onclick="startCall('+3215681166')">Bel ons</button>
                <button class="popup-with-form thm-btn " onclick="window.open('https://sncars.wacs.online/op/sncars/index.php', '_blank')">Afspraak maken</button>
            </div>
        </div>
        

        <!-- Welkom container -->
    <div class="welkomcontainer" id="welkom">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="welkominfo">
                        <h2 class="sec-title__title ">Welkom bij <strong class="welkomtitle">SN Cars</strong></h2>
                        <br>
                        <p>
                        <strong>Stefan Nas</strong> heeft al vele jaren een passie voor auto's.
                        Stefan is al actief in de autosector sinds 1995. In 2009 besloot hij om als zelfstandige in bijberoep zijn 
                        eigen garage te starten. Tot 2011 voerde hij zijn bijberoep uit vanuit huis. Vanaf dat moment konden 
                        klanten zijn diensten vinden in de vestiging te Mechelen. 
                        <br>
                        Het succes van zijn onderneming groeide gestaag, wat leidde tot de omvorming van zijn bijberoep tot hoofdberoep 
                        als autotechnicus. Dankzij de geboekte successen is SN Cars gegroeid tot een volwaardige en compleet nieuwe garage 
                        gelegen te Gestelhoflei 14F in Bonheiden. Hij streeft naar voortdurende groei en klanttevredenheid en heeft al meer dan voldoende 
                        kennis om van een deskundig iemand te spreken.
                        </p>
                        <a href="#garage" class="popup-with-form thm-btn thm-start-btn" style="text-decoration:none">Onze garage</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                <div class="welkom">
                    <div class="afbeeldingwelkom">
                    <img src="assets/images/welkom.jpg" alt="STEFAN NAS">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- einde welkom container -->
          <!--Services -->
          <section id="diensten" class="services-one">
            <div class="services-one__bg slideInDown" data-delay="100ms" data-duration="2500ms"></div>
            <div class="container">
                <div class="sec-title text-center">
                    <span class="sec-title__tagline">Onze diensten</span>
                    <h2 class="sec-title__title">Wat bieden wij aan?</h2>
                </div>
                <div class="row">
                    <!--Start Single Services One-->
                    <div class="col-xl-4 col-lg-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="services-one__single">
                            <div class="services-one__single-img">
                                <div class="services-one__single-img-inner">
                                    <img src="assets/images/services/deskundigherstel.jpg" alt="" />
                                </div>
                            </div>
                            <div class="services-one__single-content text-center">
                                <h3 class="sec-title__title">Deskundig herstel</h3>
                                <p> Op ons kunt u rekenen voor deskundig herstel van zowel personenwagens als bedrijfswagens,
                                    ongeacht het merk. Met onze uitgebreide ervaring en toewijding zorgen we ervoor dat uw voertuig
                                    snel weer op de baan is.
                                </p>
                                <a href="#garage" class="read-more-btn"><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--End Single Services One-->

                    <!--Start Single Services One-->
                    <div class="col-xl-4 col-lg-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                        <div class="services-one__single">
                            <div class="services-one__single-img">
                                <div class="services-one__single-img-inner">
                                    <img src="assets/images/services/uitgebreidedienstverlening.jpg" alt="" />
                                </div>
                            </div>
                            <div class="services-one__single-content text-center">
                                <h3 class="sec-title__title">Uitgebreide hulpverlening</h3>
                                <p>Wij bieden een uitgebreid scala aan diensten, waaronder mechanische en elektronische herstellingen, onderhoud en keuringsvoorbereiding voor zowel auto's als bestelwagens.</p>
                                <a href="#garage" class="read-more-btn"><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--End Single Services One-->

                    <!--Start Single Services One-->
                    <div class="col-xl-4 col-lg-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                        <div class="services-one__single">
                            <div class="services-one__single-img">
                                <div class="services-one__single-img-inner">
                                    <img src="assets/images/services/klanttevredenheid.jpeg " alt="" />
                                </div>
                            </div>
                            <div class="services-one__single-content text-center">
                                <h3 class="sec-title__title">Klanttevredenheid</h3>
                                <p>Bij SN Cars streven we naar niets minder dan volledige klanttevredenheid. We doen er alles aan om dit te bereiken op een eerlijke en correcte manier.</p>
                                <br>
                                <a href="#recensies" class="read-more-btn"><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--End Single Services One-->

                    <!--Start Single Services One-->
                    <div class="col-xl-4 col-lg-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="services-one__single">
                            <div class="services-one__single-img">
                                <div class="services-one__single-img-inner">
                                    <img src="assets/images/services/betrouwbareondersteuning.jpg" alt="" />
                                </div>

                            </div>
                            <div class="services-one__single-content text-center">
                                <h3 class="sec-title__title">Betrouwbare ondersteuning</h3>
                                <p>Ons team staat altijd paraat met deskundig advies en praktische hulp, dit alles tegen de beste prijs-kwaliteitverhouding.</p>
                                <br>
                                <a href="#contact" class="read-more-btn"><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--End Single Services One-->


                    <!--Start Single Services One-->
                    <div class="col-xl-4 col-lg-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                        <div class="services-one__single">
                            <div class="services-one__single-img">
                                <div class="services-one__single-img-inner">
                                    <img src="assets/images/services/uwwagenonzezorg.jpeg" alt="" />
                                </div>
                            </div>
                            <div class="services-one__single-content text-center">
                                <h3 class="sec-title__title">Uw Wagen, Onze Zorg</h3>
                                <p>Uw wagen is bij SN Cars altijd in goede handen. Wij zorgen voor uw voertuig alsof het ons eigen is, met de grootst mogelijke zorg en expertise.</p>
                                <a href="#garage" class="read-more-btn"><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--End Single Services One-->

                </div>
            </div>
        </section>
        <!--Services One End-->

  <!--garage contrainer-->
      <div id="garage" class="garagecontainer">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-6">
              <div class="garage">
                <div class="afbeeldinggarage">
                <span class="sec-title__tagline">Bij ons</span>
                  <h2 class="sec-title__title">Garage</h2>
                  <br>
                  <img src="assets/images/afbeelding5.jpg" alt="GARAGE TE BONHEIDEN">
                </div>
              </div>
            </div>
              <div class="col-xl-6 col-lg-6">
                  <div class="garageinfo">
                      <p>
                        Bij SN Cars aan de Gestelhoflei 14F te Bonheiden bent u altijd welkom voor onderhoud en herstellingen aan personenwagens en lichte bedrijfswagens van alle automerken.
                        Dankzij de opgedane ervaring en passie voor wagens verzekert SN Cars u het hoogste vakmanschap en een snelle en super vriendelijke service.
                        De garage van SN Cars is uitgerust met de laatste programma's, toestellen en apparatuur om met de juiste tools en wisselstukken uw auto volgens de regels van de kunst te herstellen.
                        Onze specialiteit is de vervanging van distributieriemen. Omdat de uurlonen bij ons lager liggen, is uw auto voor een lagere prijs hersteld en nog snel ook. 
                        Dat is wat wij onder service begrijpen!
                      </p>
                  </div>
                  <div class="d-lg-flex appointmentgarage">
                    <div class="appointmentgaragebtn d-lg-block btn-animate appointmentbtnsmartphone">
                        <button class="popup-with-form thm-btn thm-btn-start " onclick="window.open('https://sncars.wacs.online/op/sncars/index.php', '_blank')">Afspraak maken</button>
                      </div>                      
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div id="garage">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="cardgarage">
                  <h3 class="sec-title__title">Onderhoud & Reparatie</h3>
                  <p>
                    SN Cars voert zowel mechanische als elektronische reparaties uit aan uw auto of bestelwagen. 
                    Onze specialiteit omvat ook het onderhoud en de reparatie van airconditioningsystemen. 
                    <br>
                    <br>
                    <strong>LET OP!</strong>
                    <br>
                    Wij bieden geen carrosserieherstellingen aan. 
                    <br>
                    <br>
                    Indien u een Alfa Romeo, Audi, BMW, Citroën, Dacia, Fiat, Ford, Hyundai, Jeep, Kia, Land Rover, Mercedes, 
                    Mitsubishi, Opel, Seat, Skoda, Peugeot, Renault, Toyota, Volkswagen, Volvo, of een ander merk bezit en 
                    op zoek bent naar een betrouwbare garage voor reparatie en/of onderhoud, dan bent u bij ons aan het juiste adres.
                    <br>
                    <br>
                    Wij garanderen de beste prijzen en een uitstekende service!
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="cardgarage">
                  <h3 class="sec-title__title">Distributieriem</h3>
                  <h4>één van onze specialiteiten</h4>
                  <p>
                    Is het tijd om de distributieriem van uw voertuig te vervangen, maar bent u niet zeker? 
                    Laat het ons weten, en wij bieden deskundig advies en professionele service bij het vervangen van dit cruciale onderdeel.
                    <br>
                    <br>
                    Bij SN Cars beschikken we over de vereiste documentatie en gereedschappen om deze taak uit te voeren volgens de specificaties van de fabrikant van uw voertuig. 
                    <br>
                    <br>
                    U kunt vertrouwen op onze expertise en toewijding aan kwaliteit wanneer het gaat om het onderhoud van uw auto.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- einde garage -->
        <br>

         <!--Testimonials One Start-->
         <section id="recensies" class="testimonials-one " data-jarallax data-speed="0.2" data-imgPosition="50% 0%">
            <div class="container">
                <div class="row">
                    <!--Start Testimonials One Left-->
                    <div class="col-xl-4">
                        <div class="testimonials-one__left">
                            <div class="testimonials-one__left-bg">
                            </div>
                            <div class="sec-title">
                                <span class="sec-title__tagline">Recensies</span>
                                <h2 class="sec-title__title">Wat ze over ons <br> zeggen</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="testimonials-one_right">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="testimonials-one__carousel owl-carousel">
                                        <div class="testimonials-one__single item">
                                            <div style="height:170px !important;">
                                                <p class="testimonials-one__single-text">SN Cars biedt altijd uitstekende service! Stefan is vriendelijk en zeer deskundig. Reparaties worden perfect uitgevoerd tegen een redelijke prijs. Ik hoop dat je nog veel meer tevreden klanten krijgt, Stefan!</p>
                                            </div>
                                            <div class="testimonials-one__single-client-info">
                                                <div class="testimonials-one__single-client-info-img">
                                                    <div class="testimonials-one__single-client-info-img-inner">
                                                        <img src="assets/images/man.png" alt="" />
                                                    </div>
                                                </div>
                                                <div class="testimonials-one__single-client-info-title">
                                                    <h4>Peter Van Boxcel</h4>
                                                    <p>Klant</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonials-one__single item">
                                            <div style="height:170px !important;">
                                                <p class="testimonials-one__single-text">TOP service. Weeral bedankt Stefan! Bij jullie ben ik altijd snel geholpen. Het is altijd tiptop in orde en helemaal niet duur. Online een afspraak inplannen is ook superhandig!</p>
                                            </div>
                                            <div class="testimonials-one__single-client-info">
                                                <div class="testimonials-one__single-client-info-img">
                                                    <div class="testimonials-one__single-client-info-img-inner">
                                                        <img src="assets/images/vrouw.png" alt="" />
                                                    </div>
                                                </div>
                                                <div class="testimonials-one__single-client-info-title">
                                                    <h4>Ingrid Hoste</h4>
                                                    <p>Klant</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonials-one__single item">
                                            <div style="height:170px !important;">
                                                <p class="testimonials-one__single-text">Ik wil je hartelijk bedanken voor je vlotte service, vriendelijke ontvangst en gezellige babbel. Ik was onder de indruk van de netheid en orde in je garage, iets wat ik bij andere garages zelden zie! Nogmaals bedankt en ik kan nu weer veilig de weg op.</p>
                                            </div>
                                            <div class="testimonials-one__single-client-info">
                                                <div class="testimonials-one__single-client-info-img">
                                                    <div class="testimonials-one__single-client-info-img-inner">
                                                        <img src="assets/images/man.png" alt="" />
                                                    </div>
                                                </div>
                                                <div class="testimonials-one__single-client-info-title">
                                                    <h4>Filip Hacour</h4>
                                                    <p>Klant</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonials-one__single item">
                                            <div style="height:170px !important;">
                                                <p class="testimonials-one__single-text">Top service! Deze garage via internet gevonden en absoluut een aanrader. Bij de officiële dealer kreeg ik na diagnose een hoge prijsopgave, maar SN Cars ontdekte dat het 'te vervangen' onderdeel eigenlijk prima was. Binnen een uur gerepareerd voor een fractie van de prijs.</p>
                                            </div>
                                            <div class="testimonials-one__single-client-info">
                                                <div class="testimonials-one__single-client-info-img">
                                                    <div class="testimonials-one__single-client-info-img-inner">
                                                        <img src="assets/images/vrouw.png" alt="" />
                                                    </div>
                                                </div>
                                                <div class="testimonials-one__single-client-info-title">
                                                    <h4>Elke D.</h4>
                                                    <p>Klant</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonials-one__single item">
                                            <div style="height:170px !important;">
                                                <p class="testimonials-one__single-text">Stefan, je bent geweldig! Mijn Porsche rijdt weer perfect dankzij jouw expertise. Zelfs na twee keer bij een Porsche-garage te zijn geweest zonder resultaat, wist jij het probleem snel op te lossen: een afgebroken draad in een stekker. Bedankt voor je vakmanschap en toewijding!</p>
                                            </div>
                                            <div class="testimonials-one__single-client-info">
                                                <div class="testimonials-one__single-client-info-img">
                                                    <div class="testimonials-one__single-client-info-img-inner">
                                                        <img src="assets/images/man.png" alt="" />
                                                    </div>
                                                </div>
                                                <div class="testimonials-one__single-client-info-title">
                                                    <h4>F. Bogaerts</h4>
                                                    <p>Klant</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonials-one__single item">
                                            <div style="height:170px !important;">
                                                <p class="testimonials-one__single-text">Ik kan deze garage aan iedereen aanbevelen. Stefan (Selim) NAS is een vakman. Hij heeft ervaring met verschillende merken. Uw wagen is dus in goede handen</p>
                                            </div>
                                            <div class="testimonials-one__single-client-info">
                                                <div class="testimonials-one__single-client-info-img">
                                                    <div class="testimonials-one__single-client-info-img-inner">
                                                        <img src="assets/images/man.png" alt="" />
                                                    </div>
                                                </div>
                                                <div class="testimonials-one__single-client-info-title">
                                                    <h4>P. Martin</h4>
                                                    <p>Klant</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonials-one__single item">
                                            <div style="height:170px !important;">
                                                <p class="testimonials-one__single-text">Steeds een correcte en snelle service. Wat voor auto ook, Stefan kan ze maken. Hij legt je ook perfect uit wat er mis is met de wagen en hoe ...</p>
                                            </div>
                                            <div class="testimonials-one__single-client-info">
                                                <div class="testimonials-one__single-client-info-img">
                                                    <div class="testimonials-one__single-client-info-img-inner">
                                                        <img src="assets/images/vrouw.png" alt="" />
                                                    </div>
                                                </div>
                                                <div class="testimonials-one__single-client-info-title">
                                                    <h4>Liesbet Muyldermans</h4>
                                                    <p>Klant</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonials-one__single item">
                                            <div style="height:170px !important;">
                                                <p class="testimonials-one__single-text">Top garage! Uit ervaring weet ik dat Stefan elk probleem van elk merk kan oplossen. Correcte diagnose en herstellingen aan correcte prijzen. </p>
                                            </div>
                                            <div class="testimonials-one__single-client-info">
                                                <div class="testimonials-one__single-client-info-img">
                                                    <div class="testimonials-one__single-client-info-img-inner">
                                                        <img src="assets/images/man.png" alt="" />
                                                    </div>
                                                </div>
                                                <div class="testimonials-one__single-client-info-title">
                                                    <h4>Aliano S.</h4>
                                                    <p>Klant</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Testimonials One Right-->
                </div>
            </div>
        </section>
        <!--Testimonials One End-->
    </main>
      <!--einde main-->
        <section id="contact" class="contact-one">
            <div class="container">
                <div class="sec-title text-center">
                    <span class="sec-title__tagline">contacteer ons</span>
                    <h2 class="sec-title__title">Bent u geïnteresseerd of heeft u vragen?</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-one__content" style="padding-right:0px;">
                            <p class="contact-one__text">
                              Bij SN Cars staan we klaar om al uw vragen te beantwoorden.
                              Aarzel niet om ons te contacteren via dit contactformulier.
                              We streven ernaar om uw ervaring bij ons zo vlot en aangenaam mogelijk te maken.
                              We kijken ernaar uit om u van dienst te zijn!
                            </p>
                        </div>
                            <div class="services-one__single-content text-center" style="height: 150px;">
                                <a href="tel:003215760621" class="read-more-btn"><i class="bi bi-telephone-fill" style="font-size:24px;"></i></a><p style="padding-top: 2px;"><strong>015 68 11 66</strong></p>
                            </div>
                            <div class="services-one__single-content text-center" style="height: 150px;">
                                <a href="mailto:info@garagesncars.be" class="read-more-btn"><i class="bi bi-envelope-fill" style="font-size:24px;"></i></a><p style="padding-top: 2px;"><strong>info@garagesncars.be</strong></p>
                            </div>
                            <div class="services-one__single-content text-center" style="height: 150px;">
                                <a href="#googlemaps" class="read-more-btn"><i class="bi bi-geo-alt-fill" style="font-size:24px;"></i></a><p style="padding-top: 2px;"><strong>Gestelhoflei 14F <br> 2820 Bonheiden</strong></p>
                            </div>
                        <br>
                    </div>
                    <div class="col-lg-8">
                        <form action="assets/inc/sendemail.php"
                            class="contact-one__form comment-one__form contact-form-validated" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Uw naam" name="name">
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Uw email" name="email">
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Uw adres" name="adres">
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Uw telefoonnummer">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="comment-form__input-box">
                                        <textarea name="message" placeholder="Uw bericht"></textarea>
                                    </div>
                                    <button type="submit" class="thm-btn comment-form__btn">Verstuur bericht</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section id="googlemaps" class="contact-page-google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2508.6355128371165!2d4.530128653450201!3d51.04135229647579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3e47a454197f9%3A0xe1e5193f6bf713c9!2sGestelhoflei%2014f%2C%202820%20Bonheiden!5e0!3m2!1snl!2sbe!4v1709221212019!5m2!1snl!2sbe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" 
                class="contact-page-google-map__one"  allowfullscreen></iframe>
        </section>
        <!-- end contact -->

      
        

<?php
// Inclusie van de footer
include 'footer.php';
?>
