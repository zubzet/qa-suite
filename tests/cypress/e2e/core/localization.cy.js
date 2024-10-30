describe('Localiziation', () => {
    before(() => {
        cy.dbSeed();
    });

    it('Localization', () =>  {
        cy.loginAs("admin");
        cy.visit("/Core/Localization");
        cy.contains("Berechtigungen");

        cy.loginAs("customer");
        cy.visit("/Core/Localization");
        cy.contains("Permission");
    });
});