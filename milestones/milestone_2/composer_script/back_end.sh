set +vecho off

# Continuous loop for system check

# Front End Server
echo Attempting to Ping Front-End server...
ping 25.83.212.229
echo ===================================================================
# Messaging Server
echo Attempting to Ping Messaging server...
ping 25.74.57.122
echo ===================================================================
# Database Server
echo Attempting to Ping Database Server...
ping 25.79.46.137
echo ===================================================================

echo ===========================Ping End================================
echo ===================================================================
timeout /t 5 /nobreak


