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

    <div id="form-html"></div>
    <script>
        var form = Z.Forms.create({
            dom: "form-html",
        });

        form.addCustomHTML("<h2>Custom HTML</h2>");
    </script>

    <div id="form-button"></div>
    <script>
        var form = Z.Forms.create({
            dom: "form-button",
        });

        $(form.buttonSubmit).html(":(");
    </script>

    <div id="form-seperator"></div>
    <script>
        var form = Z.Forms.create({
            dom: "form-seperator",
        });

        form.addSeperator();
    </script>

    <div id="form-variables">
        <h2 id="form-variables-value">Vorher</h2>

        <script>
            var form = Z.Forms.create({
                dom: "form-variables",
            });

            var value = form.createField({
                name: "Value",
                type: "text",
                value: "Value"
            });

            $("#form-variables-value").text(value.input.value);
        </script>
    </div>

    <div id="form-parent-hide"></div>
    <script>
        var form = Z.Forms.create({
            dom: "form-parent-hide",
        });

        var formInput = form.createField({
            name: "test",
            type: "text",
            value: "Test"
        });

        $(formInput.input).parent().hide();
    </script>

    <div id="form-current-row-length"></div>
    <script>
        var form = Z.Forms.create({
            dom: "form-current-row-length",
        });

        form.createField({
            name: "test",
            type: "text",
            value: "Test",
            width: 6
        });

        form.currentRowLength = 9;

        form.createField({
            name: "test",
            type: "text",
            value: "Test",
            width: 6
        });
    </script>

    <div id="form-eventlistener"></div>
    <h2 id="form-eventlistener-item">Abc</h2>
    <script>
        var form = Z.Forms.create({
            dom: "form-eventlistener",
        });

        var event = form.createField({
            name: "test",
            type: "text",
            value: "Test",
            attributes: {
                "id": "form-eventlistener-input"
            }
        });

        event.input.addEventListener("click", () => {
            $("#form-eventlistener-item").text("Teest");
        });
    </script>

    <div id="form-hint"></div>
    <script>
        var form = Z.Forms.create({
            dom: "form-hint",
        });

        form.hint("alert-danger", "Test");
    </script>

    <div id="form-unhint"></div>
    <script>
        var form = Z.Forms.create({
            dom: "form-unhint",
        });

        form.hint("alert-danger", "Test");

        form.unhint();
    </script>

    <div id="form-actionbutton"></div>
    <h2 id="form-actionbutton-text">ABC</h2>
    <script>
        var form = Z.Forms.create({
            dom: "form-actionbutton",
        });

        form.createActionButton("asd", "btn-danger", (element) => {
            $("#form-actionbutton-text").text("Changed");
        });
    </script>


    <div id="form-autocomplete"></div>
    <script>
        var form = Z.Forms.create({
            dom: "form-autocomplete"
        });

        form.createField({
            name: 'autocomplete',
            type: 'autocomplete',
            autocompleteData: ['Test', 'Data', 'Hehe', 'Heheheha'],
        });

    </script>

<?php }]; ?>