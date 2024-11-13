describe('Z.Js Form', () => {
    before(() => {
        cy.dbSeed();
    });

    it('Forms', () => {
        cy.visit("/ZJs/formfields");

        cy.get("input[name=field]");

        cy.get("input[name=field_number]")
            .invoke('attr', 'type')
            .should('equal', 'number');

        cy.get("input[name=field_text]")
            .parent().contains("FieldText");

        cy.get("input[name=field_required]")
            .siblings(".input-required");

        cy.get("input[name=field_placeholder]")
            .invoke('attr', 'placeholder')
            .should('equal', 'Placeholder');

        cy.get("input[name=field_value")
            .should("have.value", "Value");

        cy.get("select[name=field_food]")
            .contains('option', 'Food');

        cy.get("input[name=field_width]")
            .parent()
            .should("have.class", "col-md-4");

        cy.get("input[name=field_custom_attribute")
            .should("have.attr", "disabled");
    });

    it("Form features", () => {
        cy.visit("/ZJs/formfeatures");

        cy.get("#form button").click();
        cy.get("#form .alert").contains("Error while saving");

        cy.get("#form-hints button").click();
        cy.get("#form-hints .alert").should("have.class", "d-none");

        cy.intercept('POST', '/ZJs/formfeatures').as('FormRequest');
        cy.get('#form-send button').click();
        cy.get('@FormRequest.all').should('have.length', 0);

        cy.get("#form-html").contains("Custom HTML");

        cy.get("#form-button button").contains(":(");

        cy.get("#form-seperator").within(() => {
            cy.get("hr");
        });

        cy.get("#form-variables-value").contains("Value");

        cy.get("#form-parent-hide").within(() => {
            cy.get("input").parent().should("not.be.visible");
        });

        cy.get("#form-current-row-length").within(() => {
            cy.get(".form-group").should("have.length", 3)
        });

        cy.get("#form-eventlistener-input").click();
        cy.get("#form-eventlistener-item").contains("Teest");

        cy.get("#form-hint").within(() => {
            cy.get(".alert").should('have.class', 'alert-danger');
            cy.contains("Test");
        });

        cy.get("#form-unhint").within(() => {
            cy.get(".alert").should('have.class', 'alert-danger').should("not.visible");
            cy.contains("Test");
        });


        cy.get("#form-actionbutton").within(() => {
            cy.get(".btn-danger").click()
        });

        cy.get("#form-actionbutton-text").contains("Changed");


        cy.get("#form-autocomplete").within(() => {
            cy.get("input[name=autocomplete]").click().type("He");
            cy.get("button[type=button]").contains('Hehe').click();

            cy.get("input[name=autocomplete]").click().type("H");
            cy.get("button[type=button]").contains("Heheheha");
            cy.get("button[type=button]").contains('Hehe').click();

            cy.get("input[name=autocomplete]").should("have.value", "Hehe")
        });

        cy.get("#form-autocomplete").within(() => {
            cy.get("input[name=autocomplete]").click().clear();
            cy.get("input[name=autocomplete]").click().type("Hehe");
            cy.get("button[type=button]").should("have.class", "text-primary");
        });

        cy.get("#form-autocomplete").within(() => {
            cy.get("input[name=autocomplete]").click().clear();
            cy.get("input[name=autocomplete]").click().type("ABC");
            cy.get("button[type=button]").should("not.exist");
        });
    });

    it("Form compare", () => {
        cy.visit("/ZJs/formcompare");
        cy.fixture('standard_html.html').then((expectedHtml) => {
            cy.get('#form').invoke('html').then((actualHtml) => {
                expect(actualHtml).to.equal(expectedHtml);
            });
        });
    });

});