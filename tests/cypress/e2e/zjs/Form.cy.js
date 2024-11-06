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
    });

});