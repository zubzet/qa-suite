describe('Z.Js Request', () => {
    before(() => {
        cy.dbSeed();
    });

    it('Forms', () => {
        cy.visit("/ZJs/formfields");
    });

});