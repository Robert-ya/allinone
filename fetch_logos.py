#!/usr/bin/env python3
import requests
from bs4 import BeautifulSoup
import json
import re
from urllib.parse import urljoin, urlparse
import base64
from io import BytesIO
from PIL import Image
import os

def get_favicon_url(site_url):
    """Extract favicon URL from a website"""
    try:
        headers = {
            'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36'
        }
        
        response = requests.get(site_url, headers=headers, timeout=10)
        response.raise_for_status()
        
        soup = BeautifulSoup(response.content, 'html.parser')
        
        # Look for various favicon link tags
        favicon_selectors = [
            'link[rel="icon"]',
            'link[rel="shortcut icon"]', 
            'link[rel="apple-touch-icon"]',
            'link[rel="apple-touch-icon-precomposed"]',
            'link[rel="mask-icon"]'
        ]
        
        for selector in favicon_selectors:
            favicon_link = soup.select_one(selector)
            if favicon_link and favicon_link.get('href'):
                favicon_url = urljoin(site_url, favicon_link['href'])
                return favicon_url
        
        # Fallback to default favicon.ico
        return urljoin(site_url, '/favicon.ico')
        
    except Exception as e:
        print(f"Error fetching favicon for {site_url}: {e}")
        return None

def download_favicon(favicon_url):
    """Download favicon and return as base64 data URL"""
    try:
        headers = {
            'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
        }
        
        response = requests.get(favicon_url, headers=headers, timeout=10)
        response.raise_for_status()
        
        # Get content type
        content_type = response.headers.get('content-type', '').lower()
        
        if 'svg' in content_type:
            # Return SVG as data URL
            svg_content = response.text
            encoded = base64.b64encode(svg_content.encode('utf-8')).decode('utf-8')
            return f"data:image/svg+xml;base64,{encoded}"
        elif 'image' in content_type:
            # Convert to PNG and return as data URL
            try:
                img = Image.open(BytesIO(response.content))
                # Convert to RGBA if needed
                if img.mode != 'RGBA':
                    img = img.convert('RGBA')
                
                # Resize to 24x24 for consistency
                img = img.resize((24, 24), Image.Resampling.LANCZOS)
                
                # Save as PNG
                buffer = BytesIO()
                img.save(buffer, format='PNG', optimize=True)
                buffer.seek(0)
                
                encoded = base64.b64encode(buffer.getvalue()).decode('utf-8')
                return f"data:image/png;base64,{encoded}"
            except Exception as e:
                print(f"Error processing image: {e}")
                return None
        else:
            print(f"Unsupported content type: {content_type}")
            return None
            
    except Exception as e:
        print(f"Error downloading favicon from {favicon_url}: {e}")
        return None

def fetch_tool_logos():
    """Fetch logos for all tools"""
    tools = {
        'IntoDNS': 'https://intodns.com',
        'DNS Checker': 'https://dnschecker.org',
        'MXToolbox': 'https://mxtoolbox.com',
        'Whois.com': 'https://whois.com',
        'NSLookup.io': 'https://nslookup.io',
        'Dig (Web Interface)': 'https://toolbox.googleapps.com/apps/dig/',
        'DNS Stuff': 'https://dnsstuff.com',
        'GTmetrix': 'https://gtmetrix.com',
        'Google PageSpeed Insights': 'https://developers.google.com/speed/pagespeed/insights/',
        'WebPageTest': 'https://webpagetest.org',
        'Pingdom': 'https://pingdom.com',
        'Google Speed Test': 'https://speed.google.com',
        'Pingdom Tools': 'https://tools.pingdom.com',
        'Lighthouse': 'https://developers.google.com/web/tools/lighthouse',
        'KeyCDN Speed Test': 'https://tools.keycdn.com/speed',
        'SSL Labs Test': 'https://www.ssllabs.com/ssltest/',
        'SSL Checker': 'https://sslchecker.com',
        'Why No Padlock?': 'https://whynopadlock.com',
        'Mozilla Observatory': 'https://observatory.mozilla.org',
        'Security Headers': 'https://securityheaders.com',
        'Ping.eu': 'https://ping.eu',
        'DownDetector': 'https://downdetector.com',
        'UptimeRobot': 'https://uptimerobot.com',
        'Can I Use': 'https://caniuse.com',
        'Speedtest.net': 'https://speedtest.net',
        'Fast.com': 'https://fast.com',
        'W3C Markup Validator': 'https://validator.w3.org',
        'W3C CSS Validator': 'https://jigsaw.w3.org/css-validator/',
        'JSON Formatter': 'https://jsonformatter.org',
        'Regex101': 'https://regex101.com',
        'ChatGPT': 'https://chat.openai.com',
        'Claude': 'https://claude.ai',
        'Google Gemini': 'https://gemini.google.com',
        'Perplexity AI': 'https://perplexity.ai',
        'DeepSeek': 'https://chat.deepseek.com',
        'Grok': 'https://grok.com',
        'TinyPNG': 'https://tinypng.com',
        'WAVE Web Accessibility': 'https://wave.webaim.org'
    }
    
    logos = {}
    
    for tool_name, url in tools.items():
        print(f"Fetching logo for {tool_name}...")
        
        favicon_url = get_favicon_url(url)
        if favicon_url:
            print(f"  Found favicon: {favicon_url}")
            logo_data = download_favicon(favicon_url)
            if logo_data:
                logos[tool_name] = logo_data
                print(f"  ✓ Successfully fetched logo for {tool_name}")
            else:
                print(f"  ✗ Failed to download logo for {tool_name}")
        else:
            print(f"  ✗ No favicon found for {tool_name}")
    
    return logos

if __name__ == "__main__":
    print("Fetching tool logos...")
    logos = fetch_tool_logos()
    
    print(f"\nSuccessfully fetched {len(logos)} logos")
    
    # Save results to JSON file
    with open('tool_logos.json', 'w') as f:
        json.dump(logos, f, indent=2)
    
    print("Logos saved to tool_logos.json")