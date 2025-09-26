# Changelog

All notable changes to this project will be documented in this file.  

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/)  
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).  

---

## [1.0.2] - 2025-09-26

### Added
- **Support Link:** Added Buy Me a Coffee badge and link for community support.  

### Changed
- **Docs:** Updated README.md to include donation link, clarified instructions, and synced with WordPress.org format.  

---

## [1.0.1] - 2023-03-22

### Changed
- **Code Structure:** Wrapped all header removal actions inside a function hooked to `init` for improved compatibility.  
- **Security:** Added a check to ensure the plugin file isn’t accessed directly by verifying `ABSPATH`.  
- **Metadata:** Updated plugin metadata (version, author URI, license) for better clarity and consistency.  
- **Formatting:** Minor improvements to code formatting for enhanced readability and maintenance.  

---

## [1.0.0] - 2023-10-25

### Added
- **Initial Release:** Introduced the Junk Header Remover plugin that automatically removes unnecessary meta tags and links from the `<head>` section.  
  - Removed RSD link.  
  - Removed WordPress generator version.  
  - Removed RSS feed links and extra RSS feed links.  
  - Removed index, wlwmanifest, and adjacent post links.  
