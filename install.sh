wget -O latest.zip http://buildwithcraft.com/latest.zip?accept_license=yes
mv latest.zip?accept_license=yes latest.zip
unzip latest.zip
rm latest.zip
# mv public public


mv craft/templates templates
mv craft/plugins plugins



mkdir craft/config/local
cp craft/config/db.php craft/config/local/db.php
cp craft/config/general.php craft/config/local/general.php

mkdir public/assets

rm craft/config/db.php
rm craft/config/general.php
rm public/index.php
rm -fr craft/storage
# rm .gitignore


cp craft-install/db.php craft/config/db.php
cp craft-install/general.php craft/config/general.php
cp craft-install/index.php public/index.php
cp craft-install/gitignore.txt .gitignore
cp craft-install/craftignore.txt .craftignore

mkdir db_backups
mkdir db_backups/local
mkdir db_backups/staging
mkdir db_backups/production
mkdir storage





# chown -R www-data:www-data /
chmod -R 775 public
chmod -R 775 craft
chmod 777 craft/app
chmod 777 craft/config
chmod 777 plugins
chmod 777 storage



# rm -rf craft-install
# rm -rf install.sh
