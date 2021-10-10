set +vecho off

# Continuous loop for system check

# Front End Server
echo Attempting to Ping Front-End server...
ping 25.51.181.62
echo ===================================================================
# Messaging Server
echo Attempting to Ping Messaging server...
ping 25.51.161.242
echo ===================================================================
# Database Server
echo Attempting to Ping Database Server...

echo ===================================================================

echo ===========================Ping End================================
echo ===================================================================
timeout /t 5 /nobreak


