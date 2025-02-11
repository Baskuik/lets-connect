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
    --clr-primary-400:#C0C0C0;


    --clr-neutral-100: #FFF;
    --clr-neutral-900: #222c2a;

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

    .logo{
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

@media (min-width:768px) {
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
    </style>
    <nav class="navbar">
        <a href="Workshop" class="logo">deltion</a>
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
                <a href="login" class="nav-links">Log in</a>
            </li>
        </ul>
        <div class="nav-toggle">
            <span>+</span>
        </div>
    </nav>

    <section class="header text-center bg-light">
        <div class="container container-narrow">
            <p>Deltion College</p>
            <h1>Ontdek wat jij kan</h1>
        </div>
    </section>

    <section class="text-center">
        <div class="container">
            <h2>workshop</h2>
            <div class="split">
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore eos modi ratione accusamus
                        laudantium
                        eum? Expedita eligendi at, ad quod odit enim sapiente consequatur minima. Sunt qui culpa quos
                        saepe.
                    </p>
                </div>

                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore eos modi ratione accusamus
                        laudantium
                        eum? Expedita eligendi at, ad quod odit enim sapiente consequatur minima. Sunt qui culpa quos
                        saepe.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark">
        <div class="container">
            <div class="split">
                <div>
                    <h2>aanmelden</h2>
                    <div><p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro eaque possimus minima culpa odio illo placeat veritatis soluta suscipit totam debitis rerum voluptate eligendi fuga, saepe quisquam aliquam provident officiis perspiciatis, earum aspernatur temporibus dolorum?
                    </p></div>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1447752875215-b2761acb3c5d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-medium">
        <div class="container">
            <div class="split">
                <div class="margin-bottom">
                    <img src="https://images.unsplash.com/photo-1536257104079-aa99c6460a5a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="">
                </div>
                <div>
                    <h2>dagen en tijden</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam asperiores eos et magni itaque
                        voluptatum reiciendis quasi quibusdam. Totam quaerat omnis aliquam itaque mollitia, adipisci
                        veritatis accusamus consectetur tempore doloremque?</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html><?php /**PATH C:\Users\bas15\Documents\GitHub\lets-connect\resources\views/Workshop.blade.php ENDPATH**/ ?>