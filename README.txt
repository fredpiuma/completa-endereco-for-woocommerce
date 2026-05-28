=== Completa Endereço ===
Contributors: fredpiuma
Donate link: https://www.fredericodecastro.com.br/links/
Tags: woocommerce, checkout, cep, address, autocomplete
Requires at least: 5.0
Requires PHP: 7.0
Tested up to: 7.0
Stable tag: 1.6
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Automatically completes address fields in WooCommerce checkout based on CEP (Brazilian zip code) using ViaCEP and OpenCEP fallback.

== Description ==

The **Completa Endereço** plugin automatically completes address fields in the WooCommerce checkout based on the CEP (Brazilian zip code) entered by the user.

It utilizes the ViaCEP API as its primary service and features an automatic fallback to the OpenCEP API if the primary service experiences downtime or network issues.

It is fully compatible with standard WooCommerce checkout and popular custom checkout plugins like Fluid Checkout and CartFlows.

= Features =
* Automatic address completion based on the entered CEP.
* Compatible with Fluid Checkout and CartFlows.
* Dual-API reliability: uses ViaCEP as primary and OpenCEP as fallback.
* Prevents AJAX infinite loop issues in checkout when searching for city-wide CEPs (without street names).
* Lightweight, secure, and easy to use.

= Compatibility =
* **WooCommerce (Default Checkout)**
* **Fluid Checkout**
* **CartFlows**

= Third-Party Documentation =
This plugin uses third-party APIs to fetch address data:
* ViaCEP - https://viacep.com.br/
* OpenCEP - https://opencep.com/

= Credits =
* **Original development**: Wanderson Cesar (TESW)
* **Fork and maintenance**: Frederico de Castro
* **Contribution in version 1.5**: Samuel Canale

== Installation ==

1. Upload the plugin folder to the `/wp-content/plugins/` directory, or install the `.zip` file directly through the WordPress dashboard.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Done! The address fields will be automatically completed on the WooCommerce checkout page.

== Frequently Asked Questions ==

= Is the plugin compatible with one-page checkouts? =
Yes, it is compatible with most custom WooCommerce checkout solutions, including Fluid Checkout and CartFlows.

= Which API does the plugin use to search CEPs? =
The plugin searches the ViaCEP API primarily. If it is offline, it automatically falls back to the OpenCEP API.

= Why was the address not completed for my CEP? =
Ensure the CEP entered is valid and contains exactly 8 numeric digits. Very new CEPs may take a few days to be indexed by ViaCEP and OpenCEP databases.

== Upgrade Notice ==

= 1.6 =
This version migrates the service to the ViaCEP API with OpenCEP contingency fallback, and resolves the AJAX infinite loop crash for city-wide CEPs. Immediate upgrade is highly recommended.

== Screenshots ==

1. Example of real-time automatic address completion on the WooCommerce checkout page.

== Changelog ==

= 1.6 =
* Official release of the **Completa Endereço** fork.
* Switched primary CEP API source to ViaCEP.
* Added automatic fallback system to OpenCEP API in case of connection failure.
* Fixed AJAX infinite loop bug in checkouts when searching for city-wide CEPs (without logradouro).
* Updated plugin authorship and links to Frederico de Castro (fredpiuma) and renamed slug.

= 1.5 =
* Original pre-fork version (utilized only OpenCEP and contained the AJAX infinite loop issue on city-wide CEPs).
