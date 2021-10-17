set +vecho off

# Continuous loop for system check

# Front End Server
echo Attempting to Ping Front-End server...
ping -c 4 25.83.212.229
echo ===================================================================
# Back End Server
echo Attempting to Ping Messaging server...
ping -c 4 25.80.87.100
echo ===================================================================
# Database Server
echo Attempting to Ping Database Server...
ping -c 4 25.79.46.137
echo ===================================================================

echo ===========================Ping End================================
echo ===================================================================


