DynamicPaymentMethods
==================================
Magento-module for showing payment methods dynamically in the one page checkout.

Installation
-----------------------------------------------------
- Copy all content into your Magento root folder.
- Flush cache and Reindex.
- Enjoy!

Features
-----------------------------------------------------
- Show payment method based on customergroup.
- Show payment method based on preview selected shippingmethod.

Example configuration

```json
{
        "checkmo": {
            "customer_groups": ["1","2","0"],
            "shipping_methods": ["freeshipping_freeshipping"]
        },
		"ccsave": {
            "customer_groups": ["1","2","0"],
            "shipping_methods": ["freeshipping_freeshipping","flatrate_flatrate"]
        }
}
```


Knows issues
-----------------------------------------------------
- Won't disable the out of stock product after initial select in dropbox (Only affecting the rwd theme in 1.9.x)