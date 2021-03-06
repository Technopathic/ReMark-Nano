<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <meta name="description" content="{!! $options->aboutWebsite !!}">
    <meta name="keywords" content="{!! $topic->topicTags !!}" />

    <meta property="og:title" content="{!! $topic->topicTitle !!}" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="{!! $metaDesc !!}" />
    <meta property="og:image" content="{!! $metaImage !!}" />

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <title>{{$topic->topicTitle}}</title>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,200,500,900' rel='stylesheet' type='text/css'>

    <style>

      body {
        background:#EEEEEE;
        font-family: 'Lato', sans-serif;
      }

      .container {
        width:600px;
        margin:0 auto;
        display:flex;
        flex-direction:column;
      }

      .navbar {
        height:45px;
        background:#FFFFFF;
        width:100%;
        text-align:center;
        font-variant:small-caps;
      }

      .navbar h1 {
        margin:0 !important;
        padding:0 !important;
      }

      .navbar a {
        color:#222222;
        text-decoration:none;
      }

      .topic {
        padding:15px;
        margin-top:15px;
        background:#FFFFFF;
      }

      .topicTitle h3 {
        margin:0 !important;
        padding:0 !important;
        font-variant:small-caps;
      }

      .topicDate {
        font-size:0.8em;
      }

      .topic img {
        width:100%;
      }

      .channels {
        height:40px;
        background:#FFFFFF;
        width:100%;
        text-align:center;
        font-variant:small-caps;
        margin-top:10px;
      }

      .channels ul {
        list-style:none;
        text-align:center;
        margin:0 auto;
      }

      .channels ul li {
        display:inline-block;
        padding:10px 20px;
      }

      .channels ul li a {
        text-decoration:none;
        color:#222222;
      }

    </style>
  </head>
  <body>
    <div class="container">
      <div class="navbar"><h1><a href="{!! $options->baseurl !!}">{{$options->website}}</a></h1></div>
      <div class="topic">
        <div class="topicHead">
          <div class="topicTItle"><h3>{{$topic->topicTitle}}</h3></div>
          <br/>
          <div class="topicDate">{{ date('D Y/m/d H:i T', strtotime($topic->created_at)) }}</div>
        </div>
        <div class="topicImg"><img src="/{!! $topic->topicImg !!}" /></div>
        <div class="topicDesc">{!! Markdown::convertToHtml(html_entity_decode($topic->topicBody)) !!}</div>
      </div>
    </div>
  </body>
</html>
