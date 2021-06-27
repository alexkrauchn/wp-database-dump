# wp-database-dump
Dump WordPress database without plugin

If you have only an ftp access to the website, but need to get a database dump, it's a quick way to do this.

## Usage
1. Put the `backup` folder to the root of your website
2. Access a php script from your browser at `your-website.com/backup/backup.php?prepare=1`. Note that you need to pass a GET parameter `prepare` with any value, to prevent unnecessary script calls.
3. The database dump will appear in the same `backup` directory after a while (several seconds to several minutes depending on the database size). Please also make sure to check yout php settings if the database is too big, as `ini_set` statements not always can override server settings.