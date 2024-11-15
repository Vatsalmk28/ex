const myPromise = new Promise((resolve, reject) => {
  setTimeout(() => {
      const success = true; // Change to false to test rejection
      if (success) {
          resolve("Promise fulfilled!");
      } else {
          reject("Promise rejected!");
      }
  }, 1000);
});

// Execute the Promise with .then() and .catch()
myPromise
  .then(result => {
      console.log("Using .then()/.catch():", result);
  })
  .catch(error => {
      console.error("Using .then()/.catch():", error);
  });

// Execute the Promise with async/await
async function executePromise() {
  try {
      const result = await myPromise;
      console.log("Using async/await:", result);
  } catch (error) {
      console.error("Using async/await:", error);
  }
}


executePromise();
