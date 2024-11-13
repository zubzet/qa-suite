<?php return [ 'body' => function($opt) { ?>
    <div id="form"></div>

    <script>
        var form = Z.Forms.create({
            dom: "form",
        });

        form.createField({
            name: "Test",
            type: "text",
        });

        form.createField({
            name: "Test",
            type: "text",
            value: "TestValue"
        });

        form.createField({
            name: "Test",
            type: "text",
            placeholder: "TestValue"
        });

        form.createField({
            name: "Test",
            type: "text",
            width: 6
        });

        form.createField({
            name: "Test",
            type: "text",
            width: 6
        });

        form.addCustomHTML("<h2>Hehe</h2>");

        form.addSeperator();

        form.createField({
            name: "Test",
            type: "text",
            required: true
        });

        form.createField({
            name: "Test",
            type: "text",
            value: "TestValue",
            attributes: {
                "disabled": "disabled"
            }
        });

        form.createField({
            name: "number",
            type: "number",
            attributes: {
                min: 1,
                max: 10,
                step: 2
            }
        });

        form.createField({
            name: "Test",
            type: "select",
            food: [
                {text: "Test", value: "Test"},
                {text: "Test1", value: "Test1"}
            ]
        });

        form.createField({
            name: "Test",
            type: "select",
            value: "Test",
            food: [
                {text: "Test", value: "Test"},
                {text: "Test1", value: "Test1"}
            ]
        });

        let margin = form.createField({
            name: "Test",
            type: "text",
            width: 6
        });

        margin.dom.classList.add("mb-5");

        form.currentRowLength = 12;

        form.createField({
            name: "Test",
            type: "text",
            width: 6
        });

        let test = form.createField({
            name: "Test",
            type: "text",
            placeholder: "hehe"
        });

        $(test.input).parent().hide();

        $(form.buttonSubmit).html("Hehe");

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

    <div id="form-hint"></div>
    <script>
        var form = Z.Forms.create({
            dom: "form-send",
        });

        form.hint("alert-warning", "Warning Alert");
    </script>
<?php }]; ?>