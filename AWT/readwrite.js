const fs = require('fs');

// Reading from a file
fs.readFile('input.txt', 'utf8', (err, data) => {
  if (err) {
    console.error('Error reading file:', err);
    return;
  }
  console.log('File content:', data);

  // Writing to a file
  const outputData = data + '\nThis is appended text!';
  fs.writeFile('output.txt', outputData, 'utf8', (err) => {
    if (err) {
      console.error('Error writing to file:', err);
      return;
    }
    console.log('Data written to file successfully!');
  });
});
