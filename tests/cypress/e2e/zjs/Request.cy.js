describe('Z.Js Request', () => {
    before(() => {
        cy.dbSeed();
    });

    it("ZJs Request", () => {
        cy.visit("/ZJs/request");
        cy.get("#request").contains("YUHU Params");

        cy.get("#root-request").contains(":) def");

        cy.get("#root-request-parse").contains("success");
    });

});