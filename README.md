# magento2-feed

#Features
<ul>
<li>Show Wordpress posts on Magento via json file</li>
</ul>

<h2>Composer Installation Instructions</h2>
Add GIT Repository to composer
<pre>
composer config repositories.digimix-magento2-feed vcs https://github.com/digimix/magento2-feed/
</pre>

Since this package is in a development stage, you will need to change the minimum-stability as well to the composer.json file: -
<pre>
"minimum-stability": "dev",
</pre>

After that, need to install this module as follows:
<pre>
  composer require magento/magento-composer-installer
  composer require digimix/feedwidget
</pre>

<br/>
<h2> Mannual Installation Instructions</h2>
go to Magento2Project root dir 
create following Directory Structure :<br/>
<strong>/Magento2Project/app/code/Digimix/FeedWidget</strong>
you can also create by following command:
<pre>
cd /Magento2Project
mkdir app/code/Digimix
mkdir app/code/Digimix/FeedWidget
</pre>

