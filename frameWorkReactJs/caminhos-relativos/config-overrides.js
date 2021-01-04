const { injectBabelPlugin } = require('react-app-rewired');

const rootImport = [
   "root-import",
   {
     rootPathPrefix: "~", //A nova referencia da pasta raiz.
     rootPathSuffix: "src" //Pasta raiz da aplicação.
   }
];
module.exports = config => injectBabelPlugin(rootImport, config);
