# cPanel Deployment Instructions

## Files to Upload
Upload all files from your Replit project to your cPanel hosting public_html directory:

### Required Files:
- `index.php` (main entry point)
- `admin.php` (admin interface)
- `favicon.ico`
- `robots.txt`
- `sitemap.xml`
- `.htaccess` (URL rewriting and performance)

### Directories:
- `assets/` (CSS, JS, images)
- `data/` (tools data)
- `includes/` (PHP includes)
- `attached_assets/` (uploaded assets)

## Environment Variables
Set these in cPanel Environment Variables or add to your .htaccess:

```
ADMIN_PASSWORD=your_secure_password_here
```

## File Permissions
Ensure these permissions on cPanel:
- PHP files: 644
- Directories: 755
- .htaccess: 644

## Troubleshooting

### If tool links don't work:
1. Check that JavaScript files are loading (no 404 errors)
2. Verify .htaccess mod_rewrite is enabled
3. Test server-side redirect: visit `yoursite.com/?tool=intodns`

### If CSS/JS files show 404:
1. Verify files exist in assets/ directory
2. Check file permissions (644)
3. Ensure .htaccess is uploaded and working

## Testing
After upload, test:
1. Homepage loads correctly
2. Categories navigate properly  
3. Tool cards redirect to external sites
4. Search functionality works
5. Admin panel accessible (if needed)

## Performance
The site includes:
- GZIP compression
- Browser caching
- ETags for optimal performance
- Minified CSS/JS files