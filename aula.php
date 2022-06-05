<html>
    <head>
        <title>Meu primeiro site em php! sim eu consegui! Saldanha!</title>
          
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Accordion - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
    <style type="text/css">
        .linha  {
          font-wheight: bold;
          color: red;
          padding-left: 10px;
          line-height: 50px;
        }   
    </style>    
    </head>

<body>
<div id="accordion">
  <h3>Primeiro site</h3>
  <div>
    <p>
    Meu nome é bruno e esse é o meu primeiro site.
    </p>
  </div>
  <h3>Essa api eu peguei do jQuery</h3>
  <div>
    <p>
    fui no site : https://jqueryui.com/accordion/ e peguei essa api.
    </p>
  </div>
  <h3>Minhas qualidades</h3>
  <div>
    <p>
    vou deixar algumas qualidades
    </p>
    <ul>
      <li>Sou lindo</li>
      <li>Cheiroso</li>
      <li>Engraçado</li>
      <li>E estou aprendendo a programar</li>   
    </ul>
  </div>
  <h3>Fim</h3>
  <div>
    <p>
    Por equanto é isso depois venho com mais novidades =D
    </p>
  </div>
</div>
 
    <?php
        for ( $i= 0 ; $i <= 10 ; $i++) {
          print( "<span class=\"linha\">Linha número " . $i . "</span><br />");
        }
    ?>     

</body>

  <script type="text/javascript">
    $(document).ready(function()  {
        alert("Meu primeiro site em php! sim eu consegui! Saldanha!");
    });
  </script>

  
</html>

