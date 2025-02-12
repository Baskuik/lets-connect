
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Permissions-Policy" content="interest-cohort=()">
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
         :root{scroll-behavior:smooth;--c-brand:#25255b;--c-brand-light:#f58220;--c-text:black;--c-text-accent:var(--c-brand);--c-text-light-1:#2c2c83;--c-text-light-2:#b1b1b1;--c-text-light-3:#e4e4e4;--c-code:#ffffff;--c-text-light-grey:#949494;--c-bg:#e7e7e7;--c-bg-light:#f3f3f3;--c-bg-superlight:#fafafa;--c-bg-dark:#555555;--c-bg-blockquote:#ffffff;--fontfamily:'Helvetica Neue','Arial',sans-serif;--codefont:'Azeret Mono',monospace;--lineheight:1.8rem;--fontsize:16px;--c-box-shadow:rgba(0, 0, 0, 0.1) 0px 4px 6px -1px,rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;--c-box-shadow-hover:rgba(0, 0, 0, 0.1) 0px 4px 12px;--c-course-level-1:var(--c-brand);--c-course-level-1-dark:#000;--c-course-level-2:var(--c-text-light-2);--c-course-level-3:var(--c-brand-light)}h1,h2,h3{font-weight:700;color:#000}h1{font-size:1.6rem;line-height:2.2rem;margin-bottom:3rem}ol,p,ul{margin-bottom:1rem}ol,ul{margin-left:1rem}h2{font-size:1.2rem;line-height:1.8rem;margin-bottom:0;margin-top:2rem}h3{margin-top:1.5rem;font-size:1.1rem;line-height:1.4rem}h4,h5{font-size:1rem;line-height:1.2rem;display:inline-block}h4.coursetitle{border-bottom:1px solid var(--c-brand);margin-top:0;width:100%}h5{border:none}a{color:var(--c-text)}nav{text-align:right}a.nav-link{display:inline-block;border-radius:4px;padding:4px;margin-left:32px}a.nav-link[aria-current]{color:#fff;background-color:var(--c-text)}a#logolink{display:block}code[class*=language-],pre[class*=language-]{background-color:var(--c-code);color:#383942;font-family:"Fira Code","Fira Mono",Menlo,Consolas,"DejaVu Sans Mono",monospace;direction:ltr;text-align:left;white-space:pre;word-spacing:normal;word-break:normal;line-height:1.5;-moz-tab-size:2;-o-tab-size:2;tab-size:2;-webkit-hyphens:none;-moz-hyphens:none;-ms-hyphens:none;hyphens:none;overflow-x:scroll;overflow-y:scroll}code[class*=language-] ::-moz-selection,code[class*=language-]::-moz-selection,pre[class*=language-] ::-moz-selection{background:#e5e5e5;color:inherit}code[class*=language-] ::selection,code[class*=language-]::selection,pre[class*=language-] ::selection{background:#e5e5e5;color:inherit}pre[class*=language-]{padding:1em;margin:.5em 0;border-radius:.3em;box-shadow:var(--c-box-shadow);overflow:auto}:not(pre)>code[class*=language-]{padding:.2em .3em;border-radius:.3em;white-space:normal}.token.cdata,.token.comment,.token.prolog{color:#8e8e8e}.token.doctype,.token.entity,.token.punctuation{color:#383942}.token.atrule,.token.attr-name,.token.boolean,.token.class-name,.token.constant,.token.number{color:#b66a00}.token.keyword{color:#a625a4}.token.deleted,.token.important,.token.property,.token.symbol,.token.tag{color:#e35549}.token.attr-value,.token.attr-value>.token.punctuation,.token.builtin,.token.char,.token.inserted,.token.regex,.token.selector,.token.string{color:#50a04f}.token.function,.token.operator,.token.variable{color:#4078f1}.token.url{color:#0083bb}.token.attr-value>.token.punctuation.attr-equals,.token.special-attr>.token.attr-value>.token.value.css{color:#383942}.language-css .token.selector{color:#e35549}.language-css .token.property{color:#383942}.language-css .token.function,.language-css .token.url>.token.function{color:#0083bb}.language-css .token.url>.token.string.url{color:#50a04f}.language-css .token.atrule .token.rule,.language-css .token.important{color:#a625a4}.language-javascript .token.operator{color:#a625a4}.language-javascript .token.template-string>.token.interpolation>.token.interpolation-punctuation.punctuation{color:#c91142}.language-json .token.operator{color:#383942}.language-json .token.null.keyword{color:#b66a00}.language-markdown .token.url,.language-markdown .token.url-reference.url>.token.string,.language-markdown .token.url>.token.operator{color:#383942}.language-markdown .token.url>.token.content{color:#4078f1}.language-markdown .token.url-reference.url,.language-markdown .token.url>.token.url{color:#0083bb}.language-markdown .token.blockquote.punctuation,.language-markdown .token.hr.punctuation{color:#9fa0a6;font-style:italic}.language-markdown .token.code-snippet{color:#50a04f}.language-markdown .token.bold .token.content{color:#b66a00}.language-markdown .token.italic .token.content{color:#a625a4}.language-markdown .token.list.punctuation,.language-markdown .token.strike .token.content,.language-markdown .token.strike .token.punctuation,.language-markdown .token.title.important>.token.punctuation{color:#e35549}.token.bold{font-weight:700}.token.comment,.token.italic{font-style:italic}.token.entity{cursor:help}.token.namespace{opacity:.8}.token.token.cr:before,.token.token.lf:before,.token.token.space:before,.token.token.tab:not(:empty):before{color:hsla(230,8%,24%,.2)}div.code-toolbar>.toolbar.toolbar>.toolbar-item{margin-right:.4em}div.code-toolbar>.toolbar.toolbar>.toolbar-item>a,div.code-toolbar>.toolbar.toolbar>.toolbar-item>button,div.code-toolbar>.toolbar.toolbar>.toolbar-item>span{background:#e5e5e5;color:#696b76;padding:.1em .4em;border-radius:.3em}div.code-toolbar>.toolbar.toolbar>.toolbar-item>a:focus,div.code-toolbar>.toolbar.toolbar>.toolbar-item>a:hover,div.code-toolbar>.toolbar.toolbar>.toolbar-item>button:focus,div.code-toolbar>.toolbar.toolbar>.toolbar-item>button:hover,div.code-toolbar>.toolbar.toolbar>.toolbar-item>span:focus,div.code-toolbar>.toolbar.toolbar>.toolbar-item>span:hover{background:#c6c6c7;color:#383942}.line-highlight.line-highlight{background:hsla(230,8%,24%,.05)}.line-highlight.line-highlight:before,.line-highlight.line-highlight[data-end]:after{background:#e5e5e5;color:#383942;padding:.1em .6em;border-radius:.3em;box-shadow:0 2px 0 0 rgba(0,0,0,.2)}pre[id].linkable-line-numbers.linkable-line-numbers span.line-numbers-rows>span:hover:before{background-color:hsla(230,8%,24%,.05)}.command-line .command-line-prompt,.line-numbers.line-numbers .line-numbers-rows{border-right-color:hsla(230,8%,24%,.2)}.command-line .command-line-prompt>span:before,.line-numbers .line-numbers-rows>span:before{color:#9d9d9f}.rainbow-braces .token.token.punctuation.brace-level-1,.rainbow-braces .token.token.punctuation.brace-level-5,.rainbow-braces .token.token.punctuation.brace-level-9{color:#e35549}.rainbow-braces .token.token.punctuation.brace-level-10,.rainbow-braces .token.token.punctuation.brace-level-2,.rainbow-braces .token.token.punctuation.brace-level-6{color:#50a04f}.rainbow-braces .token.token.punctuation.brace-level-11,.rainbow-braces .token.token.punctuation.brace-level-3,.rainbow-braces .token.token.punctuation.brace-level-7{color:#4078f1}.rainbow-braces .token.token.punctuation.brace-level-12,.rainbow-braces .token.token.punctuation.brace-level-4,.rainbow-braces .token.token.punctuation.brace-level-8{color:#a625a4}pre.diff-highlight>code .token.token.deleted:not(.prefix),pre>code.diff-highlight .token.token.deleted:not(.prefix){background-color:hsla(353,100%,66%,.15)}pre.diff-highlight>code .token.token.deleted:not(.prefix) ::-moz-selection,pre.diff-highlight>code .token.token.deleted:not(.prefix)::-moz-selection,pre>code.diff-highlight .token.token.deleted:not(.prefix) ::-moz-selection,pre>code.diff-highlight .token.token.deleted:not(.prefix)::-moz-selection{background-color:hsla(353,95%,66%,.25)}pre.diff-highlight>code .token.token.deleted:not(.prefix) ::selection,pre.diff-highlight>code .token.token.deleted:not(.prefix)::selection,pre>code.diff-highlight .token.token.deleted:not(.prefix) ::selection,pre>code.diff-highlight .token.token.deleted:not(.prefix)::selection{background-color:hsla(353,95%,66%,.25)}pre.diff-highlight>code .token.token.inserted:not(.prefix),pre>code.diff-highlight .token.token.inserted:not(.prefix){background-color:hsla(137,100%,55%,.15)}pre.diff-highlight>code .token.token.inserted:not(.prefix) ::-moz-selection,pre.diff-highlight>code .token.token.inserted:not(.prefix)::-moz-selection,pre>code.diff-highlight .token.token.inserted:not(.prefix) ::-moz-selection,pre>code.diff-highlight .token.token.inserted:not(.prefix)::-moz-selection{background-color:hsla(135,73%,55%,.25)}pre.diff-highlight>code .token.token.inserted:not(.prefix) ::selection,pre.diff-highlight>code .token.token.inserted:not(.prefix)::selection,pre>code.diff-highlight .token.token.inserted:not(.prefix) ::selection,pre>code.diff-highlight .token.token.inserted:not(.prefix)::selection{background-color:hsla(135,73%,55%,.25)}.prism-previewer-gradient.prism-previewer-gradient div,.prism-previewer.prism-previewer:before{border-color:#f2f2f2}.prism-previewer-color.prism-previewer-color:before,.prism-previewer-easing.prism-previewer-easing:before,.prism-previewer-gradient.prism-previewer-gradient div{border-radius:.3em}.prism-previewer.prism-previewer:after{border-top-color:#f2f2f2}.prism-previewer-flipped.prism-previewer-flipped.after{border-bottom-color:#f2f2f2}.prism-previewer-angle.prism-previewer-angle:before,.prism-previewer-easing.prism-previewer-easing,.prism-previewer-time.prism-previewer-time:before{background:#fff}.prism-previewer-angle.prism-previewer-angle circle,.prism-previewer-time.prism-previewer-time circle{stroke:hsl(230,8%,24%);stroke-opacity:1}.prism-previewer-easing.prism-previewer-easing circle,.prism-previewer-easing.prism-previewer-easing line,.prism-previewer-easing.prism-previewer-easing path{stroke:hsl(230,8%,24%)}.prism-previewer-easing.prism-previewer-easing circle{fill:transparent}.video-wrapper{position:relative;z-index:1;margin-top:2rem;padding-bottom:56.25%;height:0}.video-wrapper iframe{position:absolute;z-index:-1;top:0;left:0;width:100%;height:100%;border-radius:4px}*,::after,::before{box-sizing:border-box;margin:0;padding:0}body{display:flex;flex-direction:column;font-family:var(--fontfamily);font-weight:400;font-size:var(--fontsize);color:var(--c-text);line-height:var(--lineheight);background-color:var(--c-bg-light)}header{width:100vw;margin:0 auto 0 auto;height:5rem;min-height:5rem;background-color:var(--c-bg);box-shadow:var(--c-box-shadow)}footer,header>div{display:flex;justify-content:space-between;width:80vw;max-width:1280px;margin:0 auto 0 auto;margin-top:1rem}header>div>div{display:flex}a.hamburger{display:none}main{width:80vw;max-width:1280px;margin:0 auto 0 auto;display:flex;flex-direction:row;min-height:calc(100vh - 220px)}main>div#content{padding:1.1rem 0 1rem 1rem;width:calc(80vw - 238px)}footer{padding-top:16px}ol p{margin-bottom:0}img{width:100%}#logo{width:120px;margin-left:1rem}aside{margin-top:1.5rem;width:240px;min-width:240px}aside a{text-decoration:none}aside>ul{list-style-type:none;padding:0;margin-right:1rem}aside>ul li{padding:3px 6px 3px 6px;background-color:var(--c-text-light-3);border:1px solid var(--c-text-light-3);margin:2px;border-radius:4px;display:inline-block;width:100%;height:100%;margin-left:0}aside>ul li:hover{background-color:#fff;border:1px solid var(--c-text-light-1)}.active,[aria-current]{background-color:#fff;border:1px solid var(--c-text-light-1)}li[aria-current] a{background-color:#fff}div#prevnext{display:block;background-color:#c8c8c8;margin-left:32px;border-radius:8px;padding-right:38px}ul.prevnext{list-style-type:none;padding:0;margin-top:4px}a#previous-link{margin-right:32px}#prevnext,a.page-link>div{display:flex;justify-content:space-between;width:100%}#arrow-back,#arrow-forward{position:relative;top:2px;font-size:.8rem}#next-link .title,#previous-link .title{font-size:.8rem}div.title{flex-wrap:nowrap}div.difficulty{display:flex;justify-content:flex-end}div.difficulty img{height:20px;width:auto}div.toc ul{list-style-type:none;padding:0;margin:0}blockquote{background-color:var(--c-bg-blockquote);border:1px solid var(--c-text-light-1);border-left:5px solid var(--c-text-light-1);padding:.5rem;border-radius:4px;margin-bottom:2rem;margin-top:2rem;box-shadow:var(--c-box-shadow)}nav#topnav{display:block}.nav-link{text-decoration:none}.nav-link:hover{color:#ff5700}.nav-link .material-icons{vertical-align:bottom}a.nav-link{vertical-align:bottom;margin-left:2rem}div.author{width:100%;text-align:right;font-weight:400;font-style:italic;font-size:.9rem}pre{white-space:pre;width:calc(80vw - 238px);max-width:calc(1280px - 238px);overflow:auto;background-color:#fff;border:1px solid var(--c-text);padding:5px}code{background-color:var(--c-code);border-radius:4px}div.html{background-color:var(--c-bg);padding:16px;border-radius:4px}div.html table td,div.html table th{border:1px solid var(--c-text);padding:4px}div.html table{border-collapse:collapse}@media only screen and (min-width:1281px){nav#smallnav{display:none}aside{display:block}div#mobile{display:block}}@media only screen and (max-width:1280px){main{display:block}nav#topnav{display:none}a.hamburger{display:block}aside,main>div#content{width:80vw}aside{display:none;margin-top:1rem;padding-top:1rem}nav#topnav{display:none}nav#smallnav{margin:1.1rem .5rem 0 0;padding:1rem;width:80vw;text-align:left;border-radius:4px}nav#smallnav a{color:#fff;text-decoration:none;display:block;padding-left:1rem;margin-bottom:2px;border:1px solid #fff;width:100%;border-radius:4px;padding:3px 6px 3px 6px;background-color:var(--c-text)}nav#smallnav a:hover{color:var(--c-text);background-color:#fff;border:1px solid var(--c-text)}nav#smallnav a[aria-current]{color:var(--c-text);background-color:#fff;border:1px solid var(--c-text)}div#mobile{display:flex;flex-direction:row;padding-left:1rem}pre{width:calc(80vw);max-width:calc(80vw - 2rem)}}@media only screen and (max-width:480px){header>div{width:90vw}#logo{margin-left:0}aside,main>div#content{width:90vw;padding:1rem .5rem 0 0}nav#smallnav{padding:1rem 0 0 0}main{width:90vw}div#mobile{display:flex;flex-direction:row;padding-left:0}aside ul{margin-left:0;width:60vw}pre{width:calc(90vw);max-width:calc(90vw - 2rem)}}

    </style>
</head>


<body>
<header>
    <div>
        <a href="home" class="nav-link"> deltion</a>       
        <div>
            <nav id="topnav"> 
                    <a href="dashboard" class="nav-link" >home</a>           
            </nav>
            <a href="javascript:void(0);" class="nav-link hamburger" onclick="toggleNav()"><span class="material-icons">menu</span></a>
        </div>
    </div>
</header>

</div>
<main>       
<aside id="right">
    <ul>
        <li >
            <a class="page-link" href="Workshop1">
                <div>
                    <div class="title">Workshop1</div>
                    <div class="difficulty">         
                    </div>
                </div>
            </a>
        </li>
    
        <li >
            <a class="page-link" href="Workshop2">
                <div>
                    <div class="title">Workshop2</div>
                    <div class="difficulty">        
                    </div>
                </div>
            </a>
        </li>
    
        <li >
            <a class="page-link" href="Workshop3">
                <div>
                    <div class="title">Workshop3</div>
                    <div class="difficulty">        
                    </div>
                </div>
            </a>
        </li>
    
    </ul>
</aside>

</div>
<div id="content">      
<h1 id="html-eerste-website">Workshop</h1>
<h2 id="resultaat">Deltion Workshop</h2>
<p>Alle Deltion studenten kunnen kiezen uit een flink aantal interessante Deltion Workshop.​​​​​​​</p>
<ul>
</ul>
</li>
<lu>Spelregels 2024-2025: </lu>
<ul>
<li>De keuzedelen worden in één, twee, drie of vier periodes gegeven en na 17.30 uur aangeboden om zoveel mogelijk studenten de mogelijkheid te geven om mee te doen.</li>
<li>Als het workshop op school wordt aangeboden, kan je op kosten van Deltion ook avondeten op school.
<li>Per workshop is een minimaal en maximaal aantal studenten verbonden. Dit vult zich op volgorde van binnenkomst.</li>
<li>Er zijn geen kosten verbonden aan het volgen van een deltion workshop zolang je het volgt en afrondt.</li>
<li>Je mag niet een workshop kiezen wat ook binnen je opleiding wordt aangeboden of wat overlap heeft met je eigen opleiding. ​​​​​</li>
<li>Voor de talen A1/A2/beginners geldt: Het workshop is relevant voor studenten die geen of nauwelijks voorkennis van de betreffende taal hebben.</li>
<ul></ul>
<p>
<a href="register1" class="button-link">melden</a> je nu aan. Vol = vol. </p>
</ul>
</li>
</ul>
</li>
</div>
</main>

<footer>

    <footer>
   
    </footer>

</footer>

<script>
    let smallnav=document.getElementById("smallnav"),aside=document.getElementById("right");function toggleNav(){"block"===smallnav.style.display?(smallnav.style.display="none",aside.style.display="none"):window.innerWidth<=1280&&(smallnav.style.display="block",aside.style.display="block")}window.onresize=l=>{window.innerWidth>1280&&(smallnav.style.display="none",aside.style.display="block"),window.innerWidth<=1280&&(aside.style.display="none",smallnav.style.display="none")};
</script>
</body>
</html><?php /**PATH C:\Users\bas15\Documents\GitHub\lets-connect\resources\views/home.blade.php ENDPATH**/ ?>