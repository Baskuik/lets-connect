
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Permissions-Policy" content="interest-cohort=()">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Deltion Software Development | HTML Eerste website</title>
    <meta name="description" content="Opdrachten en projecten voor de opleiding Software Development bij Deltion College in Zwolle.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        if ("serviceWorker" in navigator) {
            navigator.serviceWorker
                .register('/codebase/service-worker.js')
                .then(function() {
                    console.log("ServiceWorker has been registered!");
                })
                .catch(console.error);
        }
      
    </script>
    
<style>

:root {
    scroll-behavior: smooth;


    --c-brand: #25255b;
    --c-brand-light: #f58220;
    --c-text: black;
    --c-text-accent: var(--c-brand);
    --c-text-light-1: #2c2c83;
    --c-text-light-2: #b1b1b1;
    --c-text-light-3: #e4e4e4;
    --c-code: #ffffff;
    --c-text-light-grey: #949494;
    --c-bg: #e7e7e7;
    --c-bg-light: #f3f3f3;
    --c-bg-superlight: #fafafa;
    --c-bg-dark: #555555;
    --c-bg-blockquote: #ffffff;
    --c-box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;
    --c-box-shadow-hover: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    --c-course-level-1: var(--c-brand);
    --c-course-level-1-dark: #000;
    --c-course-level-2: var(--c-text-light-2);
    --c-course-level-3: var(--c-brand-light);

    
    --fontfamily: 'Helvetica Neue', 'Arial', sans-serif;
    --codefont: 'Azeret Mono', monospace;
    --lineheight: 1.8rem;
    --fontsize: 16px;
}
h1, h2, h3 {
    font-weight: 700;
    color: #000;
}
h1 {
    font-size: 1.6rem;
    line-height: 2.2rem;
    margin-bottom: 3rem;
}
h2 {
    font-size: 1.2rem;
    line-height: 1.8rem;
    margin: 2rem 0 0 0;
}
h3 {
    margin-top: 1.5rem;
    font-size: 1.1rem;
    line-height: 1.4rem;
}
h4, h5 {
    font-size: 1rem;
    line-height: 1.2rem;
    display: inline-block;
}
h4.coursetitle {
    border-bottom: 1px solid var(--c-brand);
    margin-top: 0;
    width: 100%;
}
h5 {
    border: none;
}

a {
    color: var(--c-text);
    text-decoration: none;
}

a.nav-link {
    display: inline-block;
    border-radius: 4px;
    padding: 4px;
    margin-left: 32px;
}

a.nav-link[aria-current] {
    color: #fff;
    background-color: var(--c-text);
}

code[class*=language-], pre[class*=language-] {
    background-color: var(--c-code);
    color: #383942;
    font-family: "Fira Code", "Fira Mono", Menlo, Consolas, "DejaVu Sans Mono", monospace;
    text-align: left;
    white-space: pre;
    word-spacing: normal;
    word-break: normal;
    line-height: 1.5;
    overflow-x: scroll;
    overflow-y: scroll;
}

pre[class*=language-] {
    padding: 1em;
    margin: .5em 0;
    border-radius: .3em;
    box-shadow: var(--c-box-shadow);
    overflow: auto;
}

:not(pre) > code[class*=language-] {
    padding: .2em .3em;
    border-radius: .3em;
    white-space: normal;
}

body {
    display: flex;
    flex-direction: column;
    font-family: var(--fontfamily);
    font-weight: 400;
    font-size: var(--fontsize);
    color: var(--c-text);
    line-height: var(--lineheight);
    background-color: var(--c-bg-light);
}

header {
    width: 100vw;
    height: 5rem;
    background-color: var(--c-bg);
    box-shadow: var(--c-box-shadow);
}

footer, header > div {
    display: flex;
    justify-content: space-between;
    width: 80vw;
    max-width: 1280px;
    margin: 0 auto;
    margin-top: 1rem;
}

main {
    width: 80vw;
    max-width: 1280px;
    margin: 0 auto;
    display: flex;
    flex-direction: row;
    min-height: calc(100vh - 220px);
}

aside {
    margin-top: 1.5rem;
    width: 240px;
    min-width: 240px;
}

aside ul {
    list-style-type: none;
    padding: 0;
    margin-right: 1rem;
}

aside ul li {
    padding: 3px 6px;
    background-color: var(--c-text-light-3);
    border: 1px solid var(--c-text-light-3);
    margin: 2px;
    border-radius: 4px;
    display: inline-block;
    width: 100%;
    height: 100%;
}

aside ul li:hover {
    background-color: #fff;
    border: 1px solid var(--c-text-light-1);
}


@media only screen and (min-width: 1281px) {
    nav#smallnav {
        display: none;
    }

    aside {
        display: block;
    }
}

@media only screen and (max-width: 1280px) {
    main {
        display: block;
    }

    nav#topnav {
        display: none;
    }

    aside, main > div#content {
        width: 80vw;
    }
}

@media only screen and (max-width: 480px) {
    header > div {
        width: 90vw;
    }

    aside, main > div#content {
        width: 90vw;
        padding: 1rem .5rem 0 0;
    }
}


.container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .form-group button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
        .header {
            background-color: #003366;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <div>
        <a href="home" class="nav-link"> deltion</a>       
        <div>
            <a href="javascript:void(0);" class="nav-link hamburger" onclick="toggleNav()"><span class="material-icons">menu</span></a>
        </div>
    </div>
</header>

<main>       
<form method="POST" action="/register">
    @csrf
    <div class="form-group">
        <label for="leerlingcode">Leerlingcode</label>
        <input type="text" class="form-control" id="leerlingcode" name="leerlingcode" required>
    </div>
    <div class="form-group">
        <label for="name">Naam</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="workshop1">Workshop ronde 1</label>
        <select class="form-control" id="workshop1" name="workshop1" required>
            <option value="">Selecteer een workshop</option>
            <option value="workshop1">Workshop 1</option>
            <option value="workshop2">Workshop 2</option>
            <option value="workshop3">Workshop 3</option>
        </select>
    </div>
    <div class="form-group">
        <label for="workshop2">Workshop 2</label>
        <select class="form-control" id="workshop2" name="workshop2" required>
            <option value="">Selecteer een workshop</option>
            <option value="workshop1">Workshop 1</option>
            <option value="workshop2">Workshop 2</option>
            <option value="workshop3">Workshop 3</option>
        </select>
    </div>
    <div class="form-group">
        <label for="workshop3">Workshop 3</label>
        <select class="form-control" id="workshop3" name="workshop3" required>
            <option value="">Selecteer een workshop</option>
            <option value="workshop1">Workshop 1</option>
            <option value="workshop2">Workshop 2</option>
            <option value="workshop3">Workshop 3</option>
            <option value="workshop4">Workshop 4</option>
        </select>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Aanmelden</button>
    </div>
</form>
</main>

<footer>
    <footer>
    
    </footer>
</footer>

<script>
    let smallnav=document.getElementById("smallnav"),aside=document.getElementById("right");function toggleNav(){"block"===smallnav.style.display?(smallnav.style.display="none",aside.style.display="none"):window.innerWidth<=1280&&(smallnav.style.display="block",aside.style.display="block")}window.onresize=l=>{window.innerWidth>1280&&(smallnav.style.display="none",aside.style.display="block"),window.innerWidth<=1280&&(aside.style.display="none",smallnav.style.display="none")};
</script>
</body>
</html>