<head>
    <meta charset="utf-8">
    <?php //     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> ?>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Mono:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:400,700">

    <title>Airaki Willsman - Web Design | Netting, .NET Framework, ASP.NET Web API, ASP</title>

    <meta name='copyright' content='@2023 Airaki Willsman'>
    <meta name='description' content='I want to introduce you to someone who spends his time exploring new ways to connect people like you with websites like me'>
    <meta name="Designer" CONTENT="Airaki Willsman">
    <meta name='language' content='en-US'>
    <meta name='subject' content='internet, backend, web development'>

    <meta name="DC.title" content="Airaki Willsman" />
    <meta name="DC.creator " content="Airaki Willsman" />
    <meta name="DC.creator.address" content="aurora.galaxy0820@gmail.com" />

    <link rel="icon" type="image/png" href="src/media/metatags/favicon16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="src/media/metatags/favicon32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="src/media/metatags/favicon64.png" sizes="64x64">
    <link rel="icon" type="image/png" href="src/media/metatags/favicon180.png" sizes="180x180">

    <meta name="twitter:card" content="Psst.. Hey there" />
    <meta name="twitter:site" content="airaki-p.cyclic.app" />
    <meta name="twitter:title" content="airaki willsman website" />
    <meta name="twitter:description" content="I want to introduce you to someone who spends his time exploring new ways to connect people like you with websites like me" />
    <meta name="twitter:image" content="src/media/metatags/card.png" />

    <meta property="og:title" content="Psst... Hey there" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="//www.sandrina-p.net" />
    <meta property="og:image" content="src/media/metatags/card.png" />

    <?php // inline the critical css to speed up DOM render
    echo $DEV
        ? '<link rel="stylesheet" href="src/critical.min.css">'
        : '<style>' . file_get_contents('src/critical.min.css') . '</style>';
    ?>

    <!--[if lt IE 9 || IE9]>
        <link rel="stylesheet" href="src/index.min.css">
    <![endif]-->

    <noscript>
        <link rel="stylesheet" href="src/index.min.css">
        <style>
            .noscript, .navCV, .chat, .js-psst { display:none!important; }
        </style>
    </noscript>
</head>
