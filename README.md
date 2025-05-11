=== Header Junk Remover ===

![License](https://img.shields.io/badge/license-GPLv3-blue)
![WP Tested](https://img.shields.io/badge/WordPress-6.4.0-brightgreen)
![Version](https://img.shields.io/badge/version-1.0.1-orange)
![Stable](https://img.shields.io/badge/stable-yes-success)
![Maintained](https://img.shields.io/badge/maintained-yes-green)
![Made by](https://img.shields.io/badge/made%20by-AvocadoWeb-brightgreen)


Contributors: Joseph Brzezowski ( https://github.com/avocadowebservices/Junk-Header-Remover )  
Tags: header, junk, optimization, performance, speed, wordpress, seo  
Requires at least: 6.7.1
Tested up to: 6.7.1 
Stable tag: 1.0.1  
License: GPLv3  
License URI: https://www.gnu.org/licenses/gpl-3.0.html  

== Description ==  

**Header Junk Remover** is a lightweight WordPress plugin that removes unnecessary meta tags and links from your site's `<head>` section.  
This improves page speed, enhances security, and reduces clutter—all in one simple file!  

**Features:**  
✔ Removes unnecessary `<meta>` tags (RSD, XMLRPC, WLW, WordPress version, etc.)  
✔ Eliminates extra RSS feed links  
✔ Speeds up page load times by reducing overhead  
✔ Easy to install and use—no configuration needed  

== Installation ==  

### Install via WordPress Dashboard (COMING SOON)  
1. Go to **Plugins > Add New** in your WordPress admin panel  
2. Search for **Header Junk Remover**  
3. Click **Install**, then **Activate**  

### Manual Installation  
1. **Download** and unzip `junk-header-remover.zip`  
2. Upload the `junk-header-remover` folder to `/wp-content/plugins/`  
3. Activate the plugin via **Plugins > Installed Plugins**  

✅ Once activated, it works automatically—no settings required!  

== Frequently Asked Questions ==  

**Q: Do I need to configure anything?**  
A: No, the plugin works automatically upon activation.  

**Q: Will this break my website?**  
A: No, the plugin only removes unnecessary `<meta>` tags that do not affect core functionality.  

== Changelog ==  

### v1.0.1 (Updated)  
- Wrapped functionality inside a proper function hooked to `init`  
- Added security check to prevent direct file access  
- Improved compatibility with the latest WordPress versions  

### v1.0.0 (Initial Release)  
- Released beta version  

== Upgrade Notice ==  

- Always update to the latest version for improved security and performance.  

== Requirements ==  

- WordPress **6.0.0 or greater**  

== Misc ==  

Tested up to: **6.7.1**  
Stable tag: **1.0.1**  
