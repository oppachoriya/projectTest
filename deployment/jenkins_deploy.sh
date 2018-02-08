#!/usr/bin/env bash
#!/bin/bash
echo "

      #  ######  #    #  #    #     #    #    #   ####
      #  #       ##   #  #   #      #    ##   #  #
      #  #####   # #  #  ####       #    # #  #   ####
      #  #       #  # #  #  #       #    #  # #       #
 #    #  #       #   ##  #   #      #    #   ##  #    #
  ####   ######  #    #  #    #     #    #    #   ####


";
uname=`whoami`
dir='/var/www/html/';
cd $dir;
git checkout application/views/sample/jenkinsTest.php

git fetch --all --prune 2> git.log;

if [ $# -gt 0 ]
then
   git checkout $1
fi

git pull 2>>git.log

err=`cat git.log|egrep 'fail|error|fatal'|wc -l`

if [ $err -gt 0 ]
then
    echo "Failure in fetch";
    echo "################################################";
    cat git.log
    echo "################################################";
    rm git.log
    exit;
fi

echo "NO Errors found in fetch";
echo "################################################";
cat git.log
echo "################################################";

rm git.log

oldversion=`cat .env| grep 'HASH\='`
gHash=`git rev-parse --verify HEAD`
version=`echo HASH=\"$gHash\"`;

sed -i.bu "s/$oldversion/$version/g" .env;
echo "Previous APP_VERSION $oldversion";
echo "New APP_VERSION $version";

php composer.phar install
npm install

flyway migrate


gulp deploy --env qa
cd js/testDashboard
npm install
npm run build
cd $dir

#php index.php cron run taskFirst
./vendor/bin/doctrine orm:generate-proxies
#php index.php cron run cache_prepopulate

./vendor/bin/phpunit /var/www/html/application/tests/
