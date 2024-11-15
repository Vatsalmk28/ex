const fs = require("fs");

// Write to a file
fs.writeFile("example.txt", "Hello, this is a sample text!", (err) => {
  if (err) {
    console.error("Error writing to file:", err);
  } else {
    console.log("File written successfully!");

    // Read from the file
    fs.readFile("example.txt", "utf8", (err, data) => {
      if (err) {
        console.error("Error reading file:", err);
      } else {
        console.log("File content:", data);
      }
    });
  }
});
