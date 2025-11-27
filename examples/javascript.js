/**
 * TempMailChecker API - JavaScript Example
 * Get your free API key at https://tempmailchecker.com
 */

const API_KEY = "YOUR_API_KEY";

// Check if an email is disposable
async function checkEmail(email) {
  const res = await fetch(
    `https://tempmailchecker.com/api/check?email=${encodeURIComponent(email)}`,
    { headers: { "X-API-Key": API_KEY } }
  );
  
  const data = await res.json();
  console.log(data); // { temp: true }
  
  if (data.temp) {
    console.log("⚠️ Disposable email detected!");
  } else {
    console.log("✅ Legitimate email");
  }
  
  return data;
}

// Check your daily usage
async function checkUsage() {
  const res = await fetch(
    `https://tempmailchecker.com/api/usage?key=${API_KEY}`
  );
  
  const usage = await res.json();
  console.log(`Usage: ${usage.usage_today}/${usage.limit} requests today`);
  
  return usage;
}

// Example usage
checkEmail("test@mailinator.com");
checkUsage();

