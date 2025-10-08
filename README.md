# GTM4Joomla - Community Fork

A Google Tag Manager plugin for Joomla that does it right.

## About This Fork

This is a community-maintained fork of the excellent GTM4Joomla plugin originally created by **Martijn van Vreeden** from Analytics for Joomla. We chose this plugin as our foundation because of Martijn's commitment to implementing GTM correctly from the start.

### Why This Plugin?

Martijn's original work stood out for several important reasons:

- **Early GTM4 Support**: Among the first plugins to properly support Google Tag Manager 4
- **Correct Implementation**: One of the few plugins that places the GTM code and dataLayer correctly according to Google's specifications
- **Standards Compliance**: Follows Google's recommended implementation patterns

This philosophy of "doing it right" is exactly why we've chosen to continue development of this plugin rather than starting from scratch.

## Original Author Recognition

**Full credit and appreciation** goes to **Martijn van Vreeden** (`info@analyticsforjoomla.com`) for creating this solid foundation. His attention to detail in implementing GTM correctly has made this one of the most reliable GTM plugins for Joomla.

The original work can be found at: [Analytics for Joomla](https://www.analyticsforjoomla.com/)

## Community Fork Maintainer

This fork is now maintained by **Gary Barclay** (`gary@barclay.works`) at [Barclay.works](https://www.barclay.works/).

## Installation

1. Download the latest release
2. Install via Joomla's Extension Manager
3. Enable the plugin in System Plugins
4. Configure your GTM Container ID in the plugin settings

## Configuration

1. Go to Extensions → Plugins → System - GTM 4 Joomla
2. Enter your Google Tag Manager Container ID (format: `GTM-XXXXXXX`)
3. Save and enable the plugin

## Development Roadmap

### Current Version: 0.7
- Modern Joomla 4+ compatibility
- HTTPS implementation
- Clean code structure

### Planned Improvements
- **v0.8**: Joomla 5 & 6 compatibility, WebAsset Manager integration
- **v0.9**: Enhanced security and validation
- **v1.0**: GDPR/Cookie consent management
- **v1.1**: Enhanced GTM features and configuration options
- **v1.2**: Advanced dataLayer and ecommerce support

## Philosophy: "Do It Right"

We continue Martijn's philosophy of implementing GTM correctly:

- Proper placement of GTM script in `<head>`
- Correct noscript fallback in `<body>`
- Respect for Google's implementation guidelines
- Clean, maintainable code
- Security-first approach

## License

GNU General Public License version 2 or later

## Support

For support with this community fork, please visit: https://www.barclay.works/

Original plugin documentation: https://www.analyticsforjoomla.com/google-tag-manager/