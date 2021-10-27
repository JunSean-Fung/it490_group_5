@echo off
title RabbitMQ
:: Set to run as admin
if not "%1"=="am_admin" (powershell start -verb runas '%0' am_admin & exit/b)

:: Check for apache 2.4 status
set server = \\25.51.181.62
for /f "tokens=4" %%a in ('sc %server% query RabbitMQ ^| findstr STATE') do set _CmdResult=%%a
:: Check value
if %_CmdResult%==STOPPED (
    echo Attempting to start RabbitMQ
    net start RabbitMQ
) else (
    echo RabbitMQ is %_CmdResult% 
)
pause