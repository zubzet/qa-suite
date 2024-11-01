describe('Sending EMails', () => {
    before(() => {
        cy.dbSeed();
    });

    it('Send EMail', () => {
        cy.visit("/rendering/mail");
        cy.visit("http://localhost:3300/");
        cy.get(".unread").first().click();

        cy.get(".pad").contains("admin@zierhut-it.de");
        cy.get(".pad").contains("QA Suite");
        cy.get(".pad").contains("TestEmail");
        cy.get("#tab-2").first().click();
        cy.get(".ace_editor").contains("This is an test email");
    });

    it('Send EMail to User', () =>  {
        cy.visit("/rendering/mailuser");
        cy.visit("http://localhost:3300/");
        cy.get(".unread").first().click();

        cy.get(".pad").contains("customer@zierhut-it.de");
        cy.get(".pad").contains("QA Suite");
        cy.get(".pad").contains("TestEmail");
        cy.get("#tab-2").first().click();
        cy.get(".ace_editor").contains("This is an test email");
    });

});