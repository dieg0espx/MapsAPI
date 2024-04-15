// your-project/functions/index.js

const fs = require('fs');
const path = require('path');

module.exports = (req, res) => {
    const filePath = path.resolve(__dirname, '../index.php');
    const content = fs.readFileSync(filePath, 'utf8');
    
    res.setHeader('Content-Type', 'text/html');
    res.status(200).send(content);
};
