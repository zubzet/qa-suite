<?php return [ 'body' => function($opt) { ?>
    <div id="form"></div>
    <script>
        var form = Z.Forms.create({
            dom: "form",
        });

    </script>

    <div id="form-hints"></div>
    <script>
        var form = Z.Forms.create({
            dom: "form-hints",
            hidehints: true,
        });

    </script>

    <div id="form-send"></div>
    <script>
        var form = Z.Forms.create({
            dom: "form-send",
            sendOnSubmitClick: false,
        });

    </script>

    <div id="form-html"></>
    <script>
        var form = Z.Forms.create({
            dom: "form-html",
        });

        form.addCustomHTML("<h2>Custom HTML</h2>");

    </script>

    <div id="form-button"></>
    <script>
        var form = Z.Forms.create({
            dom: "form-button",
        });

        $(form.buttonSubmit).html(":(");

    </script>
<?php }]; ?>