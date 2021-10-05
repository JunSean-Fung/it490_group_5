@echo off
title System Check
:: Set to run as admin
::if not "%1"=="am_admin" (powershell start -verb runas '%0' am_admin & exit/b)

:: IPv4 of the server
set server = \\25.51.181.62
:: Continuous loop for system check
:check

:: Perform systems check
sc query Apache2.4
sc query RabbitMQ
sc query mySQL80
echo ===================================================================
timeout /t 5 /nobreak
goto check
