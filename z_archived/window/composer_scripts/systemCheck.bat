@echo off
title System Check
:: Set to run as admin
::if not "%1"=="am_admin" (powershell start -verb runas '%0' am_admin & exit/b)

:: IPv4 of the server
set frontEnd = \\25.51.181.62
set messaging = \\25.51.161.242
set database = \\25.51.181.62
:: Continuous loop for system check
:check
:: Perform systems check
sc \\25.51.181.62 query Apache2.4
sc \\25.51.161.242 query RabbitMQ
sc \\25.51.181.62 query mySQL80
echo ===================================================================
timeout /t 5 /nobreak
goto check
