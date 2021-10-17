@echo off
title mySQL80
:: Set to run as admin
if not "%1"=="am_admin" (powershell start -verb runas '%0' am_admin & exit/b)

:: Check for apache 2.4 status
set server = \\25.51.181.62
for /f "tokens=4" %%a in ('sc %server% query mySQL80 ^| findstr STATE') do set _CmdResult=%%a
:: Check value
if %_CmdResult%==STOPPED (
    echo Attempting to start mySQL80
    net start mySQL80
) else (
    echo mySQL80 is %_CmdResult% 
)
pause