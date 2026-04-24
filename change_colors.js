const fs = require('fs');
const path = require('path');

const directories = [
    './public/assets/colors',
    './public/assets/css',
    './public/css'
];

const replacements = [
  // 1. HEX
  { regex: /#525ce5/gi, replacement: '#067368' }, 
  { regex: /#8CC53D/gi, replacement: '#0FA697' }, 
  { regex: /#38c172/gi, replacement: '#0FA697' }, 
  { regex: /#a44de7/gi, replacement: '#277A8C' }, 
  
  // 2. RGB
  { regex: /rgb\(107,\s*144,\s*56\)/g, replacement: 'rgb(6, 115, 104)' },
  { regex: /rgba\(107,\s*144,\s*56/g, replacement: 'rgba(6, 115, 104' },
  { regex: /rgba\(128,\s*177,\s*60/g, replacement: 'rgba(39, 122, 140' },
  { regex: /rgba\(204,\s*238,\s*155/g, replacement: 'rgba(15, 166, 151' },
  { regex: /rgba\(140,\s*197,\s*61/g, replacement: 'rgba(15, 166, 151' }, 
];

function processDirectory(dir) {
    if (!fs.existsSync(dir)) return;
    const files = fs.readdirSync(dir);
    for (const file of files) {
        const fullPath = path.join(dir, file);
        if (fs.statSync(fullPath).isDirectory()) {
            processDirectory(fullPath);
        } else if (fullPath.endsWith('.css')) {
            let content = fs.readFileSync(fullPath, 'utf8');
            let originalContent = content;
            
            replacements.forEach(r => {
                content = content.replace(r.regex, r.replacement);
            });
            
            if (content !== originalContent) {
                fs.writeFileSync(fullPath, content, 'utf8');
                console.log('Mis à jour: ' + fullPath);
            }
        }
    }
}

console.log("Application de la palette...");
directories.forEach(dir => processDirectory(dir));
console.log("Terminé.");
