echo off
NET STOP wampapache64
NET STOP wampmysqld64
NET STOP wampmariadb64
start /wait c:\wamp64\wampmanager.exe -quit -id={wampserver}

xcopy "C:\wamp64\www\IGHug\db\ighug_db" "C:\wamp64\bin\mysql\mysql5.7.21\data\ighug_db" /e /i

start /wait c:\wamp64\wampmanager.exe -id={wampserver}