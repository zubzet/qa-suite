describe('Layout', () => {
    before(() => {
        cy.dbSeed();
    });

    it('Default Layout', () => {
        cy.visit("/Core/render");
        cy.contains("Default Layout");
    });

    it('Layout', () => {
        cy.visit("/Core/Renderlayout");
        cy.contains("New Layout");
        cy.contains("Render");
        cy.query("data").contains("Data");
    });
});