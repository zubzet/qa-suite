<?php return ["layout" => function($opt, $body, $head) { ?>
    <html>
        <head>
            <meta charset="utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <?= $head($opt); ?>
        </head>
        <body>
            <div class="container">
                <h2>MailLayout</h2>
                <div class="card">
                    <?= $body($opt); ?>
                </div>
            <div>
        </body>
    </html>
<?php }]; ?>
