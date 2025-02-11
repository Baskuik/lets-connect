<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<style>
        :root {
            --clr-primary-200: #F5F5F5;
            --clr-primary-400: #C0C0C0;
            --clr-neutral-100: #FFF;
            --clr-neutral-900: #222c2a;
            --clr-light-gray: #D3D3D3;
            --clr-dark-blue: #00008B;
            --clr-hover-orange: #FFA500;
            --ff-primary: 'Roboto', sans-serif;
            --ff-accent: 'Playfair Display SC', sans-serif;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: var(--ff-primary);
            font-size: 21px;
        }

        .navbar {
            background-color: var(--clr-neutral-900);
            min-height: 10vh;
            display: flex;
            justify-content: space-around;
            align-items: center;
            font-weight: 700;
        }

        .logo, .nav-toggle {
            font-size: 2em;
            color: var(--clr-neutral-100);
        }

        .main-nav {
            list-style: none;
            display: flex;
            width: 60%;
            justify-content: space-around;
        }

        .logo, .nav-links, .nav-toggle {
            color: var(--clr-neutral-100);
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .nav-toggle {
            display: none;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .main-nav {
                position: absolute;
                width: 100%;
                display: flex;
                flex-direction: column;
                top: 10vh;
                align-items: center;
                justify-content: center;
                height: 40%;
                background-color: var(--clr-neutral-900);
                transform: scale(1, 0);
                transform-origin: top;
                transition: all 300ms ease-in;
            }

            .logo {
                margin-right: auto;
                margin-left: 1em;
            }

            .nav-toggle {
                margin-left: auto;
                margin-right: 1em;
            }

            .main-nav li {
                margin: 1em auto;
            }

            .nav-links {
                opacity: 0;
            }

            .nav-toggle {
                display: block;
            }

            .active {
                transform: scale(1, 1);
            }
        }

        @keyframes navLinksFade {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        h1 {
            font-size: 2em;
        }

        h1,
        h2,
        h3 {
            line-height: 1;
            margin-bottom: 1em;
            font-family: var(--ff-accent);
            color: var(--clr-primary-400);
        }

        h2,
        h3,
        p {
            margin-bottom: 1em;
        }

        section,
        .header {
            padding: 3em 0;
        }

        .bg-light {
            background-color: var(--clr-primary-200);
        }

        .bg-dark {
            background-color: var(--clr-neutral-900);
            color: var(--clr-neutral-100);
        }

        .bg-medium {
            background-color: var(--clr-primary-400);
            color: var(--clr-neutral-100);
        }

        .bg-dark h2,
        .bg-medium h2 {
            color: var(--clr-neutral-100);
        }

        .text-center {
            text-align: center;
        }

        .container {
            margin-inline: auto;
            width: 90%;
            max-width: 70.5rem;
        }

        .container-narrow {
            max-width: 30rem;
        }

        img {
            display: block;
            max-width: 100%;
        }

        .margin-bottom {
            margin-bottom: 1em;
        }

        @media (min-width: 768px) {
            .split {
                display: flex;
                flex-direction: row;
            }

            .split > * {
                flex-basis: 100%;
            }

            .split > * + * {
                margin-left: 2em;
            }
        }

        /* Accordion Styles */
        #programmasection3 {
            padding: 2em;
            background-color: var(--clr-light-gray);
            color: var(--clr-dark-blue);
            font-family: var(--ff-primary);
            text-align: center;
            margin: 2em auto;
            width: 90%;
            max-width: 800px;
            border-radius: 10px;
        }

        #programmasection3 .page-header {
            margin-bottom: 1.5em;
        }

        #programmasection3 .sectionTitle {
            font-size: 1.8em;
            color: var(--clr-dark-blue);
            font-family: var(--ff-accent);
        }

        #programmasection3 p {
            margin-bottom: 1em;
            line-height: 1.6;
        }

        #programmasection3 .accordion {
            border: 1px solid var(--clr-neutral-900);
            border-radius: 5px;
            overflow: hidden;
            width: 100%;
            margin: 0 auto;
        }

        #programmasection3 .accordion-group {
            border-bottom: 1px solid var(--clr-neutral-900);
        }

        #programmasection3 .accordion-heading {
            background-color: var(--clr-dark-blue);
            color: var(--clr-neutral-100);
            padding: 1em;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #programmasection3 .accordion-heading:hover {
            background-color: var(--clr-hover-orange);
        }

        #programmasection3 .accordion-body {
            padding: 1em;
            background-color: var(--clr-primary-200);
            display: none;
        }

        #programmasection3 .accordion-body.show {
            display: block;
        }

        #programmasection3 .btn {
            background-color: rgb(245, 130, 32);
            color: rgb(255, 255, 255);
            padding: 0.5em 1em;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-top: 1em;
        }

        #programmasection3 .btn:hover {
            background-color: rgb(230, 115, 28);
        }
    </style>
    <nav class="navbar">
        <a href="#" class="logo">deltion</a>
        <ul class="main-nav">
            <li>
                <a href="Workshop" class="nav-links">Home</a>
            </li>
            <li>
                <a href="#" class="nav-links">help</a>
            </li>
            <li>
                <a href="Workshopaanmelden" class="nav-links">Contact</a>
            </li>
            <li>
                <a href="#" class="nav-links">About</a>
            </li>
        </ul>
        <div class="nav-toggle">
            <span>+</span>
        </div>
    </nav>
    <section id="programmasection3" aria-labelledby="programmasection3_title">
        <div class="page-header">
            <h2 id="programmasection3_title" class="sectionTitle">Workshops in het theater</h2>
        </div>
        <p>De workshops in het theater zijn elk één workshopronde beschikbaar.</p>
        <div class="accordion">
            <div class="accordion-group">
                <div class="accordion-heading" onclick="toggleAccordion(this)">
                    Workshopronde 1: Zit er muziek in jou? En, zit er muziek in jouw netwerk?
                    <img alt="" height="10" src="USER-FILES/8708-abvries-site/media/pijl13x10.png" style="float:right" width="13">
                </div>
                <div class="accordion-body">
                    <p>Richard de Hoop	 
