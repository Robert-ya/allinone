#!/usr/bin/env python3
import json

# Read the fetched logos
with open('tool_logos.json', 'r') as f:
    logos = json.load(f)

# Generate PHP code for the tool logos
php_logo_entries = []

for tool_name, logo_data in logos.items():
    # Escape single quotes in the logo data for PHP
    escaped_logo = logo_data.replace("'", "\\'")
    
    php_entry = f"""        '{tool_name}' => '<img src="{escaped_logo}" width="24" height="24" alt="{tool_name} logo" style="border-radius: 3px;">',"""
    php_logo_entries.append(php_entry)

# Print the PHP entries
print("// Official tool logos (fetched from websites)")
for entry in php_logo_entries:
    print(entry)

print(f"\n// Successfully fetched {len(logos)} official logos")