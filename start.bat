@echo off
title LocalHost
:: تنظیمات
set PORT=8000
set HOST=localhost
set FILE=sample/index.php

echo [+] Launching PHP built-in server on %HOST%:%PORT%
start "" /B php -S %HOST%:%PORT% > server.log 2>&1

timeout /t 2 >nul

echo [+] Opening browser to http://%HOST%:%PORT%/%FILE%
start "" "http://%HOST%:%PORT%/%FILE%"

echo [+] PHP server is running. Press any key to stop...
pause >nul

echo [+] Shutting down...
taskkill /F /IM php.exe >nul 2>&1
echo [+] Done.