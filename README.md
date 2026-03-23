# Conzent CMP for Matomo Tag Manager

Adds **Conzent CMP** as a native tag type in Matomo Tag Manager. Manage cookie consent on your website with a simple Website Key configuration — no custom HTML required.

## Features

- GDPR, CCPA & ePrivacy compliant cookie consent banner
- Google Consent Mode v2 support
- IAB TCF v2.2 support
- Configurable via Website Key (no code needed)
- Works with self-hosted Conzent OCI installations

## Requirements

- Matomo 4.0 or later
- Tag Manager plugin activated (included by default since Matomo 3.7)

## Installation

### Via Matomo Marketplace

1. Go to **Administration > Platform > Marketplace**
2. Search for "Conzent CMP"
3. Click **Install**
4. Activate the plugin

### Manual Installation

1. Download or clone this repository
2. Copy the `ConzentCmp` folder to your Matomo `plugins/` directory
3. Go to **Administration > Platform > Plugins**
4. Find "Conzent CMP" and click **Activate**

## Usage

1. Go to **Tag Manager** in Matomo
2. Select your container
3. Click **Create New Tag**
4. Select **Conzent CMP** from the "Consent Management" category
5. Enter your **Website Key** (found in your Conzent dashboard under Sites)
6. Assign a trigger (e.g., "All Page Views")
7. Save and publish your container

### Self-hosted Conzent OCI

If you are running a self-hosted Conzent OCI instance, change the **Server URL** field to your Conzent installation URL.

## Support

- Documentation: [https://getconzent.com/docs](https://getconzent.com/docs)
- Website: [https://getconzent.com](https://getconzent.com)
- Issues: [https://github.com/conzent-net/conzent-matomo-cmp/issues](https://github.com/conzent-net/conzent-matomo-cmp/issues)

## License

GPL-3.0-or-later
