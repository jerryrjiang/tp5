#!/bin/bash

#-------------CopyRight-------------
#Name: code synchronous
#Version: 1.0.0
#Type: Subversion Maintance 
#Language: bash shell  
#Date: 2017-1-25  
#Author: Jerryrjiang 

tp_path="/var/www/html/tp5"
ci_time=`date +%Y%m%d`
github_path="https://github.com/jerryrjiang/tp5.git"
cd $tp_path
git add ./*
git commit -m "$ci_time"
if [ $?!=0 ]
then
	exit
fi
git remote add origin $github_path
git push -u origin master
