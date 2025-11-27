"""
TempMailChecker API - Python Example
Get your free API key at https://tempmailchecker.com
"""

import requests

API_KEY = "YOUR_API_KEY"

# Check if an email is disposable
response = requests.get(
    "https://tempmailchecker.com/api/check",
    params={"email": "test@mailinator.com"},
    headers={"X-API-Key": API_KEY}
)

data = response.json()
print(data)  # {"temp": true}

if data["temp"]:
    print("⚠️ Disposable email detected!")
else:
    print("✅ Legitimate email")


# Check your daily usage
usage = requests.get(
    f"https://tempmailchecker.com/api/usage?key={API_KEY}"
).json()

print(f"Usage: {usage['usage_today']}/{usage['limit']} requests today")

