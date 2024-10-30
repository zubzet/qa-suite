const { defineConfig } = require("cypress");

module.exports = defineConfig({
  e2e: {
    baseUrl: "http://localhost:4000",
    experimentalRunAllSpecs: true,
    viewportWidth: 1280,
    viewportHeight: 720,
  },
});