Richard de Hoop is een gepassioneerde entertainer en ondernemer en spreekt over samenwerken en veerkracht. Hij is enthousiasmerend, motiverend en iemand die een serieuze inhoud op een luchtige manier over kan brengen. In zijn verhaal gebruikt hij muziek als metafoor en inspiratiebron.

Richard de Hoop spreekt in het theater van 13:00 - 13:45 uur en is dus alleen workshopronde 1 beschikbaar!</p>
                    <a class="btn" href="#skipLink">aanmelden</a>
                </div>
            </div>
            <div class="accordion-group">
                <div class="accordion-heading" onclick="toggleAccordion(this)">
                Workshopronde 2: AI en netwerken?
                    <img alt="" height="10" src="USER-FILES/8708-abvries-site/media/pijl13x10.png" style="float:right" width="13">
                </div>
                <div class="accordion-body">
                    <p>Arnold Kramer	 
Arnold Kramer neemt je op interactieve wijze mee in allerlei nieuwe ontwikkelingen rondom AI en laat je verkennen hoe je dit kunt inzetten bij het netwerken.

Deze workshop wordt gegeven van 13:45 - 14:30 uur en is dus alleen workshopronde 2 beschikbaar!</p>
                    <a class="btn" href="Workshopform">aanmelden
                    </a>
                </div>
            </div>
            <div class="accordion-group">
                <div class="accordion-heading" onclick="toggleAccordion(this)">
                Workshopronde 3: Tom Leeuwenburg
                    <img alt="" height="10" src="USER-FILES/8708-abvries-site/media/pijl13x10.png" style="float:right" width="13">
                </div>
                <div class="accordion-body">
                    <p>Tom Leeuwenburg (Rotterdam, 1993) is saxofonist, producent en programmeur in Zwolle. Na het doorlopen van zijn conservatoriumtijd in Rotterdam en Berlijn heeft hij deze afgerond aan ArtEZ in Zwolle. Naast optreden heeft hij ook ervaring in de volledige breedte van de culturele sector. De laatste jaren spreekt hij met liefde over zijn leermomenten en zo ook tijdens Let's Connect!

Naast optreden op het podium in binnen- en buitenland produceert hij nu negen jaar een concertreeks in Zwolle, programmeerde jaren een podium, staat ruim 15 jaar wekelijks op het podium en werkt als marketeer en docent op het ArtEZ Conservatorium. 

