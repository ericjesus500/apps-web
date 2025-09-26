const fs = require('fs');
const path = require('path');

const iconDir = './icons';

const icons = fs.readdirSync(iconDir)
  .filter(file => file.endsWith('.svg'))
  .map(file => path.basename(file, '.svg'));

const output = `const iconList = ${JSON.stringify(icons, null, 2)};`;

fs.writeFileSync('icon-list.js', output);

console.log('✅ Lista de iconos generada en icon-list.js');
