<?php return [ 'body' => function($opt) { ?>
    <div id="form"></div>
    <script>
        var form = Z.Forms.create({
            dom: "form",
        });

        form.createField({
            name: "field",
            type: "text",
        });

        form.createField({
            name: "field_number",
            type: "number"
        });

        form.createField({
            name: "field_text",
            type: "text",
            text: "FieldText"
        });

        form.createField({
            name: "field_required",
            type: "text",
            required: true
        });

        form.createField({
            name: "field_placeholder",
            type: "text",
            placeholder: "Placeholder"
        });

        form.createField({
            name: "field_value",
            type: "text",
            value: "Value"
        });

        form.createField({
            name: "field_food",
            type: "select",
            food: [
                {text: "Food", value: "Food"}
            ]
        });

        form.createField({
            name: "field_width",
            type: "text",
            width: 4
        });

        form.createField({
            name: "field_custom_attribute",
            type: "text",
            attributes: {
                "disabled": "disabled"
            }
        });
    </script>
<?php }]; ?>