Tom komt uit eigen ervaring vertellen over:
- Bij de kern blijven
- Passievuur of waakvlam 
- De financiële tijd balans 
- Verbreden of verdiepen?
- Netwerken zonder colbert

Tom Leeuwenburg spreekt in het theater van 15.00 - 15:45 uur en is dus alleen workshopronde 3 beschikbaar!  </p>
                    <a class="btn" href="#skipLink">aanmelden</a>
                </div>
            </div>
            </section>

            <section id="programmasection3" aria-labelledby="programmasection3_title">
        <div class="page-header">
            <h2 id="programmasection3_title" class="sectionTitle">Workshops 2</h2>
        </div>
        <p>De workshops.</p>
        <div class="accordion">
            <div class="accordion-group">
                <div class="accordion-heading" onclick="toggleAccordion(this)">
                Workshopronde 3: Tom Leeuwenburg
                    <img alt="" height="10" src="USER-FILES/8708-abvries-site/media/pijl13x10.png" style="float:right" width="13">
                </div>
                <div class="accordion-body">
                    <p>Richard de Hoop is een gepassioneerde entertainer en ondernemer en spreekt over samenwerken en veerkracht...</p>
                    <a class="btn" href="#skipLink">aanmelden</a>
                </div>
            </div>
            <div class="accordion-group">
                <div class="accordion-heading" onclick="toggleAccordion(this)">
                    Workshopronde 2: 
                    <img alt="" height="10" src="USER-FILES/8708-abvries-site/media/pijl13x10.png" style="float:right" width="13">
                </div>
                <div class="accordion-body">
                    <p>Arnold Kramer neemt je op interactieve wijze mee in allerlei nieuwe ontwikkelingen rondom AI...</p>
                    <a class="btn" href="#skipLink">aanmelden</a>
                </div>
            </div>
            <div class="accordion-group">
                <div class="accordion-heading" onclick="toggleAccordion(this)">
                    Workshopronde 3:
                    <img alt="" height="10" src="USER-FILES/8708-abvries-site/media/pijl13x10.png" style="float:right" width="13">
                </div>
                <div class="accordion-body">
                    <p>Arnold Kramer neemt je op interactieve wijze mee in allerlei nieuwe ontwikkelingen rondom AI...</p>
                    <a class="btn" href="#skipLink">aanmelden</a>
                </div>
            </div>
            </section>


            <section id="programmasection3" aria-labelledby="programmasection3_title">
        <div class="page-header">
            <h2 id="programmasection3_title" class="sectionTitle">Workshops 3</h2>
        </div>
        <p>De workshops</p>
        <div class="accordion">
            <div class="accordion-group">
                <div class="accordion-heading" onclick="toggleAccordion(this)">
                    Workshopronde 1: 
                    <img alt="" height="10" src="USER-FILES/8708-abvries-site/media/pijl13x10.png" style="float:right" width="13">
                </div>
                <div class="accordion-body">
                    <p>Richard de Hoop is een gepassioneerde entertainer en ondernemer en spreekt over samenwerken en veerkracht...</p>
                    <a class="btn" href="#skipLink">aanmelden</a>
                </div>
            </div>
            <div class="accordion-group">
                <div class="accordion-heading" onclick="toggleAccordion(this)">
                    Workshopronde 2: 
                    <img alt="" height="10" src="USER-FILES/8708-abvries-site/media/pijl13x10.png" style="float:right" width="13">
                </div>
                <div class="accordion-body">
                    <p>Arnold Kramer neemt je op interactieve wijze mee in allerlei nieuwe ontwikkelingen rondom AI...</p>
                    <a class="btn" href="#skipLink">aanmelden</a>
                </div>
            </div>
            <div class="accordion-group">
                <div class="accordion-heading" onclick="toggleAccordion(this)">
                    Workshopronde 3:
                    <img alt="" height="10" src="USER-FILES/8708-abvries-site/media/pijl13x10.png" style="float:right" width="13">
                </div>
                <div class="accordion-body">
                    <p>Arnold Kramer neemt je op interactieve wijze mee in allerlei nieuwe ontwikkelingen rondom AI...</p>
                    <a class="btn" href="#skipLink">aanmelden</a>
                </div>
            </div>
            </section>




    <script>
    function toggleAccordion(element) {
        const body = element.nextElementSibling;
        body.classList.toggle('show');
    }
    </script>

</body>
</html>