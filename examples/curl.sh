#!/bin/bash

# TempMailChecker API - cURL Example
# Get your free API key at https://tempmailchecker.com

API_KEY="YOUR_API_KEY"

# Check if an email is disposable
curl "https://tempmailchecker.com/api/check?email=test@mailinator.com" \
  -H "X-API-Key: $API_KEY"

# Response: { "temp": true }

# Check your daily usage
curl "https://tempmailchecker.com/api/usage?key=$API_KEY"

# Response: { "usage_today": 87, "limit": 100, "reset": "midnight UTC" }

