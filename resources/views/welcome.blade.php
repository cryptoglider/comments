<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><script>(()=>{"use strict";(()=>{let t=!1;!function(){if(t)return;function e(t){const e=new Uint8Array(t.length/2);for(let i=0;i<t.length;i+=2)e[i/2]=parseInt(t.substr(i,2),16);return e}function i(t){const e=Math.random().toFixed(10);return new Promise(((i,n)=>{document.addEventListener("wombat-comm-"+e,(t=>{const e=t.detail;e.error?n(e):i(e)}),{once:!0}),document.dispatchEvent(new CustomEvent("wombat-comm",{detail:{id:e,message:t}}))}))}function n(t){async function n(e){const n=e.buf.toString("hex",32,e.buf.length-32),o=await i({type:1,chainId:t.network.chainId,serializedTx:n,modifiable:!0,origin:document.location.host});return o.modified&&(e.transaction.actions.find((t=>"eosio"===t.account))?e.transaction.actions.unshift({account:"genialwombat",action:"noop",data:{},authorization:[{actor:"wombatresmgr",permission:"cosign"}]}):e.transaction.actions[0].authorization.unshift({actor:"wombatresmgr",permission:"active"})),o.signatures}t.identity=null,t.isExtension=!0,t.isConnected=()=>!0,t.requiredVersion="",t.getVersion=()=>Promise.resolve("10.1.12"),t.publicKey="",t.network={chainId:"aca376f206b8fc25a6ed44dbdc66547c36c6c33e3a119ffbeaef943642f0e906",host:"localhost",blockchain:"eos",port:80,protocol:"http",httpEndpoint:"http://localhost"},t.connect=(e,i)=>(i&&i.network&&(t.network=i.network),Promise.resolve(!0)),t.getIdentity=async e=>{const n=e?e.accounts[0].chainId:t.network.chainId;return t.identity=await i({type:0,chainId:n}),t.identity},t.login=t.getIdentity,t.account=()=>t.identity?t.identity.accounts[0]:null,t.getIdentityFromPermissions=()=>t.identity?Promise.resolve(t.identity):t.getIdentity(),t.checkLogin=t.getIdentityFromPermissions,t.forgetIdentity=()=>(t.identity=null,Promise.resolve(!0)),t.logout=t.forgetIdentity,t.getPublicKey=()=>t.identity?Promise.resolve(t.identity.publicKey):Promise.resolve(),t.requireVersion=e=>{t.requiredVersion=e},t.useIdentity=e=>{t.identity=e},t.suggestNetwork=()=>Promise.resolve(!0),t.signProvider=n,t.hookProvider=(n,o,r)=>({requiredFields:{},getAvailableKeys(){if(t.identity){const e=[t.identity.publicKey];return t.identity.accounts.length>1&&e.push(t.identity.accounts[1].publicKey),Promise.resolve(e)}return Promise.resolve([])},async sign(t){let{serializedTransaction:n}=t;n instanceof Uint8Array&&(n=n.reduce(((t,e)=>t+e.toString(16).padStart(2,"0")),""));const o=await i({type:1,chainId:t.chainId,serializedTx:n,modifiable:r||!1,origin:document.location.host});return r?o.modified?{serializedTransaction:e(o.signedTx),signatures:o.signatures}:{serializedTransaction:e(n),signatures:o.signatures}:o.signatures}}),Object.defineProperty(t,"eosHook",{get:()=>t.hookProvider,set:()=>!0}),t.eosMultiHook=(e,i)=>{const n=[t.hookProvider(e)].concat(i);return{getAvailableKeys:async()=>Promise.all(n.map((t=>t.getAvailableKeys()))).then((t=>t.flat())),sign:async t=>({signatures:(await Promise.all(n.map((async i=>i.sign({abis:t.abis,chainId:e.chainId,requiredKeys:await i.getAvailableKeys(),serializedTransaction:t.serializedTransaction}).then((t=>Array.isArray(t)?t:t.signatures)))))).flat(),serializedTransaction:t.serializedTransaction})}},t.eos=(e,i,o,r)=>{if(o&&o.rpc){const n=t.hookProvider(e,{},o.beta3||!0);return new i(Object.assign(o,{signatureProvider:n}))}{o=o||{},t.network=Object.assign(t.network,e),e.protocol||(e.protocol=r||"http");const a=e.protocol+"://"+e.host+":"+e.port,s=e.chainId;return i(Object.assign(o,{httpEndpoint:a,chainId:s,signProvider:n}))}},t.getArbitrarySignature=(e,n)=>i({type:2,data:n,chainId:t.network.chainId,origin:document.location.host}),t.authenticate=(e,n)=>i({type:3,nonce:e,data:n,chainId:t.network.chainId,origin:document.location.host})}if(window.ScatterJS)n(window.ScatterJS.scatter);else{let t;Object.defineProperty(window,"ScatterJS",{get:()=>t,set(e){e&&n(e.scatter),t=e}})}const o={};n(o),window.scatter=o,document.dispatchEvent(new CustomEvent("scatterLoaded")),t=!0}()})()})();</script><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>КриптоКомментарии</title>

    <link rel="canonical" href="http://autocomments.online/">



    <!-- Bootstrap core CSS -->
    <link href="./src/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="manifest" href="./site.webmanifest">
    <link rel="mask-icon" href="./safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

       .video-link {
        display: none;
      }

      a[target="_blank"]:after {
        content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAQElEQVR42qXKwQkAIAxDUUdxtO6/RBQkQZvSi8I/pL4BoGw/XPkh4XigPmsUgh0626AjRsgxHTkUThsG2T/sIlzdTsp52kSS1wAAAABJRU5ErkJggg==);
        margin: 0 3px 0 5px;
      }

      #gmail.error::-webkit-input-placeholder {
        color: #cc0000;
      }
      .form-label {
        font-style: italic;
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="./src/navbar-top.css" rel="stylesheet">
  <script type="text/javascript" id="jQStatus">(function() { window.__sonar = window.__sonar || {}; if(typeof(window.jQuery)!=='undefined'){var event=new CustomEvent('isJQuery',{detail:'yes'});document.dispatchEvent(event);};})()</script></head>
  <body data-new-gr-c-s-check-loaded="14.1006.0" data-gr-ext-installed="">

<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/#">КриптоКомментарии</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/#">Комментарии</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main class="container">
  <div class="bg-light p-5 rounded">
    <h1 style="text-align: center;">Получить комментарий:</h1>
    <br>

    <label for="gmail" class="form-label">Ведите ваш Gmail что-бы получить комментарий и ссылку на видео:</label>
    <div class="input-group mb-3">
      <input type="email" id="gmail" class="form-control" placeholder="Ваш gmail" aria-label="Ваш gmail" aria-describedby="button-addon2">
      <button class="btn btn-outline-secondary" type="button" id="get-in-work">Беру в работу</button>
    </div>

    <div class="mb-3 video-link">
      <label for="gmail" class="form-label">Ваш комментарий:</label>
      <div class="input-group mb-3">
        <input id="comment" class="form-control" value="{{ $comment->text }}">
        <button class="btn btn-outline-secondary" data-clipboard-target="#comment">
            Копировать
        </button>
      </div>

      Ссылка на видео: <a target="_blank" href="{{ $comment->video->link }}">{{ $comment->video->link }}</a>
      <br>
      <br>
      <button class="btn  btn-primary" id="done">
          Я опубликовал
      </button>
    </div>
  </div>
</main>


    <script src="./src/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"></script>
    <script src="https://cdn.rawgit.com/zenorocha/clipboard.js/v2.0.8/dist/clipboard.min.js"></script>
    <script type="text/javascript">
      new ClipboardJS('.btn');

      $('#get-in-work').click(function() {
        if($('#gmail').val() == "") {
          $('#gmail, #get-in-work').css('border-color', '#cc0000');
          $('#gmail').addClass('error');
          $('#gmail').attr('placeholder', 'Введите gmail с которого вы будете публиковать комментарий');
        } else {
          if (/@gmail\.com$/.test($('#gmail').val())) {
            $('#gmail').css('border-color', '#ced4da');
            $('.video-link').show('fast');
          } else {
            $('#gmail, #get-in-work').css('border-color', '#cc0000');
            $('#gmail').addClass('error');
            $('#gmail').val('');
            $('#gmail').attr('placeholder', 'Публиковать комментарий можно только с gmail');
          }
        }
      });
    </script>


<div id="volume-booster-visusalizer">
                    <div class="sound">
                        <div class="sound-icon"></div>
                        <div class="sound-wave sound-wave_one"></div>
                        <div class="sound-wave sound-wave_two"></div>
                        <div class="sound-wave sound-wave_three"></div>
                    </div>
                    <div class="segments-box">
                        <div data-range="1-20" class="segment"><span></span></div>
                        <div data-range="21-40" class="segment"><span></span></div>
                        <div data-range="41-60" class="segment"><span></span></div>
                        <div data-range="61-80" class="segment"><span></span></div>
                        <div data-range="81-100" class="segment"><span></span></div>
                    </div>
                </div></body></html>
