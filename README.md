# 🛡 TempMailChecker API

Block disposable / temporary emails (Mailinator, 10MinuteMail, GuerrillaMail, etc.) using a fast and simple REST API.

**One request → one boolean.**

```bash
curl "https://tempmailchecker.com/api/check?email=test@mailinator.com" \
  -H "X-API-Key: YOUR_API_KEY"
```

Response:

```json
{ "temp": true }
```

---

## 🚀 Get Started (Free)

You get **25 free requests per day** — no credit card required.

👉 **Get your free API key:** [https://tempmailchecker.com](https://tempmailchecker.com)

---

## 🔌 Endpoints

### Check an email

```
GET /api/check
```

| Parameter | Type   | Description                              |
|-----------|--------|------------------------------------------|
| `email`   | string | Full email to check                      |
| `domain`  | string | (optional) If you already extracted the domain |

**Auth:** API key in header

```
X-API-Key: YOUR_API_KEY
```

**Example:**

```bash
curl "https://tempmailchecker.com/api/check?email=user@mailinator.com" \
  -H "X-API-Key: YOUR_API_KEY"
```

**Response:**

```json
{ "temp": true }
```

---

### Check your usage

```
GET /api/usage?key=YOUR_API_KEY
```

**Example:**

```bash
curl "https://tempmailchecker.com/api/usage?key=YOUR_API_KEY"
```

**Response:**

```json
{
  "usage_today": 87,
  "limit": 25,
  "reset": "midnight UTC"
}
```

---

## 📦 Code Examples

### cURL

```bash
curl "https://tempmailchecker.com/api/check?email=test@mailinator.com" \
  -H "X-API-Key: YOUR_API_KEY"
```

### Python

```python
import requests

r = requests.get(
    "https://tempmailchecker.com/api/check",
    params={"email": "test@mailinator.com"},
    headers={"X-API-Key": "YOUR_API_KEY"}
)
print(r.json())
```

### JavaScript (fetch)

```javascript
const res = await fetch(
  "https://tempmailchecker.com/api/check?email=test@mailinator.com",
  { headers: { "X-API-Key": "YOUR_API_KEY" } }
);
console.log(await res.json());
```

### PHP

```php
<?php
$ch = curl_init("https://tempmailchecker.com/api/check?email=test@mailinator.com");
curl_setopt($ch, CURLOPT_HTTPHEADER, ["X-API-Key: YOUR_API_KEY"]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
echo $result;
```

---

## 🔥 Rate Limits

| Plan | Requests / day | Cost             |
|------|----------------|------------------|
| Free | 25            | Free during beta |

When you exceed the limit:

```json
{
  "error": "Rate limit exceeded",
  "message": "You have exceeded your daily limit of 25 requests",
  "limit": 25,
  "used": 25,
  "reset": "midnight UTC"
}
```

**Need more volume?**  
Reply to your welcome email — we'll upgrade you for free during beta.

---

## 🧰 Use Cases

- ✅ Block fake signups / Mailinator abuse
- ✅ Prevent coupon / referral fraud
- ✅ Reduce newsletter bounces
- ✅ Protect waitlists & beta programs
- ✅ Improve trial → paid conversion rates

---

## 🌐 Status Page

If you ever experience issues, check:  
[https://tempmailchecker.com/status](https://tempmailchecker.com/status)

---

## ❤️ Contribute / Support

If TempMailChecker helps your project, ⭐ **star this repo** — it really helps discovery.

Got feedback or want a feature?  
Open an issue or reply to your onboarding email.

---

## 🔗 Links

- **Homepage:** [https://tempmailchecker.com](https://tempmailchecker.com)
- **API Docs:** [https://tempmailchecker.com/docs](https://tempmailchecker.com/docs)
- **Status:** [https://tempmailchecker.com/status](https://tempmailchecker.com/status)

