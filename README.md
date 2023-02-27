The module integrates a Magento 2 based webstore with the **[Zoho CRM](https://www.zoho.eu/crm)** software.  
See also my Magento 2 extensions for [Zoho Inventory](https://github.com/mage2pro/zoho-inventory) and [Zoho Books](https://github.com/mage2pro/zoho-books).  
The module is **free** and **open source**.  
The module is not released yet.  
The module will be released when I will want so.   

## How to install
[Hire me in Upwork](https://upwork.com/fl/mage2pro), and I will: 
- install and configure the module properly on your website
- answer your questions
- solve compatiblity problems with third-party checkout, shipping, marketing modules
- implement new features you need 

### 2. Self-installation
```
bin/magento maintenance:enable
rm -f composer.lock
composer clear-cache
composer require mage2pro/zoho-crm:*
bin/magento setup:upgrade
bin/magento cache:enable
rm -rf var/di var/generation generated/code
bin/magento setup:di:compile
rm -rf pub/static/*
bin/magento setup:static-content:deploy -f en_US <additional locales>
bin/magento maintenance:disable
```

## How to update
```
bin/magento maintenance:enable
composer remove mage2pro/zoho-crm
rm -f composer.lock
composer clear-cache
composer require mage2pro/zoho-crm:*
bin/magento setup:upgrade
bin/magento cache:enable
rm -rf var/di var/generation generated/code
bin/magento setup:di:compile
rm -rf pub/static/*
bin/magento setup:static-content:deploy -f en_US <additional locales>
bin/magento maintenance:disable
```