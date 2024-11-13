<?php return [ 'body' => function($opt) { ?>
    <div id="form"></div>

    <script>
        let form = Z.Forms.create({
            dom: "form"
        });

        form.createField({
            name: "value",
            type: "text",
            value: "Hehehe"
        });
    </script>

    <div id="values">
        <?php foreach($opt["values"] as $value) {?>
            <?= $value["value"] . " " . $value["fixed"] ?>
         <?php } ?>
    </div>
<?php }]; ?>