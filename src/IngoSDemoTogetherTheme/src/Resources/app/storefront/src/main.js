console.log('main.js in theme plugin');
const ingosthetestconstant = "implicit string assigned using const to verify if Shopware has a default transpilation";
console.log(ingosthetestconstant);
// It has and it even optimizes away the above variable.
// BUT where is my function below? no matter, as we don't need to expose it globally
// Next question: do we need to wait for document complete explicitly?
// AND if the stuff gets transpiled anyway, can we and should we use TypeScript here?
console.log('after REALLY renaming main.js to main.ts');

// <plugin root>/src/Resources/app/storefront/src/main.js
// Import all necessary Storefront plugins
import IngoSDemoTogetherTheme from 'ingo-s-demo-together-theme/ingo-s-demo-together-theme.js';
// Register your plugin via the existing PluginManager
const PluginManager = window.PluginManager;
PluginManager.register('IngoSDemoTogetherTheme', IngoSDemoTogetherTheme);
