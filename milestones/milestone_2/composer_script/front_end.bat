@echo off
title Apache 2.4
:: Check for apache 2.4 status
set server = \\25.51.181.62
for /f "tokens=4" %%a in ('sc %server% query apache2.4 ^| findstr STATE') do set _CmdResult=%%a
:: Check value
if %_CmdResult%==STOPPED (
    echo Attempting to start Apache 2.4 
    net start apache2.4
) else (
    echo apache 2.4 is %_CmdResult% 
)

pause